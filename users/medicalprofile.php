<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: ../login.html");
}
include('../scripts/config/config.php');
 $userrid = $_SESSION['meduserid'];
  //==========Sql query to fetch patient medical profile from DB strts here========//
 $sqlgetuser = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `id`='$userrid'");
 $userfetchfulldetails = mysqli_fetch_assoc($sqlgetuser); 
 
 $userfullnamee = $userfetchfulldetails['name'];
 if($userfullnamee == '')
 {
     $userfullnamee = 'N/A';
 }
 
  $dateofbirth = $userfetchfulldetails['dateofbirth'];
 if($dateofbirth == '')
 {
     $dateofbirth = 'N/A';
 }
 
 
   $weight = $userfetchfulldetails['weight'];
 if($weight == '')
 {
     $weight = 'N/A';
 }
 
   $bloodgroup = $userfetchfulldetails['bloodgroup'];
 if($bloodgroup == '')
 {
     $bloodgroup = 'N/A';
 }
 
  $genotype = $userfetchfulldetails['genotype'];
 if($genotype == '')
 {
     $genotype = 'N/A';
 }
 
   $allergies = $userfetchfulldetails['allergies'];
 if($allergies == '')
 {
     $allergies = 'N/A';
 }
 
   $userpastmedhistory = $userfetchfulldetails['userpastmedhistory'];
 if($userpastmedhistory == '')
 {
     $userpastmedhistory = 'N/A';
 }
 
    $familymedhistory = $userfetchfulldetails['familymedhistory'];
 if($familymedhistory == '')
 {
     $familymedhistory = 'N/A';
 }
 
     $address = $userfetchfulldetails['address'];
 if($address == '')
 {
     $address = 'N/A';
 }
 
 
 
 
 //==========Sql query to fetch patient medical profile from DB ends here========//
 
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


<div> 
<div class="page-title-subheading" style="color:#3d9970;"><b>Medical Profile</b></div>
</div>
</div>
 </div>
</div> 
   <!-- Page title ends here-->


   <!-- Page main content starts here-->
    <div class="row align-items-center">
        <div class="col-12">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Medical Profile</div>
                    <div class="btn-actions-pane-right text-capitalize">
                        <a href="editmedprofile.php" style="text-decoration:none;">
                <button class="btn-wide btn-outline-2x btn btn-outline-focus btn-sm">Edit Profile Details</button>
                </a>
                </div>
                </div>
                
                <div class="p-0 d-block card-footer">
                    <div class="grid-menu grid-menu-2col">
                        <div class="no-gutters row">
                                 <div class="p-2 col-sm-12">

                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark"   data-toggle="modal" data-target="#dobmodal">
                            <i class="lnr-user text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Full Name <br> <span  style="color:#3d9970;"><?php echo $userfullnamee; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">

                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark"   data-toggle="modal" data-target="#dobmodal">
                            <i class="lnr-apartment text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Date of Birth  <br> <span  style="color:#3d9970;"><?php echo $dateofbirth; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-database text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Weight <br> <span  style="color:#3d9970;"><?php echo $weight; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-drop text-dark opacity-7 btn-icon-wrapper mb-2"> </i> Blood group <br> <span  style="color:#3d9970;"><?php echo $bloodgroup; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-strikethrough text-dark opacity-7 btn-icon-wrapper mb-2"></i> Genotype <br> <span  style="color:#3d9970;"><?php echo $genotype; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-cross text-dark opacity-7 btn-icon-wrapper mb-2"></i> Allergies <br> <span  style="color:#3d9970;"><?php echo $allergies; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-heart text-dark opacity-7 btn-icon-wrapper mb-2"></i> Past Medical History <br> <span  style="color:#3d9970;"><?php echo $userpastmedhistory; ?></span>
                            </button>
                            </div>
                            <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-heart-pulse text-dark opacity-7 btn-icon-wrapper mb-2"></i> Family Past Medical History <br> <span  style="color:#3d9970;"><?php echo $familymedhistory; ?></span>
                            </button>
                            </div>
                           <div class="p-2 col-sm-6">
                            <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                            <i class="lnr-home text-dark opacity-7 btn-icon-wrapper mb-2"></i> Address <br> <span  style="color:#3d9970;"><?php echo $address; ?></span>
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>

     <!-- Page main content ends here-->   




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
<script src="../js/jquery-3.3.1.min.js"></script>
<script>
 $(document).ready(function(){
     $("#userdobdata").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
     var userid = "<?php echo $userrid; ?>";
       $.ajax({
                    url: '../scripts/meduserdob.php',
                    method:'POST',
                    data: 'userid='+userid,
                    success: function(data)
                    {
                    
                        $("#userdobdata").html(data);
                    }
                });
     
 });
</script>
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>

</body>
</html>