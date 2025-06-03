<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");
	

if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="newscornerphotos"."/".$profilepic;
$sql=mysqli_query($conn,"delete from ne_co where id='$rid'");
unlink($ppicpath);
echo "<script>alert('News Article deleted');</script>"; 
echo "<script>window.location.href = 'managenewscorner.php'</script>";     
} 	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>ADD DELETE & EDIT News Corner</title>
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
                           <a class="btn btn-primary mt-3" href="addnewscorner.php">Add New News Corner Article <i class="fas fa-plus"></i></a>
                        </div><br>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="stafft" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Short Desciption</th>
                                            <th>Photo</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$selectdata = "SELECT * FROM ne_co";
									$selectdataresult = mysqli_query($conn, $selectdata); 
									while ($row = mysqli_fetch_assoc($selectdataresult))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td class="d-flex"><img class="img-fluid mx-auto" src="newscornerphotos/<?php echo $row['image']; ?>" width="60px" height="60px"></td>
                                            <td><a href="editnewscorner.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                                            <td><a href="managenewscorner.php?delid=<?php echo ($row['id']);?>&&ppic=<?php echo $row['image'];?>" class="btn btn-danger">Delete</a></td>
                                            <td><a href="viewnewsadmin.php?id=<?php echo $row['id']; ?>" class="btn btn-info">View</a></td>
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