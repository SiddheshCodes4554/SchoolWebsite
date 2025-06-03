<?php

include 'includes/links.php';
include 'includes/config.php';  

$page = "neco";

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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News Corner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
<style type="text/css">


</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php include 'includes/header.php'; ?>

   <section id="header" class="jumbotron text-center">
     <h1 class="display-3">News Corner</h1>
</section>
  
<section id="gallery">
  <div class="container">
    <div class="row">
        <?php

    $getresult = mysqli_query($conn, "SELECT * FROM ne_co ORDER BY id DESC");
    while ($getrow = mysqli_fetch_assoc($getresult)) {
?>
    <div class="col-lg-4 mb-4">
    <div class="card">
      <img style="height: 250px;width: 100%;" src="newscornerphotos/<?php echo $getrow['image']; ?>" alt="" class="card-img-top img-fluid img-thumbnail">
      <div class="card-body">
        <h5 class="card-title"><?php echo $getrow['title']; ?></h5>
        <p class="card-text"><?php echo substr($getrow['description'], 0,100)."....."; ?></p>
        <div class="d-flex">
       <a href="viewnews.php?id=<?php echo $getrow['id']; ?>" class="btn btn-outline-success btn-sm">Read More</a>
       <h5 class="m-auto m-5">- <i class="fa-regular fa-calendar"></i> <?php echo $getrow['sub_da']; ?></h5> 
   </div>
      </div>
     </div>
    </div>

  <?php } ?>
  </div>
</div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php include 'includes/footer.php'; ?>

</body>
</html>