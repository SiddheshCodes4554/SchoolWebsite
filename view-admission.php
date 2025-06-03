<?php

include 'includes/links.inc.php';
include 'includes/config.php';

include("admin/auth_session.php");

$id = $_REQUEST['id']; 
$status = $_REQUEST['status']; 

$updateqry = "UPDATE admission SET status='$status'";
mysqli_query($conn, $updateqry);

$query = "SELECT * from admission where id='$id'";
$result =  mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Student Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
<body>
	
<h1 class="text-center">View Student Details</h1>
<h4 class="text-center">Admission Request</h4>
<a class="btn btn-primary ml-4" target="_blank" href="generateadmissionpdf.php?id=<?php echo $row['id']; ?>">Print Details <i class="fas fa-print"></i></a>
<hr style="border: 2px solid black;width: 80%;">
<div class="top d-flex">
<div class="img" style="width:20vw;">
<img src="admissionphotoupload/<?php echo $row['stu_img']; ?>" style="width: 18vw;margin-left: 20px;height: 28vh;"><br>
<h6 class="ml-5">Application No: <b><?php echo $row['id']; ?></b></h6>
</div>
<h1 class="mt-5 mx-auto">Name: <b><?php echo $row['name']; ?></b></h1>
</div>
<hr style="border: 2px solid black;width: 80%;">
<div class="m-2" style="border: 2px solid black;">
 <?php 

 	if (empty($row['stu_n']) OR $row['stu_n'] == NULL) {
 		echo '<div class="main text-center p-2">
						<h4 class="mt-3">Place Of Birth: <b>'.$row['bir_pla'].'</b></h4>
					</div><hr style="border: 2px solid black">';
 	} else {
 		echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Name (Devnagiri): <b>'.$row['stu_n'].' </b></h4>
					<h4 class="float-right mt-3">Place Of Birth: <b>'.$row['bir_pla'].' </b></h4>
					</div><hr style="border: 2px solid black">';
 	}

 	$date = $row['dob'];
 	echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Date Of Birth: <b>'.date("d/m/Y", strtotime($date)).' </b></h4>
					<h4 class="float-right mt-3">Date Of Birth (In Words): <b>'.date("d", strtotime($date)),"th ",date("F Y", strtotime($date)).' </b></h4>
					</div><hr style="border: 2px solid black">';

$dob = new DateTime($date); 
$now = new DateTime();
$diff = $now->diff($dob);
echo '<div class="main text-center p-2">
						<h4 class="mt-3">Age: <b>'."".$diff->y." Years ".$diff->m." Months ".$diff->d." Days".'</b></h4>
					</div><hr style="border: 2px solid black">';

if (empty($row['aadhar']) OR $row['aadhar'] == NULL) {
	$aadharno = "Not Given";
} else {
	$aadharno = $row['aadhar'];
}
if (empty($row['eid']) OR $row['eid'] == NULL) {
	$eidno = "Not Given";
} else {
	$eidno = $row['eid'];
}
echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Aadhar No: <b>'.$aadharno.' </b></h4>
					<h4 class="float-right mt-3">EID No: <b>'.$eidno.' </b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main text-center p-2">
						<h4 class="mt-3">Mother Tongue: <b>'.$row['mo_tou'].'</b></h4>
					</div><hr style="border: 2px solid black">';			

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Religion: <b>'.$row['religion'].' </b></h4>
					<h4 class="float-right mt-3">Caste: <b>'.$row['caste'].' </b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Height: <b>'.$row['height'].' Cm</b></h4>
					<h4 class="float-right mt-3">Weight: <b>'.$row['weight'].' Kg</b></h4>
					</div><hr style="border: 2px solid black">';					

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Father&#39;s Name: <b>'.$row['fat_na'].'</b></h4>
					<h4 class="float-right mt-3">Mother&#39;s Name: <b>'.$row['mot_na'].'</b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Current Address: <b>'.$row['cur_add'].'</b></h4>
					<h4 class="float-right mt-3">Permanent Address: <b>'.$row['per_add'].'</b></h4>
					</div><hr style="border: 2px solid black">';

