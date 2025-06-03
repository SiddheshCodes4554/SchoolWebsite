<?php

include 'includes/links.php';
include 'includes/config.php';  

$id = $_GET['id'];
$getqry = "SELECT * FROM ne_co WHERE id='$id'";
$getresult = mysqli_query($conn, $getqry);
$row = mysqli_fetch_assoc($getresult)

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $row['title']; ?></title>
</head>
<style type="text/css">



</style>
<body> 

<?php include 'includes/header.php'; ?>

<h2 style="text-align: center;"><?php echo $row['title']; ?></h2>
<p style="text-align: right;margin-top: 20px;margin-right: 20px;font-weight: bolder;font-family: fantasy;"><?php echo "Added On: ".$row['sub_da']; ?></p>

<div style="margin: 10px;" class="container">
	<img style="display: block;margin-left: auto;margin-right: auto;width: 50%;" src="newscornerphotos/<?php echo $row['image']; ?>">

	<div class="" style="width: 100%;margin-right: auto;margin-left: auto;">
		<?php echo $row['content']; ?>
	</div>

</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>