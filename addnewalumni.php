<?php

include 'includes/config.php'; 
include 'includes/links.php'; 

$page = "alumnipage";

if (isset($_POST['create'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pass_year = mysqli_real_escape_string($conn, $_POST['pass_year']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $profession = mysqli_real_escape_string($conn, $_POST['profession']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

   $result = mysqli_query($conn, "insert into alumni_t(name,city,pass_year,phone_no,profession,email) values ('$name','$city','$pass_year','$phone_no','$profession','$email')");
   if (!$result) {
      $errorMsg = "There Is Some Problem Please Try Again Later";
   } else {
      $successMsg = "Congratulations! You Are Now A Registered Alumni";
      $message = "
<html>
<head>
<title>Congratulations!</title>
</head>
<body>

Thanks For Registering.
<p>Regards</p>
<p>Snidhudurg Sainik School Amboli</p>
</body>
</html>
";
$subject = "You Are Now A Registered Alumni On Our Official Website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <sssambolipays@gamil.com>' . "\r\n";
$headers .= 'Cc: sssambolipays@gamil.com' . "\r\n";
      mail($email, $subject, $message, $headers);
   } 
} 
?>   
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Yourselves As Alumni</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>

<style type="text/css">
   .alumni{
      text-decoration: underline overline;   
    text-decoration-thickness: 3px;
    text-decoration-color: #0D5BE1;
    text-underline-offset: .4em;
   }
</style>
<body>
	<?php include "includes/header.php"; ?> 

<br> 
<h3 class="text-center">Add Yourselves As Alumni</h3>

<div class="contain">  
<?php 
   if (isset($errorMsg)) {
      echo "<div class='alert alert-danger mx-auto text-center w-75'>".$errorMsg."</div>";
   } else if (isset($successMsg)) {
      echo "<div class='alert alert-success mx-auto text-center w-75'>".$successMsg."</div>";
   }
?>
   <form action="addnewalumni.php" method="post">
      <div class="container">
         <div class="row">
            <div class="col">
               <h1 class="text-center">Alumni Registration</h1>
               <p class="text-center">Fill Up The Form With Correct Values</p>
               <hr class="mb-3">
               <label for="name"><b>Full Name</b></label>
               <input class="form-control" id="firstname" type="text" name="name" required placeholder="Enter Your Full Name">

               <label for="city"><b>City</b></label>
               <input class="form-control" id="city" type="text" name="city" required placeholder="Enter Your City">

               <label for="pass_year"><b>Passout Year</b></label>
               <input class="form-control" id="pass_year"  type="tel" name="pass_year" required placeholder="Enter Passout Year(yyyy)">

               <label for="phone_no"><b>Phone No</b></label>
               <input class="form-control" id="phone_no"  type="tel" name="phone_no" required placeholder="Enter Your Phone Number">
               <label for="profession"><b>Profession</b></label>
               <input class="form-control" id="profession"  type="text" name="profession" required placeholder="Enter Your Profession">
               <label for="email"><b>Email ID</b></label>
               <input class="form-control" id="email"  type="email" name="email" required placeholder="Enter Your Email">
               <hr class="mb-3">
               <input class="btn btn-primary mb-3" type="submit" id="create" name="create" value="Submit">
            </div>
         </div>
      </div>
   </form>
</div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php include "includes/footer.php"; ?>
</body>
</html>