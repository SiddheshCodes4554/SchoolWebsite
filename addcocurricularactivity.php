<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_REQUEST['btn_insert']))
{
	try
	{
		$title	= $_REQUEST['title'];	
			
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];		
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
		
		$path="cocurricualactivityphoto/".$image_file; 
		
		if(empty($title)){
			$errorMsg="Please Enter Title";
		}
		else if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
		{	
			if(!file_exists($path)) 
			{
				if($size < 5000000)
				{
					move_uploaded_file($temp, "cocurricualactivityphoto/" .$image_file); 
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
			$errorMsg="Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; 
		}
		
		if(!isset($errorMsg))
		{
			$title = $title;
			$image = $image_file;
			$type = "cocurricular_activity";
			$insertqry = "INSERT INTO cer (`image`, `cap`, `type`) VALUES ('$image', '$title', '$type')";
			$insertresult = mysqli_query($conn, $insertqry); 
		
			if(!$insertqry)
			{
				$insertMsg="Acheivement Upload Failed Upload Failed"; 
				header("refresh:3;addcocurricularactivity.php.php"); 
			} else {
			$insertMsg="Co-Curricular Activity Upload Successfully........"; 
				header("refresh:3;managecocurricularactivity.php");
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
<title>ADD Co-Curricular Activity</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body>
		<a class="btn btn-warning mt-3 ml-2" href="managecocurricularactivity.php"><i class="fas fa-arrow-left"></i> Back</a>
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
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?>   	
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Title:</label>
				<div class="col-sm-6">
				<input type="text" name="title" class="form-control" placeholder="Enter Title" />
				</div>
				</div>
				
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Photo</label>
				<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" />
				</div>
				</div>
					
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>