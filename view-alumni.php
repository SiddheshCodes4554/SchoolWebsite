<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");
	
if(isset($_REQUEST['delete_id'])){
		
		$id = $_REQUEST['delete_id'];	
		
		$deleteqry = "SELECT * FROM alumni_t WHERE id='$id'";	
		$deleteresult = mysqli_query($conn, $deleteqry);
		$deleterow = mysqli_fetch_assoc($deleteresult); 
		$delete = "DELETE FROM alumni_t WHERE id='$id'";
		$deletefinalresult = mysqli_query($conn, $delete);
		header("Location: view-alumni.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>See & Delete Alumni</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body>
	<div class="wrapper">
	<div class="container">	
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <br>
                        <div class="panel-body">
                        	<h4>Total Alumni Registered: <span class="badge badge-success">
                        	<?php 
                        		$selectdata = "SELECT * FROM alumni_t";
                        		if ($getcountresult = mysqli_query($conn, $selectdata)) {
    								$rowcount = mysqli_num_rows($getcountresult);
    								echo $rowcount;
 									}
                        	?></span></h4>
                            <div class="table-responsive">
                                <table id="stafft" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Passing Year</th>
                                            <th>Phone No</th>
                                            <th>Profession</th>
                                            <th>Email</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$selectdataresult = mysqli_query($conn, $selectdata); 
									while ($row = mysqli_fetch_assoc($selectdataresult))
									{
									?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['pass_year']; ?></td>
                                            <td><?php echo $row['phone_no']; ?></td>
                                            <td><?php echo $row['profession']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
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