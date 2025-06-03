<?php

include 'includes/config.php'; 
include 'includes/links.inc.php'; 

$page = "alumnipage";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Alumni</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>-->
 <!--   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>

    <link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>


<body>
	<?php include "includes/header.inc.php"; ?> 

<br> 

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-11 bg-light rounded my-2 py-2">
      <h4 class="text-center text-dark pt-2">Search Alumni</h4>
      <hr>
      
      <table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Alumni Name</th>
      <th>City</th>
      <th>Pass Year</th>
      <th>Phone No</th>
      <th>Profession</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $id = 0;
        $result = mysqli_query($conn, "SELECT * FROM alumni_t");
        while($row = mysqli_fetch_assoc($result)){
            $id++;
      ?>
    <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['pass_year']; ?></td>
        <td><?php echo $row['phone_no']; ?></td>
        <td><?php echo $row['profession']; ?></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
       </div>
    </div>
  </div>

<?php include "includes/footer.inc.php"; ?>
<script type="text/javascript">
 $( document).ready( function(){
    $('table'). DataTable();
  });
</script>
</body>
</html>