<?php

include 'includes/links.php'; 
include 'includes/config.php'; 

$page = "Mana";

?> 
<!DOCTYPE html>
<html>
<head>
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Board Of Directors</title>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>

</head>


<style>
 
.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.responsive-cell-block {
  min-height: 75px;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: space-evenly;
  font-family: Nunito, sans-serif;
}

.outer-container {
  padding-top: 10px;
  padding-right: 50px;
  padding-bottom: 10px;
  padding-left: 50px;
  background-color: rgb(244, 252, 255);
}

.inner-container {
  max-width: 1320px;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
}

.section-head-text {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  font-size: 35px;
  font-weight: 700;
  line-height: 48px;
  color: rgb(0, 135, 177);
  margin: 0 0 10px 0;
}

.section-subhead-text {
  font-size: 25px;
  color: rgb(153, 153, 153);
  line-height: 35px;
  max-width: 470px;
  text-align: center;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 60px;
  margin-left: 0px;
}

.img-wrapper {
  width: 100%;
}

.team-card {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.name {
  font-size: 20px;
  font-weight: 700;
  color: rgb(102, 102, 102);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
}

.position {
  font-size: 20px;
  font-weight: 700;
  color: rgb(0, 135, 177);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.team-img {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 5px solid navajowhite;
}

.team-card-container {
  width: 280px;
  margin: 0 0 40px 0;
}

@media (max-width: 500px) {
  .outer-container {
    padding: 10px 20px 10px 20px;
  }

  .section-head-text {
    text-align: center;
  }
}

</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<?php include "includes/header.php"; ?>
	
<div class="responsive-container-block outer-container">
  <div class="responsive-container-block inner-container">
    <p class="text-blk section-head-text">
      Meet Our Board Of Directors
    </p>
    <p class="text-blk section-subhead-text">
      Our Inspirations
    </p>
    <div class="responsive-container-block">
    	<?php
                    $qry = "SELECT * FROM bod";
                    $result = mysqli_query($conn, $qry);
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                ?>
      <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
        <div class="team-card">
          <div class="img-wrapper">
            <img class="team-img" src="bodphoto/<?php echo $row['image']; ?>">
          </div>
          <p class="text-blk name">
            <?php echo $row['name']; ?>
          </p>
          <p class="text-blk position">
            <?php echo $row['post']; ?>
          </p>
        </div>
      </div>
  <?php }} ?>
    </div>
  </div>
</div>


	<?php include "includes/footer.php"; ?>  
</body>
</html>