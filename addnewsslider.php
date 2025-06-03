<?php

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_REQUEST['btn_insert']))
{
	try
	{
		$news_info	= $_REQUEST['news_info'];			
			
		if(!isset($errorMsg))
		{	
			$insertqry = "INSERT INTO news (`news_info`) VALUES ('$news_info')";
			$insertresult = mysqli_query($conn, $insertqry); 
		
			if(!$insertqry)
			{
				$insertMsg="Adding News Upload Failed"; 
				header("refresh:3;addnewsslider.php"); 
			} else {
			$insertMsg="Added News Successfully........"; 
				header("refresh:3;newsslidermanage.php");
		}
	}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>ADD News</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>
	<body>
		<a class="btn btn-warning mt-3 ml-2" href="newsslidermanage.php"><i class="fas fa-arrow-left"></i> Back</a>
	<div class="wrapper">
	<div class="container">			
		<div class="col-lg-12">	
		<?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($insertMsg)){
		?>
			<div class="alert alert-success">
				<strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?>   	
			<form method="post" action="addnewsslider.php" class="form-horizontal" enctype="multipart/form-data">
					
				<div class="form-group mt-4">
				<label class="col-sm-1 control-label">News:</label>
				<div class="col-sm-11">
				<textarea placeholder="Enter News Article" cols="20" rows="15" class="form-control" name="news_info"></textarea>
				</div>
				</div>
					
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
				<a href="newsslidermanage.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>