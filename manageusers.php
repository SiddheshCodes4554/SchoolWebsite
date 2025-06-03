<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");
	
if(isset($_REQUEST['delete_id'])){
		
		$id = $_REQUEST['delete_id'];	
		
		$deleteqry = "SELECT * FROM user WHERE id='$id'";	
		$deleteresult = mysqli_query($conn, $deleteqry);
		$deleterow = mysqli_fetch_assoc($deleteresult); 
		$delete = "DELETE FROM user WHERE id='$id'";
		$deletefinalresult = mysqli_query($conn, $delete);
		header("Location: manageusers.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>ADD DELETE & EDIT Users</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body>
	<div class="wrapper">
	<div class="container">	
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <a class="btn btn-warning mt-3" href="admin/"><i class="fas fa-arrow-left"></i> Back</a>
                           <a class="btn btn-primary mt-3" href="addnewusers.php">Add New Users <i class="fas fa-plus"></i></a>
                        </div><br>
                      
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="stafft" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$selectdata = "SELECT * FROM user";
									$selectdataresult = mysqli_query($conn, $selectdata); 
									while ($row = mysqli_fetch_assoc($selectdataresult))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><a href="editusers.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                                            <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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