
 <?php 
   
include("admin/auth_session.php");

   include 'includes/config.php';
   include 'includes/links.inc.php';
 
   if(!$conn)
   {
      die(mysqli_error());
   }
   
   
   $sql = "select * from slider";
   $rs = mysqli_query($conn, $sql);
   
   
   if(isset($_GET['deleteid']))
   {
      $selectSql = "select * from slider where id = ".$_GET['deleteid'];
      $rsSelect = mysqli_query($conn,$selectSql);
      $getRow = mysqli_fetch_assoc($rsSelect);
      
      $getIamgeName = $getRow['image_path'];
      
      $createDeletePath = "".$getIamgeName;
      
      if(unlink($createDeletePath))
      {
         $deleteSql = "delete from slider where id = ".$getRow['id'];
         $rsDelete = mysqli_query($conn, $deleteSql); 
         
         if($rsDelete)
         {
            header('location:delete-slider.php?success=true');
            exit();
         }
      }
      else
      {
         $errorMsg = "Unable to delete Image";
      }
      
   }
 
   
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Remove Slider Photos</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
<body>
   <div class="container">
      <a class="btn btn-outline-primary mt-2" href="image_slider_upload.php">Add New Images</a>
      <h3 class="text-center">Delete Images</h3>
      <a class="btn btn-warning mt-3 ml-2" href="admin/"><i class="fas fa-arrow-left"></i> Back</a>
      <div class="row">
      
      <?php 
      if(isset($errorMsg))
      {
      ?>
         <div class="alert alert-danger">
            <?php 
               echo $errorMsg;
               unset($errorMsg);
            ?>
         </div>
      <?php 
      }
      ?>
      
      <?php 
      if(isset($_GET['success']) && $_GET['success'] == 'true')
      {
      ?>
         <div class="alert alert-success">
            <?php 
               echo "Images has been deleted sucessfully";
            ?>
         </div>
      <?php 
      }
      ?>
      
      
   <?php 
      while($row = mysqli_fetch_assoc($rs))
      {
         $imgWithPath = "".$row['image_path'];
      ?> 
         
            
         <div class="col-md-12 text-center" style="margin-top:10px">
            <img src="<?php echo $imgWithPath ?>" width="200">
            <a href="?deleteid=<?php echo $row["id"]?>" class="btn btn-primary">Delete</a>
         </div>
         
         
   <?php    
      }
      
   ?>
   </div>
   </div>
   
   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</body>
</html>