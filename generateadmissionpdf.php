<?php

require('fpdf/fpdf.php');
require('includes/config.php');

include("admin/auth_session.php");

$id = $_REQUEST['id']; 
$query = "SELECT * from admission where id='$id'";
$result =  mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);  

    $name = $row['name'];
    $dob = $row['dob'];
    $birthplace = $row['bir_pla'];
    $eid = $row['eid'];
    $aadharno = $row['aadhar'];
    $height = $row['height']." Cm";
    $weight = $row['weight']." Kg";
    $mothertongue = $row['mo_tou'];
    $religion = $row['religion'];
    $caste = $row['caste'];
    $fathername = $row['fat_na'];
    $father = "Father's";
    $mother = "Mother's";
    $guardian = "Gaurdian's";
    $mothername = $row['mot_na'];
    $guardianname = $row['loc_na'];
    $guardianrelation = $row['gau_rel'];
    $cur_add = $row['cur_add'];
    $per_add = $row['per_add'];
    $phone = $row['phone'];
    $email = $row['email'];
    $fat_occ = $row['fat_occ'];
    $mot_occ = $row['mot_occ'];
    $income = $row['income'];
    $off_add = $row['off_add'];
    $cur_sc = $row['cur_sc'];
    $cur_cla = $row['cur_cla'];
    $cur_med = $row['cur_med'];
    $saral = $row['saral'];
    $Udise = $row['Udise'];
    $ad_cla = $row['ad_cla'];
    $lan = $row['lan'];
    $hobby = $row['hobby'];
    $ser_no = $row['ser_no'];
    $post = $row['post'];
    $service = $row['service'];
    $pla_sub = $row['pla_sub'];
    $sub_da = $row['sub_da'];

    $title = 'Student Details Admission id. '. $row['id'] .'';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    
    if($row['stu_img'] == NULL){
        
    } else { 
        $pdf->Image('admissionphotoupload/'. $row['stu_img'] .'',8,0.5,35,35);    
    }
    
    $pdf->SetFont('Arial','B',10);
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetLineWidth(1);
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    $pdf->Ln(18);
    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($email)+6;
    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Name:', 1, 0, 'C');
    $pdf->Cell(80, 10, $name, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Date Of Birth:', 1, 0, 'C');
    $pdf->Cell(80, 10, date("d/m/Y", strtotime($dob)), 1, 1, 'C');

    $dobirth = new DateTime($dob); 
    $now = new DateTime();
    $diff = $now->diff($dobirth);

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Age:', 1, 0, 'C');
    $pdf->Cell(80, 10, "".$diff->y." Years ".$diff->m." Months ".$diff->d." Days", 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Birth Place:', 1, 0, 'C');
    $pdf->Cell(80, 10, $birthplace, 1, 1, 'C');

    if (empty($eid) OR $eid == NULL) {
    $eidno = "Not Given";
    } else {
    $eidno = $eid;
    }

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'EID No:', 1, 0, 'C');
    $pdf->Cell(80, 10, $eidno, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Aadhar No:', 1, 0, 'C');
    $pdf->Cell(80, 10, $aadharno, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Height:', 1, 0, 'C');
    $pdf->Cell(80, 10, $height, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Weight:', 1, 0, 'C');
    $pdf->Cell(80, 10, $weight, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Mother Tongue:', 1, 0, 'C');
    $pdf->Cell(80, 10, $mothertongue, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Religion:', 1, 0, 'C');
    $pdf->Cell(80, 10, $religion, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Caste:', 1, 0, 'C');
    $pdf->Cell(80, 10, $caste, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, $father.' Name:', 1, 0, 'C');
    $pdf->Cell(80, 10, $fathername, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, $mother.' Name:', 1, 0, 'C');
    $pdf->Cell(80, 10, $mothername, 1, 1, 'C');



    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Local '.$guardian.' Name:', 1, 0, 'C');
    $pdf->Cell(80, 10, $guardianname, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Local '.$guardian.' Relation:', 1, 0, 'C');
    $pdf->Cell(80, 10, $guardianrelation, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Current Address:', 1, 0, 'C');
    $pdf->SetFont('Arial','B',10);
    $pdf->MultiCell(80, 10, $cur_add, 1, 0, 'L');

    $pdf->SetFont('Arial','B',10);
    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Permanent Address:', 1, 0, 'C');
    $pdf->SetFont('Arial','B',10);
    $pdf->MultiCell(80, 10, $per_add, 1, 1, '');

    $pdf->SetFont('Arial','B',10);

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Phone No', 1, 0, 'C');
    $pdf->Cell(80, 10, $phone, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Email', 1, 0, 'C');
    $pdf->Cell(80, 10, $email, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, $father. ' Occupation', 1, 0, 'C');
    $pdf->Cell(80, 10, $fat_occ, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, $mother. ' Occupation', 1, 0, 'C');
    $pdf->Cell(80, 10, $mot_occ, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Total Monthly Income', 1, 0, 'C');
    $pdf->Cell(80, 10, 'Rs. ' .$income, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Office Address:', 1, 0, 'C');
    $pdf->SetFont('Arial','B',10);
    $pdf->MultiCell(80, 10, $cur_add, 1, 1, '');

    $pdf->SetFont('Arial','B',10);

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Name Of Current School', 1, 0, 'C');
    $pdf->Cell(80, 10, $cur_sc, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Current Class', 1, 0, 'C');
    $pdf->Cell(80, 10, $cur_cla, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Current Medium', 1, 0, 'C');
    $pdf->Cell(80, 10, $cur_med, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'School SARAL ID', 1, 0, 'C');
    $pdf->Cell(80, 10, $saral, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'School UDISE No', 1, 0, 'C');
    $pdf->Cell(80, 10, $Udise, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Needs Admission In Class', 1, 0, 'C');
    $pdf->Cell(80, 10, $ad_cla, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Language For Entrance Exam', 1, 0, 'C');
    $pdf->Cell(80, 10, $lan, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Hobbies/Interests', 1, 0, 'C');
    $pdf->Cell(80, 10, $hobby, 1, 1, 'C');

    $servicemen = "Ex-Serviceman/Servicemen's";
    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10,  $servicemen.' No', 1, 0, 'C');
    $pdf->Cell(80, 10, $ser_no, 1, 1, 'C');


    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, $servicemen.' Post', 1, 0, 'C');
    $pdf->Cell(80, 10, $post, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, $servicemen.'Total Service', 1, 0, 'C');
    $pdf->Cell(80, 10, $service, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Place Of Submission', 1, 0, 'C');
    $pdf->Cell(80, 10, $pla_sub, 1, 1, 'C');

    $pdf->SetX((118-$w)/2);
    $pdf->Cell(80, 10, 'Date Of Submission', 1, 0, 'C');
    $pdf->Cell(80, 10, date("d/m/Y", strtotime($sub_da)), 1, 1, 'C');

    $pdf->Output();
?>
