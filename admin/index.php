<?php

include '../includes/config.php';
include 'auth_session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard - Sindhudurg Sainik School Amboli</title>
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="https://cdn1.iconfinder.com/data/icons/web-55/32/web_3-256.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello <?php echo $_SESSION['username']; ?></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="../Images/Logo.png" class="header-logo" /> <span
                class="logo-name">ADMIN PANEL</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="../manageusers.php" class="nav-link"><i data-feather="users"></i><span>Users</span></a>
            </li>
            <li class="menu-header">Controls</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Manage</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../managebod.php">Board Of Directors</a></li>
                <li><a class="nav-link" href="../staffmanage.php">Teaching Staff</a></li>
                <li><a class="nav-link" href="../nonstaffmanage.php">Non-Teaching Staff</a></li>
                <li><a class="nav-link" href="../headofficestaff.php">Head Office Staff</a></li>
                <li><a class="nav-link" href="../hostelstaffmanage.php">Hostel & Mess Staff</a></li>
              </ul>
                <li class="dropdown">
                <a href="../managenewscorner.php" class="nav-link"><i data-feather="file-text"></i><span>News Corner</span></a>
              </li>
              <li class="dropdown">
                <a href="../manageachievement.php" class="nav-link"><i data-feather="award"></i><span>Achievements</span></a>
              </li>
              <li class="dropdown">
                <a href="../managesocialactivity.php" class="nav-link"><i data-feather="star"></i><span>Social Activities</span></a>
              </li>
              <li class="dropdown">
                <a href="../managecocurricularactivity.php" class="nav-link"><i data-feather="archive"></i><span>Co-Curricular Activities</span></a>
              </li>
              <li class="dropdown">
                <a href="../countermanage.php" class="nav-link"><i data-feather="x-circle"></i><span>Counter (Home Page)</span></a>
              </li>
              <li class="dropdown">
                <a href="../managealumniindefence.php" class="nav-link"><i data-feather="user-check"></i><span>Alumni In Defence</span></a>
              </li>
            </li>
            <li class="menu-header">Media</li>
            <li class="dropdown">
                <a href="../managegalleryphotos.php" class="nav-link"><i data-feather="image"></i><span>Gallery Photos</span></a>
              </li>
              <li class="dropdown">
                <a href="../delete-slider.php" class="nav-link"><i data-feather="sidebar"></i><span>Slider Photos</span></a>
              </li>
              <li class="dropdown">
                <a href="../managevideogallery.php" class="nav-link"><i data-feather="film"></i><span>Gallery Videos</span></a>
              </li>
              <li class="dropdown">
                <a href="../newsslidermanage.php" class="nav-link"><i data-feather="trello"></i><span>News Slider</span></a>
              </li>
              <li class="menu-header">Submissions</li>
              <li class="dropdown">
                <a href="../view-admissions.php" class="nav-link"><i data-feather="mail"></i><span>New Admissions</span></a>
              </li>
              <li class="dropdown">
                <a href="../view-alumni.php" class="nav-link"><i data-feather="user"></i><span>View Registered Alumni</span></a>
              </li>
              <li class="dropdown">
                <a href="../viewcontactrequests.php" class="nav-link"><i data-feather="inbox"></i><span>View Contact Requests</span></a>
              </li>
              <li class="menu-header">Pages</li>
                <li class="dropdown">
                    <a href="../editprincipal.php" class="nav-link"><i data-feather="list"></i><span>Edit Principal's Say</span></a>
                </li>
                <li class="dropdown">
                    <a href="../editpresident.php" class="nav-link"><i data-feather="list"></i><span>Edit President's Say</span></a>
                </li>
                <li class="dropdown">
                    <a href="../editcommandant.php" class="nav-link"><i data-feather="list"></i><span>Edit Commandant's Say</span></a>
                </li>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Alumni Registered</h5>
                          <h2 class="mb-3 font-18">
                          <?php 
                            $selectdata = "SELECT * FROM alumni_t";
                            if ($getcountresult = mysqli_query($conn, $selectdata)) {
                              $rowcount = mysqli_num_rows($getcountresult);
                              echo $rowcount;
                            }
                          ?>
                          </h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/alumni/5853.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15"> Photos In Gallery</h5>
                          <h2 class="mb-3 font-18">
                            <?php 
                            $selectdata = "SELECT * FROM images";
                            if ($getcountresult = mysqli_query($conn, $selectdata)) {
                              $rowcount = mysqli_num_rows($getcountresult);
                              echo $rowcount;
                            }
                          ?>
                          </h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/imagegallery/2802783.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Online Admissions</h5>
                          <h2 class="mb-3 font-18">
                            <?php 
                            $selectdata = "SELECT * FROM admission";
                            if ($getcountresult = mysqli_query($conn, $selectdata)) {
                              $rowcount = mysqli_num_rows($getcountresult);
                              echo $rowcount;
                            }
                          ?>
                          </h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/forms-concept-illustration/6527313.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="card">
                <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                    <div class="row ">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                        <div class="card-content">
                          <h5 class="font-15">Total Videos In Gallery</h5>
                          <h2 class="mb-3 font-18">
                            <?php 
                            $selectdata = "SELECT * FROM videogallery";
                            if ($getcountresult = mysqli_query($conn, $selectdata)) {
                              $rowcount = mysqli_num_rows($getcountresult);
                              echo $rowcount;
                            }
                          ?>
                          </h2>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                        <div class="banner-img">
                          <img src="assets/img/videogallery.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><hr>
          <div class="container-fluid">
              <h3 class="text-center">Today's Admissions</h3>
          <div id="table-data" class="table-responsive">
            
          </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <script src="assets/js/page/index.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
      $(document).ready(function(){
          $.ajax({
             url: "loadadmissiondata.php",
             type: "POST",
             success: function(data){
                 $("#table-data").html(data);
             }
          });
      });
  </script>
</body>
</html>