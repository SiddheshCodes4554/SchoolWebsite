<?php 

include "includes/config.php";
include "includes/header.php";

$page = 1;

?>
<!DOCTYPE html>
<html>
<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
	<meta charset="utf-8">
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link href="extra/ninja-slider.css" rel="stylesheet" />
    <script src="extra/ninja-slider.js" type="text/javascript"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
</head>
<style type="text/css">
 
@import url('https://fonts.cdnfonts.com/css/runammox');
@import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap');

html{
	scroll-behavior: smooth;
}

.container {  
  display: grid;
  grid-template-columns: 50vw 1fr;
  grid-template-rows: 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". .";
  padding: 10px;
  background: lightyellow;
  margin-top: -8vh;
}

.newscorner{
	border: 3px solid black;
	padding: 3px;
	height: 75vh;
	font-family: 'Fredoka', sans-serif;
}

.card{
	padding: 2px;
	border: 1px solid red;
	width: 25vw;
	margin: auto;
	font-family: sans-serif;
}

.card-head{
	text-align: center;
}

.card-head i{
	font-size: 32px;
	margin: 4px;
}

.aboutcontainer {  
  display: grid;
  grid-template-columns: 50vw 1fr;
  grid-template-rows: 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    ". .";
  padding: 10px;
  background: lightpink;
}

.vid{
	width: 100%;
	padding: 30px;
	height: 60vh;
}

.info{
	padding: 30px;

}

@media only screen and (max-width: 600px) {
 .container {  
	display: block;
  	padding: 10px;
 }

 .aboutcontainer {  
	display: block;
  	padding: 10px;
 }

 .newscorner{
 	margin-bottom: 8px;
 }
 .card{
 	width: 60vw;
 }
 .vid{
 	width: 100%;
 	padding: 5px;
 	height: 40vh;
 }
}

</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<br><br>
	<!-- Image Slider -->
	 <div id="ninja-slider">
        <div class="slider-inner">
            <ul>
            	<?php $imagegetresult = mysqli_query($conn, "SELECT image_path, caption FROM slider ORDER BY id DESC");
 $imgid = 0;

     while($row = mysqli_fetch_assoc($imagegetresult)){
            $imgid++;

            ?>
                <li>
                    <a class="ns-img" href="<?php echo $row['image_path']; ?>"></a>
                    <div class="caption"><?php echo $row['caption']; ?></div>
                </li>
                 <?php }  ?>
            </ul>
            <div class="navsWrapper">
                <div id="ninja-slider-prev"></div>
                <div id="ninja-slider-next"></div>
            </div>
        </div>
    </div><br><br>
    <!-- Image Slider End -->
  <br>
  
<div class="container">
	<!-- NEWS CORNER -->
	<div>
		<div class="newscorner">
				<h2 style="font-weight: bolder;font-family: fantasy;text-align: center;">NEWS & ANNOUNCEMENTS</h2>
			<hr style="border: 1px solid black;">
			<ul>
				<?php $news = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC LIMIT 5"); 
            if(mysqli_num_rows($news)) { 
                while($newsrow = mysqli_fetch_assoc($news)){ ?>
                	<hr>
				<li style="list-style: none;font-size: 22px;font-weight: bold;padding: 1px;text-align: center;padding: 7px;color: royalblue;"><?php echo $newsrow['news_info']; ?></li>
				<hr>
			</ul>
		<?php }} ?>
		</div>
	</div>
	<div>

<!-- NEWS CORNER END -->

<!-- COUNTER -->
<?php 

$getcounterqry = "SELECT * FROM counter_s";
$getcounterresult = mysqli_query($conn, $getcounterqry);

if (mysqli_num_rows($getcounterresult) > 0) {
  while ($getcounterrow = mysqli_fetch_assoc($getcounterresult)) {
?>
		<div class="cardbox">
		  <div class="card" style="background: purple;color: white;">	
			<div class="card-head">
				<i class="fa-solid fa-child-reaching"></i>
			</div>
			<div class="card-body" style="text-align: center;"><br>
				<h2>HAPPY STUDENTS</h2>
				<br>
				<span style="font-size: 30px;"><?php echo $getcounterrow['students']; ?></span>
			</div>
		  </div>	
		</div><br>
		<div class="cardbox">
		  <div class="card" style="background: brown;color: white;">	
			<div class="card-head">
				<i class="fa-solid fa-user-graduate"></i>
			</div>
			<div class="card-body" style="text-align: center;"><br>
				<h2>ALUMNI</h2>
				<br>
				<span style="font-size: 30px;"><?php echo $getcounterrow['alumni']; ?>+</span>
			</div>
		  </div>	
		</div><br>

		<div class="cardbox">
		  <div class="card" style="background: blueviolet;color: white;">	
			<div class="card-head">
				<i class="fa-solid fa-chalkboard-user"></i>
			</div>
			<div class="card-body" style="text-align: center;"><br>
				<h2>DEDICATED STAFF</h2>
				<br>
				<span style="font-size: 30px;"><?php echo $getcounterrow['teachers']; ?></span>
			</div>
		  </div>	
		</div>
	</div>
</div>
<?php }} ?>
<!-- NEWS CORNER END -->
<hr style="border: 2px solid black;">
<!-- ABOUT -->
<div class="aboutcontainer">
	<div class="video">
		<iframe class="vid" height="315" src="https://www.youtube.com/embed/m3LwBcBphCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="info">
		<p style="font-size: 22.7px;font-family: Raleway;">The Maharashtra Govt. has launched an ambitious scheme from 1996. The Government has permitted fully residential English Medium School from 6th to 12th Standard (Science Faculty). The School Is affiliated to the Maharashtra state Education Board, Pune. The School is to function on the model of a Central Govt. Sainik School.
    </p><br>
    <p style="font-size: 22.7px;font-family: Raleway;">
    	The Government of Maharashtra has launched this ambitious of education to create future officers in the Defence plan in the field Forces. The Sindhudurg District Ex-servicemen Association has started.....<a href="about.php" style="text-decoration: none;">READ MORE<i style="color: black;" class="fa-regular fa-circle-right"></i>
    	</p> 
	</div>
</div>

<!-- ABOUT END -->

<!-- FOOTER -->

<?php 

include 'includes/footer.php';

?>

<!-- FOOTER END -->

   </body>
   </html>