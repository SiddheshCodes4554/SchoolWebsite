<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_REQUEST['btn_insert']))
{
	try
	{
		$link	= $_REQUEST['link'];	
				
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];		
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
		
		$path="videothumbnails/".$image_file; 
		
		if(empty($link)){
			$errorMsg="Please Enter Name";
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
			$errorMsg="Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; 
		}
		
		if(!isset($errorMsg))
		{
			$link = $link;
			$image = $image_file;
			$insertqry = "INSERT INTO videogallery (`image`, `link`) VALUES ('$image', '$link')";
			$insertresult = mysqli_query($conn, $insertqry); 
		
			if(!$insertqry)
			{
				$insertMsg="Video Upload Failed"; 
				header("refresh:3;videoupload.php"); 
			} else {
			$insertMsg="Video Uploaded Successfully........"; 
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
<title>Add Video</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body>
		<a class="btn btn-warning mt-3 ml-2" href="managevideogallery.php"><i class="fas fa-arrow-left"></i> Back</a>
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
		?>   	<br>
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Link:</label>
				<div class="col-sm-6">
				<input type="text" name="link" class="form-control" placeholder="Enter Link" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Thumbnail Photo</label>
				<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" />
				</div>
				</div>
					
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
				<a href="managebod.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>