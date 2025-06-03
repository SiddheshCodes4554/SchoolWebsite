<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");
	
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="staffphoto"."/".$profilepic;
$sql=mysqli_query($conn,"delete from staff_t where id='$rid'");
unlink($ppicpath);
echo "<script>alert('Member deleted');</script>"; 
echo "<script>window.location.href = 'staffmanage.php'</script>";     
} 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>ADD DELETE & EDIT STAFF</title>
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
                           <a class="btn btn-primary mt-3" href="addstaff.php">Add New Staff Member <i class="fas fa-plus"></i></a>
                        </div><br>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="stafft" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Qualification</th>
                                            <th>Subject</th>
                                            <th>Date Of Joining</th>
                                            <th>Post</th>
                                            <th>Photo</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$selectdata = "SELECT * FROM staff_t where type='teaching' ORDER by join_date DESC";
									$selectdataresult = mysqli_query($conn, $selectdata); 
									while ($row = mysqli_fetch_assoc($selectdataresult))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['quali']; ?></td>
                                            <td><?php echo $row['subject']; ?></td>
                                            <td><?php echo $row['join_date']; ?></td>
                                            <td><?php echo $row['post']; ?></td>
                                            <td><img src="staffphoto/<?php echo $row['image']; ?>" width="100px" height="60px"></td>
                                            <td><a href="staffedit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                                            <td><a href="staffmanage.php?delid=<?php echo ($row['id']);?>&&ppic=<?php echo $row['image'];?>" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');" class="btn btn-danger">Delete</a></td>
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