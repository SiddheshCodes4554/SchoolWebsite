<?php

include 'includes/links.php'; 
include 'includes/config.php'; 

$page = "Mana";

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teaching Staff</title>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<link rel="stylesheet" href="includes/nicepage.css" media="screen">
<link rel="stylesheet" href="includes/staff.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.12.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|PT+Sans:400,400i,700,700i">
    
  

<?php include "includes/header.php"; ?>

    <section class="u-align-center u-clearfix u-palette-5-dark-3 u-section-1" id="carousel_f352">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <h1 class="u-custom-font u-font-oswald u-text u-text-1">Teaching Staff</h1>
        <div class="u-expanded-width-xl u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">

            <?php
            $qry = "SELECT * FROM staff_t WHERE type='teaching'";
            $result = mysqli_query($conn, $qry);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
        ?>   
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                <img class="u-expand-resize u-image u-image-1" src="staffphoto/<?php echo $row['image']; ?>">
                <div class="u-container-style u-group u-white u-group-1">
                  <div class="u-container-layout u-valign-middle u-container-layout-2">
                    <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-4"><?php echo $row['name']; ?></h4>
                    <h6 class="u-align-center u-custom-font u-font-pt-sans u-text u-text-palette-2-base u-text-5"><?php echo $row['post']; ?></h6>
                    <h5 class="u-align-center u-custom-font u-font-pt-sans"><?php echo $row['quali']; ?></h5>
                    <h5 style="margin-top: -10px;font-weight: 500" class="u-align-center"><?php echo $row['subject']; ?></h5>
                    <h5 style="margin-top: -10px;" class="u-align-center"><span style="font-weight: 800";><?php
                            $dt=new DateTime($row['join_date']);
                            $now=new DateTime();
                            $differ=$now->diff($dt);
                            $exp=$differ->y;      
                            echo $exp." Years";?></span> <?php echo " Experience"; ?></h5>
                  </div>
                </div>
              </div>
            </div>
          <?php } } else { echo "<h2 class='text-center'>No Members Added Yet!</h2>"; } ?>
          </div>
        </div>
      </div>
    </section>
    </section>

	<?php include "includes/footer.php"; ?>  
</body>
</html>