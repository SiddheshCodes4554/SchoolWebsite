<?php

include 'includes/links.php';
include 'includes/config.php';  

$page = "Activities";

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
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Achievements</title>
	<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>


<style type="text/css">
	*,
*::before,
*::after {
  box-sizing: border-box;
}

/* Remove default margin */
body,
h1,
h2,
h3,
h4,
p {
  margin: 0;
}

/* Set core body defaults */
body {
  min-height: 100vh;
  text-rendering: optimizeSpeed;
  line-height: 1.5;
  font-family: system-ui, sans-serif;
}

/* Make images easier to work with */
img {
  display: block;
  max-width: 100%;
}

/***
 🟣 Modern CSS Solutions Demo Styles
 */

.gallery {
  list-style: none;
  padding: 0;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(10ch, 1fr));
  gap: 1rem;
}

.gallery img {
  display: block;
  width: 100%;
  object-fit: cover;
  height: var(--gallery-height);
  transform: scale(1) translate(0, 0);
  transition: transform 1200ms ease-in;
}

.gallery figure {
  --gallery-height: 20rem;
  --gallery-aspect-ratio: 1/1;

  /* reset figure default margin */
  margin: 0;
  height: var(--gallery-height);
  background-color: hsl(200, 85%, 2%);

  display: grid;
  grid-template-areas: "card";
  place-items: end;
  border-radius: 0.5rem;
  overflow: hidden;
}

@supports (aspect-ratio: 1) {
  .gallery figure,
  .gallery img {
    aspect-ratio: var(--gallery-aspect-ratio);
    /* Remove height to prevent distorting aspect-ratio */
    height: auto;
  }
}

.gallery figure > * {
  grid-area: card;
}

.gallery figcaption {
  transition: transform 800ms 400ms ease-in;

  /* Visual styles for the caption */
  padding: 0.25em 0.5em;
  border-radius: 4px 0 0 0;
  background-color: hsl(0 0% 100% / 87%);
  /* provide stacking context */
  z-index: 1;
}

.gallery figure:hover figcaption,
.gallery figure:focus figcaption {
  transform: translateY(0);
}

.gallery figure:hover img,
.gallery figure:focus img {
  transform: scale(1.1) translate(-4%, -3%);
}

.gallery figure:focus {
  outline: 2px solid white;
  outline-offset: 2px;
}

@media (any-hover: hover) and (any-pointer: fine) {
  .gallery figcaption {
    transform: translateY(100%);
  }
}

@media (prefers-reduced-motion: reduce) {
  .gallery * {
    transition-duration: 0ms !important;
  }

  .gallery img {
    transform: none !important;
  }

  .gallery figcaption {
    transition-delay: 0ms;
  }
}

</style>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKQ9VZ5Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <?php include 'includes/header.php'; ?>
<div style="margin: 15px;">    

  <h2 style="text-align: center;font-size: 2.5em;color: darkorchid;">Our Achievements</h2>

<ul class="gallery" role="list">
 <?php 

    $getqry = "SELECT * FROM cer ORDER BY id DESC";
    $getresult = mysqli_query($conn, $getqry);
    while($row = mysqli_fetch_assoc($getresult)){

  ?> 
  <li>
    <figure tabindex="0">
     <a target="_blank" href="achievementsphoto/<?php echo $row['image']; ?>"> 
      <img alt="Image" src="achievementsphoto/<?php echo $row['image']; ?>" />
     </a>    
    </figure>
  </li>

<?php } ?>
</ul>
</div>
	<?php include 'includes/footer.php'; ?>
</body>
</html>