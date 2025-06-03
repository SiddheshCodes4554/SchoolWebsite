<?php 

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; 
		$editselectqry = "SELECT * FROM cer WHERE id='$id'"; 
		$editselectresult = mysqli_query($conn, $editselectqry);
		$editselectrow = mysqli_fetch_assoc($editselectresult);
		extract($editselectrow);
	}
	catch(PDOException $e)
	{
		$e->getMessage();
	}
	
}

if(isset($_REQUEST['btn_update']))
{
	try
	{
		$cap = $_REQUEST['cap'];	
	
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];	
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
			
		$path="achievementsphoto/".$image_file; 
		
		$directory="achievementsphoto/"; 
		
		if($image_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
			{	
				if(!file_exists($path)) 
				{
					if($size < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp, "hostelstaffphoto/" .$image_file);	
					}
					else
					{
						$errorMsg="Your File To large Please Upload 5MB Size"; 
					}
				}
				else
				{	
					$errorMsg="File Already Exists...Check Upload Folder"; 
				}
			}
			else
			{
				$errorMsg="Upload JPG, JPEG, PNG & GIF File Formate.....CHECK FILE EXTENSION"; 
			}
		}
		else
		{
			$image_file = $editselectrow['image']; 
		}
	
		if(!isset($errorMsg))
		{
			$updateqry = "UPDATE cer SET cap='$cap', image='$image_file' WHERE id='$id'"; 
			$updateresult = mysqli_query($conn, $updateqry);
			 
			if($updateresult)
			{
				$updateMsg="File Updated Successfully.......";	
				header("refresh:3;manageachievement.php");	
		}
	}
}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>EDIT Achievements</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>

	<body>
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($updateMsg)){
		?>
			<div class="alert alert-success">
				<strong>UPDATE ! <?php echo $updateMsg; ?></strong>
			</div>
        <?php
		}
		?>   
		
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Title:</label>
				<div class="col-sm-6">
				<input type="text" name="cap" class="form-control" value="<?php echo $cap; ?>" required/>
				</div>
				</div>
					
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Photo</label>
				<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" value="<?php echo $image; ?>"/>
				<p><img src="achievementsphoto/<?php echo $image; ?>" height="100" width="100" /></p>
				</div>
				</div>
					
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_update" class="btn btn-primary" value="Update">
				<a href="manageachievement.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>