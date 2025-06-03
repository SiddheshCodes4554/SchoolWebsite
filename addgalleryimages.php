<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if (isset($_POST['uploadImageBtn'])) {
    $uploadFolder = 'galleryphotos/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

        $query = "INSERT INTO images SET file_name='$imageName' " ;
        $run = mysqli_query($conn, $query) or die("Error in saving image".$connection->error);
    }
    if ($result) {
        echo '<script>alert("Images uploaded successfully !")</script>';
        echo '<script>window.location.href="addgalleryimages.php";</script>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Add Gallery Photos</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body> 
        <a class="btn btn-warning mt-3 ml-2" href="managegalleryphtos.php"><i class="fas fa-arrow-left"></i> Back</a>
		<form action="addgalleryimages.php" method="post" enctype="multipart/form-data">
        <div class="form-group mt-5">
            <div class="row mx-auto">
               <div class="col-md-4">
                   <div class="form-group">
                       <input type="file" name="imageFile[]" required multiple class="form-control">
                   </div>
               </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="submit" name="uploadImageBtn" id="uploadImageBtn" value="Upload Images" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </form>

										
	</body>
</html>