<?php

include 'includes/links.php';

$page = "Admission";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKQ9VZ5Q');</script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2452881823201462"
     crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="Images/Logo.ico">
    <title>Admission Form</title>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2E8J8K3X0R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2E8J8K3X0R');
</script>

</head>



<style type="text/css">
body {
  font-family: "Raleway",sans-serif;
  background-image: linear-gradient(120deg, #fccb90 0%, #d57eeb 100%);
}
.formbox {
  background: palegoldenrod;
  box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.4);
  margin-bottom: 10px;
}
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    padding: 1rem;
    position: relative;
    width: 60vh;
    height: auto;
    margin-right: 2vw;
}
.admission{
  text-decoration: underline overline;   
    text-decoration-thickness: 3px;
    text-decoration-color: #0D5BE1;
    text-underline-offset: .4em;
}
</style>
<body>
<?php include "includes/header.php"; ?>		
<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h5 class="text-center">Sindhudurg District Ex-Servicemen Association, Sindhudurg</h5>
                <h1 class="text-center">Sindhudhurg Sainik School & Jr. College, Amboli</h1>
                <p class="text-center">At & Post - Amboli, Tal. Sawantwadi, Dist, Sindhudurg</p>
            </div>
        </div>
    </div>
</header>

<a href="admissionprocess.php" class="btn btn-primary m-2">See Admission Process</a>

<div class="container-fluid w-75 mx-auto formbox">
    <div class="row">
     <div class="col w-25"> 
      <img style="height: 150px;" src="Images/Logo.png" class="img-fluid mt-2">
     </div>
     <div class="col text-left mt-5 mr-5 m-auto">
         <h2> Admission Form 2024-25 </h2>
     </div> 
    </div>
    <p class="text-right"><span style="color: #ff0000;">*</span> Denotes A Required Field</p>
    <div class="row">
        <div class="col w-50">
            <h6>Rules:-</h6>
            <ul>
                <li>Please Fill The Form Carefully</li>
                <li>If Wrong Data Is Filled, You Will Be Responsible</li>
                <li>Check The Required Fields</li>
                <li>Avoid Multiple Attempts</li>
            </ul>
        </div>
            <hr>
               <form method="post" enctype="multipart/form-data" action="processadmission.php"> 
                <div class="mb-3 mr-2">
  <label for="formFile" class="form-label">Select Student's Image</label>
  <input class="form-control" type="file" accept=".jpg, .jpeg, .png" id="formFile" name="image[]">
