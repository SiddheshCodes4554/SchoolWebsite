<?php 

include 'includes/config.php';

include("admin/auth_session.php");

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; 
		$editselectqry = "SELECT * FROM videogallery WHERE id='$id'"; 
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
		$link	= $_REQUEST['link'];
		
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];	
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
			
		$path="videothumbnails/".$image_file; 
		
		$directory="videothumbnails/"; 
		
		if($image_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
			{	
				if(!file_exists($path)) 
				{
					if($size < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp, "videothumbnails/" .$image_file);	
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
			$updateqry = "UPDATE videogallery SET link='$link', image='$image_file' WHERE id='$id'"; 
			$updateresult = mysqli_query($conn, $updateqry);
			 
			if($updateresult)
			{
				$updateMsg="File Updated Successfully.......";	
				header("refresh:3;managevideogallery.php");	
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
<title>EDIT Video Details</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
				<label class="col-sm-3 control-label">Link:</label>
				<div class="col-sm-12">
				<input type="url" name="link" value="<?php echo $link; ?>" class="form-control" placeholder="Enter Link" />
				</div>
				</div>
				
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Thumbnail Photo</label>
				<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" value="<?php echo $image; ?>"/><br>
				<p><img src="videothumbnails/<?php echo $image; ?>" height="100" width="100" /></p>
				</div>
				</div>				
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_update" class="btn btn-primary" value="Update">
				<a href="managevideogallery.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>								
	</body>
</html>