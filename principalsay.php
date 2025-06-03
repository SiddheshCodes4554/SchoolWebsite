<?php

include 'includes/config.php'; 
include 'includes/links.php'; 

$page = "About";

$ret = mysqli_query($conn,"select * from says where id=1");
$row = mysqli_fetch_assoc($ret);

?>   
<!DOCTYPE html>
<html id="top" style="scroll-behavior: smooth;">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
	<meta charset="utf-8">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
	<title>Principal's Say</title>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
   <link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    body{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #ddd;
        align-items: center;
        justify-content: center;
    }

    *{
        box-sizing: border-box;
    }

    .container{
        display: flex;
        width: 100%;
        height: auto;
        padding: 20px 20px;
    }

    .box{
        flex: 30%;
        display: table;
        align-items: center;
        text-align: center;
        font-size: 20px;
        background-color: #0d1425;
        color: #fff;
        padding: 30px 30px;
        border-radius: 20px;
    }

    .box img{
        border-radius: 50%;
        border: 2px solid #fff;
        height: 250px;
        width: 250px;
    }

    .box h2{
      margin-top: 30px;
        font-size: 1.em;
        text-align: center;
    }

    .About{
        margin-left: 20px;
        flex: 50%;
        display: table;
        padding: 30px 30px;
        font-size: 20px;
        background-color: #fff;
        border-radius: 20px;
    }

    .About h1{
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 50px;
        font-weight: 500;
    }

    .About ul li{
        list-style: none;
    }

    .About ul{
       margin-top: 20px;
    }

    @media screen and (max-width: 1068px) {
        .container{
            display: table;
        }

        .box{
            width: 100%;
        }

        .About{
            width: 100%;
            margin: 0;
            margin-top: 20px;
        }

        .About h1{
            text-align: center;
        }
    }
</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <?php include "includes/header.php"; ?> 
    <div class="container">
        <div class="box"><br><br><br>
            <img src="say_photo/<?php echo $row['commandant_img']; ?>" alt="Photo">
            
                <h2 style="font-weight: 800;font-size: 25px"><?php echo $row['principal_name']; ?></h2><br>
                <h3 style="font-size: 22px;font-weight: 500;"><?php echo "( ".$row['principal_quali']." )" ?></h3><br>
                <h3>Principal</h3>
            
        </div>
        <div class="About">
            <ul>
                <h2>From The Principal's Table</h2>
            </ul>
                <p><?php echo $row['principal_say']; ?></p>
            </ul>
        </div>
    </div>
<?php include "includes/footer.php"; ?> 
</body>
</html>