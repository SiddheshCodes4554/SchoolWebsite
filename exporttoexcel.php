 <?php 
 
include 'includes/config.php';

mysqli_select_db($conn, 'schoolsite123'); 
$sql = "SELECT `name`,`dob`,`aadhar`, `religion`, `caste`, `fat_na`, `cur_add`, `phone`, `email`, `ad_cla`, `cur_sc` FROM `admission` ORDER BY sub_da DESC"; 
$setRec = mysqli_query($conn, $sql); 
$columnHeader = ''; 

$columnHeader = "Name" . "\t" . "Date of Birth" . "\t" . "Aadhar No" . "\t" . "Religion" . "\t" . "Caste" . "\t" . "Parent's Name" . "\t" . "Address" . "\t" . "Phone No." . "\t" . "Email" . "\t" . "Admission in Class" . "\t" . "Current School" . "\t"; 
$setData = ''; 
while ($rec = mysqli_fetch_row($setRec)) { 
$rowData = ''; 
foreach ($rec as $value) { 
$value = '"' . $value . '"' . "\t"; 
$rowData .= $value; 
} 
$setData .= trim($rowData) . "\n"; 
} 

date_default_timezone_set("Asia/Kolkata");

$filename= "admissions(" . date('d-m-Y--g.ia') . ").xls";

header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=$filename"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
echo ucwords($columnHeader) . "\n" . $setData . "\n"; 
?>   