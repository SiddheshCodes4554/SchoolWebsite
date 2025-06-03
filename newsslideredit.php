<?php 

include 'includes/config.php';
include 'includes/links.inc.php';

include("admin/auth_session.php");

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; 
		$editselectqry = "SELECT * FROM news WHERE id='$id'"; 
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
	    $id = $_REQUEST['update_id']; 
		$news = $_REQUEST['news'];	
	
		if(!isset($errorMsg))
		{
			$updateqry = "UPDATE news SET news_info='$news' WHERE id='$id'"; 
			$updateresult = mysqli_query($conn, $updateqry);
			 
			if($updateresult)
			{
				$updateMsg="File Updated Successfully.......";	
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
<title>EDIT News</title>
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
					
				<div class="form-group mt-4">
				<label class="col-sm-1 control-label">News:</label>
				<div class="col-sm-11">
				<textarea cols="20" rows="15" class="form-control" name="news"><?php echo $news_info; ?></textarea>
				</div>
				</div>
												
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"  name="btn_update" class="btn btn-primary" value="Update">
				<a href="newsslidermanage.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
					
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>