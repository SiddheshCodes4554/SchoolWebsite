<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_GET['deleteid'])){
   $sql = "DELETE FROM contact_form WHERE id='" . $_GET["deleteid"] . "'";
    if (mysqli_query($conn, $sql)) {
        $msg = '<h5 class="text-center"><span class="alert alert-success">Contact Request Deleted Successfully!!</span></h5>';
        header("Location: viewcontactrequests.php?msg=".$msg."");
    } else {
        $msg = "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Contact Requests</title>
</head>
<body>
    <div class="row container-fluid">
        <h3 class="text-center mt-2 ml-2 col-sm-4">Contact Requests</h3>
        <?php 
            $countresult = mysqli_query($conn, "SELECT * FROM contact_form");
        ?>
        <h3 class="text-center mt-2 mr-2 col-sm-5">Total Requests - <?php echo mysqli_num_rows($countresult); ?></h3>
    </div>
    <?php 
    
        if(isset($_GET['msg'])){
            
    ?>        
            <div class='m-4'><?php echo $_GET['msg']; ?></div>
        <?php    
            }
        ?>    
    
	<div class="table-responsive mt-2">
		<table class="table table-bordered mx-auto" style="width: 90%;">
		    <thead>
		        <tr>
		            <th>Name</th>
		            <th>Email</th>
		            <th>Phone</th>
		            <th>Message</th>
		            <th>City</th>
		            <th>Time</th>
		            <th colspan="2" class="text-center">Actions</th>
		        </tr>
		    </thead>
		    <tbody>
		        <?php 
		        
		            $result = mysqli_query($conn, "SELECT * FROM contact_form ORDER BY time DESC");
		            while($row = mysqli_fetch_assoc($result)){
		              
		        ?>
		        <tr>
		            <td><?php echo $row['name']; ?></td>
		            <td><?php echo $row['email']; ?></td>
		            <td><?php echo $row['phone']; ?></td>
		            <td><?php echo $row['message']; ?></td>
		            <td><?php echo $row['city']; ?></td>
		            <td><?php echo $row['time']; ?></td>
		            <td><a href="mailto:<?php echo $row['email']; ?>"><i data-bs-toggle="tooltip" data-bs-placement="bottom" title="Reply To <?php echo $row['email']; ?>" class="fa-solid fa-reply" style="cursor: pointer;color: blue;"></i></a></td>
		            <td><a href="viewcontactrequests.php?deleteid=<?php echo $row["id"]; ?>"><i data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" class="fa-solid fa-trash-can" style="cursor: pointer;color: red;"></i></a></td>
		            <?php } ?>
		        </tr>
		    </tbody>
		</table>
	</div>
</body>
</html>