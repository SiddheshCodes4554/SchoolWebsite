<?php

include 'includes/config.php';

include("admin/auth_session.php");

if(isset($_REQUEST['btn_insert']))
{
	try
	{
		$title	= $_REQUEST['title'];
		$desc	= $_REQUEST['description'];	
		$content	= $_REQUEST['content'];		
			
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];		
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
		
		$path="newscornerphotos/".$image_file; 
		
		 if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
		{	
			if(!file_exists($path)) 
			{
				if($size < 5000000)
				{
					move_uploaded_file($temp, "newscornerphotos/" .$image_file); 
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
			$image = $image_file;
			$sub_da = date("d/m/Y");
			$insertqry = "INSERT INTO ne_co (`image`, `title`, `content`, `sub_da`, `description`) VALUES ('$image', '$title', '$content', '$sub_da', '$desc')";
			$insertresult = mysqli_query($conn, $insertqry); 
		
			if(!$insertqry)
			{
				$insertMsg="Article Upload Failed"; 
				header("refresh:3;addnewscorner.php"); 
			} else {
			$insertMsg="Article Upload Successfully........"; 
				header("refresh:3;managenewscorner.php");
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add News Corner Article</title>
	<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
	 <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<body>
	<a class="btn btn-warning mt-3 ml-2" href="managenewscorner.php"><i class="fas fa-arrow-left"></i> Back</a>
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
				<div class="col-sm-12">
				<input type="text" name="title" class="form-control" placeholder="Enter Title" />
				</div>
				</div>
				
				<div class="form-group">
				<label class="col-sm-3 control-label">Short Description:</label>
				<div class="col-sm-12">
				<textarea name="description" class="form-control"></textarea>
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Thumbnail Photo</label>
				<div class="col-sm-6">
				<input type="file" name="txt_file" class="form-control" />
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-3 control-label">Article:</label>
				<div class="col-sm-12">
				<textarea name="content" id="summernote"></textarea>
				</div>
				</div>
					
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
				<a href="managenewscorner.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>

<script>
      $('#summernote').summernote({
        placeholder: 'Enter Article',
        tabsize: 2,
        height: 200
      });
    </script>
</body>
</html>	