</div>
        </div>
           <hr>
            <div class="row mb-3">
                <label for="fullname" class="col-sm-2 col-form-label">Full Name:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <input type="text" placeholder="Surname -- Name - - Father's Name - -Mother's Name" class="form-control" id="fullname" name="name" required>
            </div>
            </div>
            <div class="row mb-3">
                <label for="namedev" class="col-sm-2 col-form-label">Name (Devnagiri):</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Student's Name (Devnagiri) ex. राहुल" class="form-control" id="namedev" name="stu_n">
            </div>
            </div>
            <div class="row mb-3">
                <label for="dob" class="col-sm-2 col-form-label">Date Of Birth:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            </div>
            <div class="row mb-3">
                <label for="bir_pla" class="col-sm-2 col-form-label">Birth Place:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Birth Place" class="form-control" id="bir_pla" name="bir_pla">
            </div>
            </div><hr>
            <p class="text-center font-weight-bolder">Please Fill Any One Of This</p>
            <div class="row mb-3">
                <label for="eid" class="col-sm-2 col-form-label">EID No.</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Your Aadhaar Enrollment ID ( EID ) " class="form-control" id="eid" name="eid">
            </div>
            </div>
            <p class="text-center font-weight-bolder">OR</p>
            <div class="row mb-3">
                <label for="aadhar" class="col-sm-2 col-form-label">Aadhaar No.</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Your Aadhaar Card Number" class="form-control" id="aadhar" name="aadhar">
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="height" class="col-sm-2 col-form-label">Height:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="In Centimeters (Cm)" class="form-control" id="height" name="height">
            </div>
            </div>
            <div class="row mb-3">
                <label for="weight" class="col-sm-2 col-form-label">Weight:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="In Kilograms (Kg)" class="form-control" id="weight" name="weight">
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="mo_tou" class="col-sm-2 col-form-label">Mother Tongue:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <input type="text" placeholder="Mother Tongue" class="form-control" id="mo_tou" name="mo_tou" required>
            </div>
            </div>
            <div class="row mb-3">
                <label for="religion" class="col-sm-2 col-form-label">Religion:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <input type="text" placeholder="Religion" class="form-control" id="religion" name="religion" required>
            </div>
            </div>
            <div class="row mb-3">
                <label for="caste" class="col-sm-2 col-form-label">Caste:</label>
            <div class="col-sm-10">
                <select class="form-select" id="caste" name="caste">
                    <option value="SC"> SC </option>
                    <option value="ST"> ST </option>
                    <option value="NT (A)"> NT (A) </option>
                    <option value="NT (B)"> NT (B) </option>
                    <option value="NT (C)"> NT (C) </option>
                    <option value="NT (D)"> NT (D) </option>
                    <option value="OBC"> OBC </option>
                    <option value="SBC"> SBC </option>
                    <option value="General"> General </option>
                </select>
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="fat_na" class="col-sm-2 col-form-label">Father's Name:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <input type="text" placeholder="Father's Full Name" class="form-control" id="fat_na" name="fat_na" required>
            </div>
            </div>
            <div class="row mb-3">
                <label for="mot_na" class="col-sm-2 col-form-label">Mother's Name:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <input type="text" placeholder="Mother's Full Name" class="form-control" id="mot_na" name="mot_na" required>
            </div>
            </div>
            <div class="row mb-3">
                <label for="loc_na" class="col-sm-2 col-form-label">Local Gaurdian's Name:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Local Gaurdian's Full Name" class="form-control" id="loc_na" name="loc_na">
            </div>
            </div>
            <div class="row mb-3">
                <label for="gau_rel" class="col-sm-2 col-form-label">Gaurdian's Relation With Student:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Gaurdian's Relation With Student" class="form-control" id="gau_rel" name="gau_rel">
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="cur_add" class="col-sm-2 col-form-label">Address:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <textarea class="form-control" id="cur_add" name="cur_add" required rows="3"></textarea>
            </div>
            </div>
            <div class="row mb-3">
                <label for="per_add" class="col-sm-2 col-form-label">Permanent Address:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <textarea class="form-control" id="per_add" name="per_add" required rows="3"></textarea>
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" placeholder="aaaa@bbb.com" class="form-control" id="email" name="email">
            </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Phone No:</label>
            <div class="col-sm-10">
                <input type="tel" placeholder="XXXXXXXXXX" class="form-control" id="phone" name="phone">
            </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Father's Occupation:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Father's Occupation" class="form-control" id="fat_occ" name="fat_occ">
            </div>
            </div>
            <div class="row mb-3">
                <label for="mot_occ" class="col-sm-2 col-form-label">Mother's Occupation:</label>
            <div class="col-sm-10">
                <input type="text" placeholder="Mother's Occupation" class="form-control" id="mot_occ" name="mot_occ">
            </div>
            </div>
            <div class="row mb-3">
                <label for="income" class="col-sm-2 col-form-label">Total Monthly Family Income:</label>
            <div class="col-sm-10">
                <input type="tel" placeholder="In ₹" class="form-control" id="income" name="income">
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="off_add" class="col-sm-2 col-form-label">Office Address:</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="off_add" name="off_add" rows="3"></textarea>
            </div>
            </div>
            <div class="row mb-3">
                <label for="cur_sc" class="col-sm-2 col-form-label">Name Of Current School:</label>
            <div class="col-sm-10">
                <input type="tel" placeholder="Current School" class="form-control" id="cur_sc" name="cur_sc">
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="cur_cla" class="col-sm-2 col-form-label">Current Class:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <select class="form-select" id="cur_cla" name="cur_cla">
                   <option value="5th">5th</option>
                   <option value="6th">6th</option>
                   <option value="7th">7th</option>
                   <option value="8th">8th</option>
                   <option value="9th">9th</option>
                   <option value="10th">10th</option>
                   <option value="11th">11th</option>
                </select>
            </div>
            </div>
            <div class="row mb-3">
                <label for="cur_med" class="col-sm-2 col-form-label">Current Medium:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <select class="form-select" id="cur_med" name="cur_med">
                   <option value="English">English</option>
                   <option value="Marathi">Marathi</option>
                   <option value="Hindi">Hindi</option>
                   <option value="Others">Others</option>
                </select>
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="saral" class="col-sm-2 col-form-label">Student SARAL ID Number:</label>
            <div class="col-sm-10">
                <input type="tel" placeholder="Your SARAL ID" class="form-control" id="saral" name="saral">
            </div>
            </div>
            <div class="row mb-3">
                <label for="Udise" class="col-sm-2 col-form-label">School UDISE No:</label>
            <div class="col-sm-10">
                <input type="tel" placeholder="UDISE No" class="form-control" id="Udise" name="Udise">
            </div>
            </div><hr>
            <div class="row mb-3">
                <label for="ad_cla" class="col-sm-2 col-form-label">Class In Which Student Wants To Seek Admission:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10">
                <select class="form-select" id="ad_cla" name="ad_cla">
                   <option value="6th">6th</option>
                   <option value="7th">7th</option>
                   <option value="8th">8th</option>
                   <option value="9th">9th</option>
                   <option value="10th">10th</option>
                   <option value="11th">11th</option>
                </select>
            </div>
            </div>
            <div class="row mb-3">
                <label for="lan" class="col-sm-2 col-form-label">Language In Which Student Wants To Appear For Entrance Exam:<span style="color:#ff0000">*</span></label>
            <div class="col-sm-10 mt-5">&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" value="English" type="radio" name="lan" id="lan" checked>
                 <label class="form-check-label" for="flexRadioDefault2">
                 English
                 </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input class="form-check-input" value="Marathi" type="radio" name="lan" id="lan" checked>
                 <label class="form-check-label" for="flexRadioDefault2">
                 Marathi
                 </label>
            </div>
            </div>
            <div class="row mb-3">
                <label for="hobby" class="col-sm-2 col-form-label">Hobbies/Interests (If Any):</label>
            <div class="col-sm-10">
                <input type="tel" placeholder="Hobbies" class="form-control" id="hobby" name="hobby">
            </div>
            </div><hr>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        If Ward Of Ex-Servicemen / Servicemen
                    </button>
                </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row mb-3">
                    <label for="ser_no" class="col-sm-4 col-form-label">Ex-Serivcemen's / Servicemen's No:</label>
                <div class="col-sm-6">
                    <input type="tel" placeholder="Ex-Serivcemen's / Servicemen's No" class="form-control" id="ser_no" name="ser_no">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="post" class="col-sm-4 col-form-label">Post Held:</label>
                <div class="col-sm-6">
                    <input type="tel" placeholder="Current/Ex Post" class="form-control" id="post" name="post">
                </div>
                </div>
                <div class="row mb-3">
                    <label for="service" class="col-sm-4 col-form-label">Total Service:</label>
                <div class="col-sm-6">
                    <input type="number" placeholder="In Years" class="form-control" id="service" name="service">
                </div>
                </div>
            </div>
        </div>
  </div><hr>

  <div class="row mb-3">
                    <label for="pla_sub" class="col-sm-2 col-form-label">Place Of Submission:</label>
                <div class="col-sm-10">
                    <input type="text" placeholder="eg. Mumbai" class="form-control" id="pla_sub" name="pla_sub">
                </div>
                </div>

            <!--<div class="row mb-3">-->
            <!--        <label for="sub_da" class="col-sm-2 col-form-label">Date Of Submission:</label>-->
            <!--    <div class="col-sm-10">-->
            <!--        <input type="date" placeholder="In Years" class="form-control" id="sub_da" name="sub_da">-->
            <!--    </div>-->
            <!--    </div><hr>-->
                <div class="text-center">
                    <h4>Declaration:-</h4>
                    <p class="bg-light" id="declaration">I Hereby Declare That The Above Information Is Correct. I Will Be Responsible & Liable To Any Punishment If The Information Is Incorrect. I Have Read The <a href="admissionprocess.php">Prospectus</a> Carefully. I Assure You That I Will Abide By The Rule & Instructions Mentioned In The Prospectus. It Is My Entire Responsiibility To Follow All The Instructions Displayed On The Notice-Board From Time To Time.</p>
                </div>
                <p style="margin-left: 2em;"><input id="field_terms" type="checkbox"  required name="terms">
<label for="field_terms">I Accept The Above <a href="#declaration">Declaration</a></label></p>
<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button><br><br>
</div>
</form>
<?php include "includes/footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>