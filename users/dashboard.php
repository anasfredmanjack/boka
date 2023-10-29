<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: ../login.html");
}
include('../scripts/config/config.php');
 $userrid = $_SESSION['meduserid'];
 $sqlgetuser = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `id`='$userrid'");
 $userfetchfullname = mysqli_fetch_assoc($sqlgetuser); 
 $userfullnamee = $userfetchfullname['name'];
 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boka - Bridging medical gaps</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="../images/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description" content="Bridging medical gaps">

<meta name="msapplication-tap-highlight" content="no">
<link href="main.d810cf0ae7f39f28f336.css" rel="stylesheet">
</head>





<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-src">
    <img src="assets/images/logo-stiky.png" style="height:160%; width:130%; margin-top:-8px;">
</div>
<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>
<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
</div>
 <div class="app-header__content">
<div class="app-header-right">
<div class="header-btn-lg">
<a href="../logout.php"><button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button></a>
</div> </div>
</div>
</div> 


<div class="app-main">



<?php include('../includes/sidebar.php');  ?>

<div class="app-main__outer">
<div class="app-main__inner">
    
    <!-- Page title starts here-->
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-rocket text-success"></i>
</div>


<div> <span style="color:#3d9970;">Dashboard</span>
<div class="page-title-subheading"><?php echo'Welcome, '; echo $userfullnamee;  ?> Whatever the symptom is BOKA is here to help<br>Get Better with the help of our top health features</div>
</div>
</div>
 </div>
</div> 
   <!-- Page title ends here-->


   <!-- Page main content starts here-->
    <div class="row align-items-center">
        
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
            <div class="grid-menu grid-menu-2col">
            <div class="no-gutters row">
            <div class="col-sm-6">
            <div class="widget-chart widget-chart-hover">
            <a href="medicalassistant.php" style="text-decoration:none; color:#495057;">
            <div class="icon-wrapper rounded-circle">
            <div class="icon-wrapper-bg bg-primary"></div>
              <i style="color:#3d9970;" class="metismenu-icon pe pe-7s-keypad"></i>
            </div>
                <div class="widget-numbers">Medical Assistant</div>
                     <div class="widget-subheading">Click here to get accurate health diagnosis from BOKA AI</div>
                </div>
            </a>
            </div>
            
            
            <div class="col-sm-6">
               
                    <div class="widget-chart widget-chart-hover">
                         <a href="dataofdisease.php" style="text-decoration:none; color:#495057;">
                            <div class="icon-wrapper rounded-circle">
                            <div class="icon-wrapper-bg bg-info"></div>
                            <i class="metismenu-icon pe-7s-graph"></i>
                            </div>
                            <div class="widget-numbers">Data of Disease</div>
                            <div class="widget-subheading">Search for any disaese or symptoms related to any disease and get credible info from BOKA AI</div>
                        </a>
                    </div>
                
            </div>
            
            
            <div class="col-sm-6">
                 
                <div class="widget-chart widget-chart-hover">
                    <a href="prescription.php" style="text-decoration:none; color:#495057;">
                    <div class="icon-wrapper rounded-circle">
                    <div class="icon-wrapper-bg bg-danger"></div>
                    <i class="metismenu-icon pe-7s-browser"></i>
                    </div>
                    <div class="widget-numbers">Prescription</div>
                    <div class="widget-subheading">Click here to upload your prescription and receive personalised health and  tips from BOKA AI</div>
                    </a>
                </div>
                
            </div>
            
            
            <div class="col-sm-6">
                
            <div class="widget-chart widget-chart-hover br-br">
                <a href="medicalprofile.php" style="text-decoration:none; color:#495057;">
                <div class="icon-wrapper rounded-circle">
                <div class="icon-wrapper-bg bg-success"></div>
                <i class="metismenu-icon pe-7s-plugin"></i>
                </div>
                <div class="widget-numbers">Medical Profile</div>
                <div class="widget-subheading">Click here to view and edit your medical Profile</div>
                </a>
            </div>
                
            </div>
            
            
            </div>
            </div>
            </div>
        </div>
        
        
        
    </div>
          <!-- Page main content ends here-->          
                  

</div>






<!-- Footer starts here-->
<div class="app-wrapper-footer">
<div class="app-footer">
<div class="app-footer__inner">





<div class="app-footer-right">
<p class="text-center">&copy;
                    <a href="index.php" target="_blank" rel="noopener">BOKA - BRIDGING MEDICAL GAPS</a></p>


</div>

</div>
</div>
</div></div>
<!-- Footer ends here-->

</div>
</div>
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
</body>
</html>