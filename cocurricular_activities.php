<?php

include 'includes/links.inc.php';
include 'includes/config.php';  

$page = "Activities";

?>
<!DOCTYPE html>
<html>
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Co-Curricular Activities</title>
	<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>



<style type="text/css">
#achievements{
  text-decoration: underline overline;   
    text-decoration-thickness: 3px;
    text-decoration-color: #0D5BE1;
    text-underline-offset: .4em;
}
</style>
<body style="background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);">
		<?php include 'includes/header.inc.php'; ?>
	<h2 class="text-center mt-2 font-weight-bold" style="color: black;margin-bottom: 10px;">Co-Curricular Activities</h2>
	    <div class="container mt-2">
        <div class="row g-3">
        	<?php 

		$getqry = "SELECT * FROM cer WHERE type='cocurricular_activity' ORDER BY id DESC";
		$getresult = mysqli_query($conn, $getqry);
		while($row = mysqli_fetch_assoc($getresult)){
	?>
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card" style="border: 2px solid darkkhaki;">
                    <img src="cocurricualactivityphoto/<?php echo $row['image']; ?>" class="card-img-top img-fluidm" alt="<?php echo $row['cap']; ?>"><hr class="border border-dark">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo $row['cap']; ?></h5>
                    </div>
                </div>
            </div>
        <?php 
	 }
	?>	
        </div>
    </div>

<?php include 'includes/footer.inc.php'; ?>

</body>
</html>