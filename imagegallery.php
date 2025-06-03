<?php 

include 'includes/config.php';
include 'includes/links.php';

$page = "Gallery";

?>
<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
  
</script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Gallery</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>
<style type="text/css">

body {
  background: whitesmoke;
}

img {
  width: 100%;
}
.photo-grid-container {
  column-count: 5;
  column-width: 300px;
  margin: 30px;
  padding: 0px;
}
.photo-grid-item {
  margin: 0 auto 15px;
  max-width: 400px;
  width: 100%;
}

</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php include 'includes/header.php'; ?>	

<section class="photo-grid-container">
      
      <div class="photo-grid-item">

<?php 

                $getimages = "SELECT * FROM images";  
                $getimagesresult = mysqli_query($conn, $getimages);
                if (mysqli_num_rows($getimagesresult) > 0) {
                  while($row = mysqli_fetch_assoc($getimagesresult)){
              ?>

        <img src="galleryphotos/<?php echo $row['file_name']; ?>" alt="" />
      </div>
<?php }} ?>
</section>

<?php include 'includes/footer.php'; ?>	
</body>
</html>