<?php session_start();
// to check user can have access to this page
if (!isset($_SESSION['mycaregiverid'])) {
  // redirect to login page
  header("Location: http://localhost/getcare/login.php");
  exit;
}
 ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GetCaregiver</title>
        <meta name="description" content="Official website of getCaregiver we are #1 website for all caregivers in nigeria where families/companies get to hire experienced caregivers for their loved ones or elderly">
        <meta name= 'keywords' content='caregiver,care,nurse,health,hospital,clinic,home health, lagos Nigeria,'>
        <meta name='author' content='Adesanya Olanrewaju'>
        
        <!-- Place favicon.ico in the root directory -->

        <link rel='stylesheet' href='fonts/css/all.css'>
        <link rel="shortcut icon" type="image/png" href="medfavicon.ico">

        <!-- External Css link and Bootstrap -->

        <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.css'>
        <link rel="stylesheet" type="text/css" href="css/project.css">

        <style type="text/css">
          a{
            color: black;
          }

        </style>
       
    </head>
    <body>
        
          <div class="container-fluid">
<div class="row">
                <div class="col-md-5">
                <nav class="navbar navbar-expand-md navbar-light" >
            <a class="navbar-brand log" href="dashboardemployee.php" ><i style="color:rgb(128,255,0);">get</i><i style="color: rgb(0,64,128);">Caregiver</i></a>
          </nav>
            </div>
                    <div class="col-md-7">
                        <nav class="navbar navbar-expand-md navbar-light" >
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                       </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav" >
                        <li class="nav-item">
                          <a class="nav-link" href="joblisting.php" style='color:black;'>Job Search</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style='color:black;'>Verify Your Profile</a>
                        </li>
                         <li class="nav-item dropdown">
                            <div class="input-group-mb-3">
                            <div class="input-group-prepend">
                            <a class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['caregiver_fname']; ?></a>
                            <div class="dropdown-menu">
                                 <a class="dropdown-item" href="dcaregiver2.php">Profile</a>
                                 <a class="dropdown-item" href="#">Subscription</a>
                                 <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div> 
                        
                         </div>
                     </div>
                         </li>
             <li class="nav-item">
                            <a class="nav-link" href="#" style='color:black;'><img src="images/avatar.png" width="30" height="30"></a>
                         </li>
                      </ul>
                    </div>
                 </nav>
                  </div>

             </div>