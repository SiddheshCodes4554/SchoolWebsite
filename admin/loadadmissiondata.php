<?php 

include'../includes/config.php';

$today = date("Y-m-d");

$sql ="SELECT * FROM admission WHERE sub_da='$today'";
$result = mysqli_query($conn, $sql) or die("Database Connection Failed!");
$outpit = "";
if(mysqli_num_rows($result) > 0){
    $output = '<table border="1" class="text-center" width="100%" cellspacing="0" cellpadding="10px"         >
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>More Details</th>
                </tr>';
                while($row = mysqli_fetch_assoc($result)){
                     $output .= "<tr><td><img height='50px' src='../admissionphotoupload/{$row['stu_img']}'></td><td>{$row['name']}</td><td>{$row['phone']}</td><td>{$row['email']}</td><td><a class='btn btn-warning' href='../view-admission.php?id={$row['id']}'>View More</a></td></tr>
                                ";
                }
                $output  .= "</table>";
                mysqli_close($conn);
                echo $output;
    
} else {
    echo "<h2>No Admissions Today</h2>";
}

?>