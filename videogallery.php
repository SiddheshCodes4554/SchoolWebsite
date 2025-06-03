<?php 

include 'includes/config.php';
include 'includes/links.php';

$page = "Gallery";

?>
<!DOCTYPE html>
<html>
<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
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
  <title>Video Gallery</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
section{
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff
  padding: 50px;
  position: relative;
  overflow: hidden;
}
section::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  transition: all 0.4s ease;
}
section.active::before{
  opacity: 1;
}
.container{
  max-width: none; /* Remove the fixed max-width */
  width: 90%; /* Use percentage width instead */
  display: flex;
  align-items: center;
  justify-content: center; /* Center the videos */
  flex-wrap: wrap;
  background:rgb(74, 229, 141);
  padding: 20px;
  position: relative;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.5);
}

.container .videos{
  position: relative;
  height: 200px;
  width: calc(100% / 2 - 20px); /* Adjust width calculation */
  margin: 10px; /* Add equal margin on all sides */
  cursor: pointer;
}

/* Add this new media query for larger screens */
@media (min-width: 1200px) {
  .container .videos{
    width: calc(100% / 3 - 20px); /* Show 3 videos per row on larger screens */
  }
}

/* Adjust existing media queries */
@media (max-width: 750px) {
  .container{
    width: 95%; /* Increase width on smaller screens */
  }
  .container .main-video{
    position: fixed;
    width: 83%;
  }
  .container .videos{
    width: 100%;
    height: 320px;
  }
}
@media (max-width: 600px) {
  .container .videos{
    width: 100%;
    height: 250px;
  }
}

</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php include 'includes/header.php'; ?> 
       
       <h2 style="text-align: center;font-size: 30px;">Video Gallery</h2>
  <section>
    

    <div class="container">
      <?php 

    $qry = "SELECT * FROM videogallery";
    $result = mysqli_query($conn, $qry);
    $num = 0;
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)){
        $num++;
  ?>
      <div class="videos">
        <iframe style="width: 100%;height: 100%" class="embed-responsive-item youtube-video" src="<?php echo $row['link']; ?>"
                allowfullscreen></iframe>
      </div>
      <?php } } ?>
    </div>
  </section>
  <script>
    const section = document.querySelector("section"),
    mainVideo = document.querySelector(".main-video video"),
     videos = document.querySelectorAll(".videos"),
     close = document.querySelector(".close");
     for (var i = 0; i < videos.length; i++) {
       videos[i].addEventListener("click", (e)=>{
         const target = e.target;
         section.classList.add("active");
         target.classList.add("active");
         let src = document.querySelector(".videos.active video").src;
         mainVideo.src = src;
         close.addEventListener("click", ()=>{
           section.classList.remove("active");
           target.classList.remove("active");
           mainVideo.src = "";
         });
       });
     };
  </script>

<?php include 'includes/footer.php'; ?> 

</body>
</html>