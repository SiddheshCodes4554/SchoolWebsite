<?php 

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

$msg = '';

  if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $path = 'slider_photo/'.$image;

    $sql = $conn->query("INSERT INTO slider (image_path) VALUES ('$path')");

    if ($sql) {
      move_uploaded_file($_FILES['image']['tmp_name'],  $path);
      $msg = 'Image Uploaded Sucessfully!';
    }
    else{
      $msg = 'Image Upload Failed';
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Slider Image Upload</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
<body>
	<br><br>
  <a class="btn btn-warning mt-3 ml-2" href="admin/"><i class="fas fa-arrow-left"></i> Back</a>
 	<div class="container-fluid bg-dark text-center h-10 height: 200px; mt-50">
  <div class="row justify-content-center height: 200px;">
    <div class="col-lg-4">
      <h4 class="text-center text-light p-1">Select Image To Upload</h4>
     <form action="" method="post" enctype="multipart/form-data">
       <div class="form-group">
         <input type="file" name="image" class="form-control p-1" required="required">      
        <small style="color:red;">Upload Image Of Size: 1156 x 598</small>
       </div>
       <div class="form-group">
         <input type="submit" name="upload" class="btn btn-warning btn-block" value="Upload Image" multiple="multiple">
       </div>
       <div class="form-group">
         <h5 class="text-center text-light"><?= $msg; ?></h5>
       </div>    
     </form> 
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>