<?php

include 'includes/links.inc.php';
include 'includes/config.php';  

include("admin/auth_session.php");

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
.content::first-letter {
  font-size: 300%;
}
</style>
<body> 

<div class="container w-100 m-2">
	<h2 class="text-left"><?php echo $row['title']; ?></h2>
	<p class="text-right"><?php echo "Added On: ".$row['sub_da']; ?></p>
<figure>
<img src="newscornerphotos/<?php echo $row['image']; ?>" class="mx-auto d-flex">
</figure>
	<div class="content">
		<?php echo $row['content']; ?>
	</div>
</div>
</body>
</html>