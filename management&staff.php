<?php 

include 'includes/links.inc.php';
include 'includes/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Management & Staff</title>
    <link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
<style type="text/css">
  .slick-slide {
    margin: 0px 5px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
#staffmanage{
    text-decoration: underline overline;   
    text-decoration-thickness: 3px;
    text-decoration-color: #0D5BE1;
    text-underline-offset: .4em;
}
</style>
<body style="font-family: 'Secular One', sans-serif;background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">

<?php include 'includes/header.inc.php'; ?>

<!-- BOD -->
<br>
<?php
    $bodgetreault = mysqli_query($conn, "SELECT * FROM bod");
?>
 <div class="container" style="margin-bottom: -70vh;">
  <h2 class="text-center">Board Of Directors</h2>
   <section class="customer-logos slider">
     
    <?php while ($bodgetrow = mysqli_fetch_assoc($bodgetreault)) { ?>
      <div class="slide"><img loading="lazy" src="bodphoto/<?php echo $bodgetrow['image']; ?>"><p class="text-center"><b><?php echo $bodgetrow['name']; ?></b></p><p style="margin-top: -15px;" class="text-center"><?php echo $bodgetrow['post']; ?></p></div>
    <?php } ?>  
   </section>
</div>

<!-- BOD End -->
<hr style="border: 2px solid blue;width: 80%;">
<!-- Teaching Staff -->
<h3 class="text-center">Teaching Staff</h3>

<div class="section-cards">
        <div class="container">
            <div class="row">
<?php
    $staffresult = mysqli_query($conn, "SELECT * FROM staff_t");
        while($row = mysqli_fetch_assoc($staffresult))
{
?>
                <div class="col-md-6 col-lg-4 mt-2 mb-2">
                    <div class="card border border-dark">
                        <div class="card-image d-flex">
                            <img src="staffphoto/<?php echo $row['image']; ?>" loading="lazy" class="img-fluid mx-auto" style="width: 95%;box-shadow: 3px 5px 5px;height: auto;" alt="Profile Pic">
                        </div><br>
                        <div class="content ml-2">
                            <h6 class="" style="font-size: 20px; font-weight: 700"><span>Name:&nbsp;&nbsp;</span><?php echo $row['name']; ?></h6>
                            <h4 class="card-caption">
                                <span>Qualification:&nbsp;&nbsp;</span><?php echo $row['quali']; ?>
                            </h4>
                            <h6 style="font-size: 20px;"><span>Designation:&nbsp;&nbsp;</span><?php echo $row['post']; ?></h6>
                            <h3 style="font-size: 20px;"><span>Major Subject:&nbsp;&nbsp;</span><?php echo $row['subject']; ?></h3>
                            <h5 style="font-size: 18px;"><span>Appointment Date:&nbsp;&nbsp;</span><?php echo $row['join_date']; ?></h5>
                            <?php
                            $dt=new DateTime($row['join_date']);
                            $now=new DateTime();
                            $differ=$now->diff($dt);
                            $exp=$differ->y;      
            ?>
                            <h3 style="font-size: 20px;"><span>Experience:&nbsp;&nbsp;</span><?php echo $exp; ?>&nbsp;Years</h3>
                        </div>
                    </div>
                </div> 
            <?php } ?>
            </div>
        </div>
    </div>
<br>
<hr style="border: 2px solid blue;width: 80%;">
<!-- Teaching Staff End-->

<!-- Hostel Staff -->

<h3 class="text-center">Hostel & Mess Staff</h3>

<div class="section-cards">
        <div class="container">
            <div class="row">
<?php
    $staffresult = mysqli_query($conn, "SELECT * FROM man_t");
        while($row = mysqli_fetch_assoc($staffresult))
{
?>
                <div class="col-md-6 col-lg-4 mt-2 mb-2">
                    <div class="card border border-dark">
                        <div class="card-image d-flex">
                            <img src="hostelstaffphoto/<?php echo $row['image']; ?>" loading="lazy" class="img-fluid mx-auto" style="width: 95%;box-shadow: 3px 5px 5px;height: auto;" alt="Profile Pic">
                        </div><br>
                        <div class="content ml-2">
                            <h6 class="" style="font-size: 20px; font-weight: 700"><span>Name:&nbsp;&nbsp;</span><?php echo $row['name']; ?></h6>
                            <h4 class="card-caption">
                                <span>Post:&nbsp;&nbsp;</span><?php echo $row['post']; ?>
                            </h4>
                        </div>
                    </div>
                </div> 
            <?php } ?>
            </div>
        </div>
    </div>

<!-- Hostel Staff End-->

<?php include 'includes/footer.inc.php'; ?>

<script type="text/javascript">
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</body>
</html>