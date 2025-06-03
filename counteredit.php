<?php 

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; 
		$editselectqry = "SELECT * FROM counter_s WHERE id='$id'"; 
		$editselectresult = mysqli_query($conn, $editselectqry);
		$editselectrow = mysqli_fetch_assoc($editselectresult);
		extract($editselectrow);
	}
	catch(PDOException $e)
	{
		$e->getMessage();
	}
	
}

if(isset($_REQUEST['btn_update']))
{
	try
	{
		$teachers = $_REQUEST['teachers'];	
		$students = $_REQUEST['students'];
		
		if(!isset($errorMsg))
		{
			$updateqry = "UPDATE counter_s SET teachers='$teachers', students='$students' WHERE id='$id'"; 
			$updateresult = mysqli_query($conn, $updateqry);
			 
			if($updateresult)
			{
				$updateMsg="File Updated Successfully.......";	
				header("refresh:3;countermanage.php");	
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
<title>EDIT Home Page Counter</title>
<link rel="icon" type="image/x-icon" href="Images/Logo.ico">
</head>

	<body>
	
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
		if(isset($updateMsg)){
		?>
			<div class="alert alert-success">
				<strong>UPDATE ! <?php echo $updateMsg; ?></strong>
			</div>
        <?php
		}
		?>   
		
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Teachers:</label>
				<div class="col-sm-6">
				<input type="number" name="teachers" class="form-control" value="<?php echo $teachers; ?>" required/>
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Students:</label>
				<div class="col-sm-6">
				<input type="number" name="students" class="form-control" value="<?php echo $students; ?>" required/>
				</div>
				</div>	
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_update" class="btn btn-primary" value="Update">
				<a href="countermanage.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>