if (empty($row['loc_na']) OR $row['loc_na'] == NULL) {
	$localname = "Not Given";
} else {
	$localname = $row['loc_na'];
}
if (empty($row['gau_rel']) OR $row['gau_rel'] == NULL) {
	$guardianrel = "Not Given";
} else {
	$guardianrel = $row['gau_rel'];
}
echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Local Guardian&#39;s Name: <b>'.$localname.'</b></h4>
					<h4 class="float-right mt-3">Local Guardian&#39;s Relation With Student: <b>'.$guardianrel.'</b></h4>
					</div><hr style="border: 2px solid black">';										
echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Phone No: <b>'.$row['phone'].'</b></h4>
					<h4 class="float-right mt-3">Email: <b>'.$row['email'].'</b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Father&#39; Occupation: <b>'.$row['fat_occ'].'</b></h4>
					<h4 class="float-right mt-3">Mother&#39; Occupation: <b>'.$row['mot_occ'].'</b></h4>
					</div><hr style="border: 2px solid black">';					

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Office Address: <b>'.$row['off_add'].'</b></h4>
					<h4 class="float-right mt-3">Family Monthly Income: <b>&#8377;'.$row['income'].'</b></h4>
					</div><hr style="border: 2px solid black">';	

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Name Of Current School: <b>'.$row['cur_sc'].'</b></h4>
					<h4 class="float-right mt-3">Current Class: <b>'.$row['cur_cla'].'</b></h4>
					</div><hr style="border: 2px solid black">';	

echo '<div class="main text-center p-2">
						<h4 class="mt-3">Current Medium: <b>'.$row['cur_med'].'</b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">School SARAL ID No: <b>'.$row['saral'].'</b></h4>
					<h4 class="float-right mt-3">School UDISE No: <b>'.$row['Udise'].'</b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Wants Admission In Class: <b>'.$row['ad_cla'].'</b></h4>
					<h4 class="float-right mt-3">Language For Entrance Exam: <b>'.$row['lan'].'</b></h4>
					</div><hr style="border: 2px solid black">';					

echo '<div class="main text-center p-2">
						<h4 class="mt-3">Hobbies: <b>'.$row['hobby'].'</b></h4>
					</div><hr style="border: 2px solid black">';

if (empty($row['serno']) OR $row['serno'] == NULL) {
	$serno = "-";
} else {
	$serno = $row['serno'];
}
if (empty($row['post']) OR $row['post'] == NULL) {
	$post = "-";
} else {
	$post = $row['serno'];
}

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Ex-Servicemen/Servicemen No: <b>'.$serno.'</b></h4>
					<h4 class="float-right mt-3">Ex-Servicemen/Servicemen&#39;s Post: <b>'.$post.'</b></h4>
					</div><hr style="border: 2px solid black">';

if (empty($row['service']) OR $row['service'] == NULL) {
	$service = '-';
} else {
	$service = $row['service']. " Years";
}
echo '<div class="main text-center p-2">
						<h4 class="mt-3">Service (In Years): <b>'.$service.'</b></h4>
					</div><hr style="border: 2px solid black">';

echo '<div class="main clearfix p-2">
					<h4 class="float-left mt-3">Place Of Submission: <b>'.$row['pla_sub'].'</b></h4>
					<h4 class="float-right mt-3">Date Of Submission: <b>'.$row['sub_da'].'</b></h4>
					</div><hr style="border: 2px solid black">';

?>
		
</div>

<a class="btn btn-primary ml-4 mb-2" target="_blank" href="generateadmissionpdf.php?id=<?php echo $row['id']; ?>">Print Details <i class="fas fa-print"></i></a>
</body>
</html>