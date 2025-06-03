<?php 

include 'includes/config.php';

include("admin/auth_session.php");

if(isset($_POST['submit']))
  {
  $eid = 1;
  $name = $_POST['name'];
  $quali = $_POST['quali'];
  $say = $_POST['say'];
 
//Query for data updation
$query=mysqli_query($conn, "update says set principal_name='$name', principal_quali='$quali', principal_say='$say' where id='$eid'");
 
if ($query) {
echo "<script>alert('You have successfully updated the Principal Says data');</script>";
echo "<script type='text/javascript'> document.location ='editprincipal.php'; </script>";
}
else
{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<form  method="POST">
 <?php
$eid = 1;
$ret = mysqli_query($conn,"select * from says where id='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>


<h2 class="text-center">Edit From The Principal's Table Data</h2>

<div class="form-group m-2">
<?php 
                
                      echo '<img src="say_photo/'.$row['principal_img']. '" width="120" height="110">';
                ?>
&nbsp;<a href="changeprincipal-image.php?userid=<?php echo $row['id'];?>">Change Image</a>
</div>

<div class="form-group m-2">
<div class="row">
<div class="col">Name:<input type="text" class="form-control" name="name" value="<?php  echo $row['principal_name'];?>"></div>       	
</div>  

<div class="row">
<div class="col">Qualification:<input type="text" class="form-control" name="quali" value="<?php  echo $row['principal_quali'];?>" ></div>       	
</div>

<div class="row">
<div class="col">Content:<textarea name="say" id="summernote"><?php echo htmlentities($row['principal_say']); ?></textarea></div>       	
</div>

<?php 
}?>

<div class="form-group m-2">
 <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        
        </div>
    </form>
    <script>
      $('#summernote').summernote({
        placeholder: 'Enter Article',
        tabsize: 2,
        height: 200
      });
    </script>