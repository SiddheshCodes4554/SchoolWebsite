<?php

include 'includes/links.inc.php';
include 'includes/config.php';

include("admin/auth_session.php");

if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$profilepic=$_GET['ppic'];
$ppicpath="admissionphotoupload"."/".$profilepic;
$sql=mysqli_query($conn,"delete from admission where id='$rid'");
unlink($ppicpath);
echo "<script>alert('Student Admission deleted');</script>"; 
echo "<script>window.location.href = 'view-admissions.php'</script>";     
} 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Admissions</title>	 
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
<body>
	<div class="wrapper mt-5">
	<a class="btn btn-warning mt-3 ml-2" href="admin/"><i class="fas fa-arrow-left"></i> Back</a>
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">					
				                <a href="exporttoexcel.php" class="btn btn-success float-right m-2">Export to Excel</a>
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="stafft" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Seeking Admission In</th>
                                            <th>Details</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$result = mysqli_query($conn, "SELECT * FROM admission ORDER BY sub_da DESC");
									if(mysqli_num_rows($result) > 0){
									while($row = mysqli_fetch_assoc($result))
									{
									?>
                                        <tr>
                                        	<td><img src="admissionphotoupload/<?php echo $row['stu_img']; ?>" width="100px" height="60px"></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php $phone = $row['phone']; echo substr($phone, 0, 10); ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['ad_cla']; ?></td>
                                            <td><?php echo"<a href='view-admission.php?id={$row['id']}&status=seen'><button class='btn btn-primary'>View Full Details</button></a>" ?>&nbsp; 
                                            	<?php 
                                            		if ($row['status'] == 'unseen') {
                                            			echo '<span class="text-center badge badge-danger mt-2 ml-5">Unseen</span>';
                                            		} else {
                                            			echo '<span class="text-center badge badge-success mt-2 ml-5">Seen</span>';
                                            		}
												?>
                                            </td>
                                            <td>
                                                <a href="view-admissions.php?delid=<?php echo $row['id']; ?>&&ppic=<?php $row['stu_img']; ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');"><i class="material-icons">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    <?php
									} } else {
										echo "No Admissions";
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                        
                    </div>
                   
                </div>
				
		</div>
		
	</div>
			
	</div>
	<script>
			$(document).ready(function() {
    $('#stafft').DataTable();
} );
		</script>
</body>
</html>

<?php 

require_once "vendor/autoload.php";
  
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

  
$spreadsheet = new Spreadsheet();
$Excel_writer = new Xlsx($spreadsheet);
  
$spreadsheet->setActiveSheetIndex(0);
$activeSheet = $spreadsheet->getActiveSheet();
  
$activeSheet->setCellValue('A1', 'Name');
$activeSheet->setCellValue('B1', 'Date of Birth');
$activeSheet->setCellValue('C1', 'Aadhar');
$activeSheet->setCellValue('D1', 'Religion');
$activeSheet->setCellValue('E1', 'Caste');
$activeSheet->setCellValue('F1', 'Address');
$activeSheet->setCellValue('G1', 'Contact No.');
$activeSheet->setCellValue('H1', 'Email');
$activeSheet->setCellValue('I1', 'Wants Admission in Class');
  
$query = $db->query("SELECT * FROM admission");
  
if($query->num_rows > 0) {
    $i = 2;
    while($row = $query->fetch_assoc()) {
        $activeSheet->setCellValue('A'.$i , $row["name"]);
        $activeSheet->setCellValue('B'.$i , $row["dob"]);
        $activeSheet->setCellValue('C'.$i , $row["aadhar"]);
        $activeSheet->setCellValue('D'.$i , $row["religion"]);
        $activeSheet->setCellValue('E'.$i , $row["caste"]);
        $activeSheet->setCellValue('F'.$i , $row["cur_add"]);
        $activeSheet->setCellValue('G'.$i , $row["phone"]);
        $activeSheet->setCellValue('H'.$i , $row["email"]);
        $activeSheet->setCellValue('I'.$i , $row["ad_cla"]);
        $i++;
    }
}
  
$filename = 'admissions.xlsx';
  
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename='. $filename);
header('Cache-Control: max-age=0');
$Excel_writer->save('php://output');


// End

?>

