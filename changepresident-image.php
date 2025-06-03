<?php 

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_POST['submit']))
  {
$uid=$_GET['userid'];
$ppic=$_FILES["profilepic"]["name"];
$oldppic=$_POST['oldpic'];
$oldprofilepic="say_photo"."/".$oldppic;
$extension = substr($ppic,strlen($ppic)-4,strlen($ppic));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}else{
$imgnewfile=md5($imgfile).time().$extension;
move_uploaded_file($_FILES["profilepic"]["tmp_name"],"say_photo/".$imgnewfile);
$query=mysqli_query($conn, "update says set president_img='$imgnewfile' where id='$uid'");
if ($query) {
unlink($oldprofilepic);
echo "<script>alert('Profile pic updated successfully');</script>";
echo "<script type='text/javascript'> document.location ='editpresident.php'; </script>";
}else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
 }
}
}

?>

<form class="m-3" method="POST" enctype="multipart/form-data">
<?php
$eid=$_GET['userid'];
$ret=mysqli_query($conn,"select * from says where id='$eid'");
$row=mysqli_fetch_assoc($ret);
?>

<h2>Update </h2>
<p class="hint-text">Update profile pic.</p>
<input type="hidden" name="oldpic" value="<?php echo $row['president_img'];?>">
<div class="form-group m-2">
<?php 
                    
                      echo '<img src="say_photo/'.$row['president_img']. '" width="120" height="110">';
                ?>
</div>

<div class="form-group m-2">
<input type="file" class="form-control" name="profilepic"  required="true">
<span style="color:red; font-size:12px;">Only jpg / jpeg/ png /gif format allowed.</span>
</div> 

<div class="form-group">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
</div>
</form>