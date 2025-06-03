<?php 

include 'includes/links.inc.php'; 
include 'includes/config.php'; 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manage Home Page Counter</title>
</head>
<body>
	<h4 class="text-center">Home Page Counter</h4>
<a class="btn btn-warning mt-3 ml-2" href="admin/"><i class="fas fa-arrow-left"></i> Back</a>
<br>
	<table class="table table-bordered mt-4 text-center w-75 mx-auto">
		<tr>
			<th>Teachers</th>
			<th>Students</th>
			<th>Alumni</th>
			<th>Edit</th>
		</tr>
		<tr class="bg-light">
			<?php 

				$qry = "SELECT * FROM counter_s LIMIT 1";
				$qryresult = mysqli_query($conn, $qry);
				$row = mysqli_fetch_assoc($qryresult);
			?>
			<td><?php echo $row['teachers']; ?></td>
			<td><?php echo $row['students']; ?></td>
			<td><?php echo $row['alumni']; ?>+</td>
			<td><a href="counteredit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
		</tr>
	</table>

</body>
</html>