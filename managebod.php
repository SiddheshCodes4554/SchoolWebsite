<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");
	
if(isset($_REQUEST['delete_id'])){
		
		$id = $_REQUEST['delete_id'];	
		
		$deleteqry = "SELECT * FROM bod WHERE id='$id'";	
		$deleteresult = mysqli_query($conn, $deleteqry);
		$deleterow = mysqli_fetch_assoc($deleteresult);
		unlink("bodphoto/".$row['image']); 
		$delete = "DELETE FROM bod WHERE id='$id'";
		$deletefinalresult = mysqli_query($conn, $delete);
		header("Location: managebod.php");
	}
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="bodphoto"."/".$profilepic;
$sql=mysqli_query($conn,"delete from bod where id='$rid'");
unlink($ppicpath);
echo "<script>alert('Member deleted');</script>"; 
echo "<script>window.location.href = 'managebod.php'</script>";     
}	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>ADD DELETE & EDIT BOD Members</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body>
		<a class="btn btn-warning mt-3 ml-2" href="admin/"><i class="fas fa-arrow-left"></i> Back</a>
	<div class="wrapper">
	<div class="container">	
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <a class="btn btn-primary mt-3" href="addbod.php">Add New BOD Member <i class="fas fa-plus"></i></a>
                        </div><br>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="stafft" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Post</th>
                                            <th>Photo</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$selectdata = "SELECT * FROM bod";
									$selectdataresult = mysqli_query($conn, $selectdata); 
									while ($row = mysqli_fetch_assoc($selectdataresult))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['post']; ?></td>
                                            <td class="d-flex"><img class="img-fluid mx-auto" src="bodphoto/<?php echo $row['image']; ?>" width="60px" height="60px"></td>
                                            <td><a href="editbod.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                                            <td><a href="managebod.php?delid=<?php echo ($row['id']);?>&&ppic=<?php echo $row['image'];?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>	
		</div>
	</div>		
</div>
		<script>
			$(document).ready(function() {
    $('#stafft').DataTable();
} );
		</script>							
	</body>
</html>