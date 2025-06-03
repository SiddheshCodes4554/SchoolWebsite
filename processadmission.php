<?php

include 'includes/config.php';
include 'includes/links.inc.php';

if(isset($_POST['submit'])) {
$output_dir = "admissionphotoupload/";
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );

$name = $_POST['name'];
$stu_n = $_POST['stu_n'];
$dob = $_POST['dob'];
$bir_pla = $_POST['bir_pla'];
$eid = $_POST['eid'];
$aadhar = $_POST['aadhar'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$mo_tou = $_POST['mo_tou'];
$religion = $_POST['religion'];
$caste = $_POST['caste'];
$fat_na = $_POST['fat_na'];
$mot_na = $_POST['mot_na'];
$loc_na = $_POST['loc_na'];
$gau_rel = $_POST['gau_rel'];
$cur_add = $_POST['cur_add'];
$per_add = $_POST['per_add'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fat_occ = $_POST['fat_occ'];
$mot_occ = $_POST['mot_occ'];
$income = $_POST['income'];
$off_add = $_POST['off_add'];
$cur_sc = $_POST['cur_sc'];
$cur_cla = $_POST['cur_cla'];
$cur_med = $_POST['cur_med'];
$saral = $_POST['saral'];
$Udise = $_POST['Udise'];
$ad_cla = $_POST['ad_cla'];
$lan = $_POST['lan'];
$hobby = $_POST['hobby'];
$ser_no = $_POST['ser_no'];
$post = $_POST['post'];
$service = $_POST['service'];
$sub_da = date("Y-m-d");
$pla_sub = $_POST['pla_sub'];	

$sql = "INSERT INTO `admission` (stu_img, name,stu_n,dob,bir_pla,eid,aadhar,weight,height,mo_tou,religion,caste,fat_na,mot_na,loc_na,gau_rel,cur_add,per_add,email,phone,fat_occ,mot_occ,income,off_add,cur_sc,cur_cla,cur_med,saral,Udise,ad_cla,lan,hobby,ser_no,post,service,sub_da,pla_sub)  VALUES ('$NewImageName','$name','$stu_n','$dob','$bir_pla','$eid','$aadhar','$weight','$height','$mo_tou','$religion','$caste','$fat_na','$mot_na','$loc_na','$gau_rel','$cur_add','$per_add','$email','$phone','$fat_occ','$mot_occ','$income','$off_add','$cur_sc','$cur_cla','$cur_med','$saral','$Udise','$ad_cla','$lan','$hobby','$ser_no','$post','$service','$sub_da','$pla_sub')";
$qry = mysqli_query($conn,  $sql);
}
if (!$qry) {
	echo "<div class='alert alert-danger text-center mx-auto'>Query Not Passed Try Again Or Contact Our School</div>";
} else {
	echo"<div class='alert alert-success text-center mx-auto w-75'>Your Admission Is Successfully Sent To Us.</div>";
	echo "<div class='alert alert-success text-center mx-auto w-75'>We Will Contact You Shortly..</div>";
	header("refresh:4; admission.php");
}

?> 