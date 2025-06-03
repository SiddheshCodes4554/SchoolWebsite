<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap" rel="stylesheet">
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body{
		
	}
	.topcontainer{
		width: 100%;
	}

	.topimg{
		width: 100%;	
	}
	.navbar{
		background: transparent;
		color: black;
		text-align: left;
		margin-left: 6vw;
		margin-top: -10vh;
		font-size: 1.1em;
		font-family: Ubuntu,sans-serif;
		z-index: 999999999999;
	}
	#btn{
		display: none;
	}
	#btn2{
		display: none;
	}
 #checkBtn{
 	display: none;
 }
	.navbar ul{
		list-style: none;
		display: inline-block;
	}
	.navbar ul li{
		display: inline-block;
		padding: 7px;
		cursor: pointer;
	}
	.navbar ul li a{ 
		text-decoration: none;
		color: #b45bfa;
  		font-weight: bold;
	}

	.navbar ul li a:hover{ 
		text-decoration: none;
		color: #8e00fe;
	}

	.dropdown {
  		display: inline-block;
  		position: relative;
  		color: #b45bfa;
  		font-weight: bold;
	}

	.dropdown:hover{
		color: #530095;
	}

.dropdown-options {
  display: none;
  position: absolute;
  overflow: visible;
  width: max(120pt,125pt);
  background-color:#fff;
  border-radius:5px;
  z-index: 99999999999;
  box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.4);
}

.dropdown:hover .dropdown-options {
  display: block;
}

.dropdown-options a {
  display: block;
  color: #767676;
  padding: 5px;
  text-decoration: none;
  padding:2px 4px;
  z-index: 9999999999999;
}

.dropdown-options a:hover {
  color: #530095;
  background-color: #ddd;
  border-radius:5px;
}

.active{
	color: #530095;
}

@media only screen and (max-width: 1240px) {
  
  .navbar{
  	margin-left: 1vw;
  }
}

@media only screen and (max-width: 1174px){
	.navbar{
		margin-left: 0;
		margin-top: -5vh;
		font-size: 1.1em;
		text-align: center;
	}
	.navbar ul li , .dropdown{
		display: block;
		cursor: pointer;
		position: relative;
	}
	.dropdown-options{
		white-space: nowrap;
		z-index: 9999;
	}
	#btn{
		display: block;
		cursor: pointer;
		background: whitesmoke;
		margin-left: 96%;
		margin-top: -5%;
	}
	#btn2{
		display: none;
		cursor: pointer;
		background: whitesmoke;
		margin-left: 96%;
		margin-top: -5%;
	}
	#nav{
		display: none;
	}
	#btn{
		font-size: 29pt;
	}
	#btn2{
		font-size: 29pt;
	}
}

@media only screen and (max-width: 1058px){
	#btn{
		margin-left: 89%;
		margin-top: -5%;
	}
	#btn2{
		margin-left: 89%;
		margin-top: -5%;
	}
	.dropdown-options {
  width: max(140pt,150pt);
}
}

@media only screen and (max-width: 1000px){
#btn{
		margin-left: 95%;
		margin-top: -5%;
	}
	#btn2{
		margin-left: 95%;
		margin-top: -5%;
	}
}

@media only screen and (max-width: 656px){
	#btn{
		margin-left: 90%;
		margin-top: -5%;
		font-size: 25pt;
	}
	#btn2{
		margin-left: 90%;
		margin-top: -5%;
		font-size: 25pt;
	}

}

.active{
	color: #8e00fe;
}
</style>
<div class="topcontainer">
	<a href="index.php"><img class="topimg" src="Images/topimg.png"></a>
<i id="btn" onclick="show()" class="fa-solid fa-bars">
</i>
<i id="btn2" onclick="hide()" class="fa-solid fa-bars">
</i>
  <nav class="navbar" id="nav">
  	<ul>
  		<li class=""><a class="<?php if($page == 1){ echo "active"; } ?>" href="index.php"><span class="">Home</span></a></li>
  		<div class="dropdown">
  			<li class="drdown"><span class="">About Us </span><i class="fa-solid fa-chevron-down"></i></li>
  			<div class="dropdown-options">
  				<a href="aboutus.php">About Us</a>
    			<a href="presidentsay.php">President's Say</a>
    			<a href="commandantsay.php">Commandant's Say</a>
    			<a href="principalsay.php">Principal's Say</a>
  			</div>
		</div>
		<div class="dropdown">
  			<li class="drdown <?php if($page == 1){ echo "active"; } ?>">Admission <i class="fa-solid fa-chevron-down"></i></li>
  			<div class="dropdown-options">
    		<a href="admissionprocess.php">Admisison Process</a>
    			<a href="admission.php">Admission Form</a>
  			</div>
			</div>
			<div class="dropdown">
  			<li class="drdown">Management & Staff <i class="fa-solid fa-chevron-down"></i></li>
  			<div class="dropdown-options">
    		<a href="bod.php">Board Of Directors</a>
    		<a href="teachingstaff.php">Teaching Staff</a>
    		<a href="non-teachingstaff.php">Non-Teaching Staff</a>
    		<!-- <a href="hostelstaff.php">Hostel & Mess Crew</a> -->
    		<a href="headoffice.php">Head Office Staff</a>
  			</div>
		</div>
		<li><a href="achievements.php">Achievements</a></li>
		<li><a href="newscorner.php">News Corner</a></li>
		<div class="dropdown">
  			<li class="drdown">Alumni <i class="fa-solid fa-chevron-down"></i></li>
  			<div class="dropdown-options">
    		<a href="alumniindefence.php">Alumni In Defence</a>
    			<a href="addnewalumni.php">Add Yourself As Alumni</a>
  			</div>
			</div>
			<div class="dropdown">
  			<li class="drdown">Gallery <i class="fa-solid fa-chevron-down"></i></li>
  			<div class="dropdown-options">
    		<a href="imagegallery.php">Image Gallery</a>
    		<a href="videogallery.php">Video Gallery</a>

  			</div>
</div>
			
  	</ul>
  </nav>
</div>
<script type="text/javascript">
function show(){
		document.getElementById('nav').style.display="block";
		document.getElementById('btn').style.display="none";
		document.getElementById('btn2').style.display="block";
}

function hide(){
		document.getElementById('nav').style.display="none";
		document.getElementById('btn').style.display="block";
		document.getElementById('btn2').style.display="none	";
}

</script>