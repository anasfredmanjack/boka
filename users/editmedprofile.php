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
<div class="header-dots">

<div class="dropdown">
<button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
<span class="icon-wrapper icon-wrapper-alt rounded-circle">
<span class="icon-wrapper-bg bg-danger"></span>
<i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
<span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
</span>
</button>
</div>


</div>
<div class="header-btn-lg pr-0">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="btn-group">
<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
<img width="42" class="rounded-circle" src="assets/images/unknownuser.png" alt>
</a>

</div>
</div>

</div>
</div>
</div>
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
<div class="page-title-subheading" style="color:#3d9970;"><i class="lnr-heart-pulse text-dark opacity-7 btn-icon-wrapper mb-2"></i> Edit Medical Profile</div>
</div>
</div>
 </div>
</div> 
   <!-- Page title ends here-->


   <!-- Page main content starts here-->
   <div class="row" style="margin:-20px;">
         <div class="col-2">
             <a href="medicalprofile.php" style="text-decoration:none;">
                     <div class="card-hover-shadow card-border mb-3 card">
                        <div class="card-body">
                            <center>
                            <i class="lnr lnr-pointer-left text-dark opacity-7 btn-icon-wrapper mb-2"  style="color:#3d9970; font-size:20px;"></i>
                            </center>
                        </div>
                    </div>
                </a>
         </div>
         <div class="col-10">
             <center>
             <small style="color:#3d9970; font-size:40px;"> Edit Medical Profile</small>
         </center>
         </div>
   </div>
    <div class="row align-items-center">
        
        
        <div class="col-lg-12">
            <div class="card" style="margin:5px; box-shadow: 1px 1px 1px 1px #3d9970;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12" style="margin:10px;" id="medprofileresponse"></div>
                        <div class="col-lg-6">
                            <form>
                                <div class="form-group">
                                    <label class="mb-0" for="dateofbirth">Date of Birth</label>
                                    <input  type="date" class="form-control" id="dateofbirth"  value="<?php echo $dateofbirth; ?>" />
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="form-group" >
                                    <label class="mb-0" for="weight">Weight</label>
                                    <input  type="text"  class="form-control" id="weight"  value="<?php echo $weight; ?>" />
                                </div>
                    </form>
                        </div>
                        <div class="col-lg-6" style="margin-top:2px;">
                            <form>
                                <div class="form-group" >
                                    <label class="mb-0" for="bloodgroup">Blood group</label>
                                    <input type="text" class="form-control" id="bloodgroup"   value="<?php echo $bloodgroup; ?>" />
                                </div>
                    </form>
                        </div>
                        <div class="col-lg-6" style="margin-top:10px;">
                            <form>
                                <div class="form-group">
                                    <label class="mb-0" for="genotype">Genotype</label>
                                    <input type="text" class="form-control" id="genotype"  value="<?php echo $genotype; ?>" />
                                </div>
                    </form>
                        </div>
                        <div class="col-lg-12" style="margin-top:10px;">
                            <form>
                                <div class="form-group">
                                    <label class="mb-0" for="allergies">Allergies  <small>if you don't have enter none</small></label>
                                    <input type="text" class="form-control form-control-lg" id="allergies" value="<?php echo $allergies; ?>">
                                </div>
                    </form>
                        </div>
                        <div class="col-lg-12" style="margin-top:10px;">
                            <form>
                                <div class="form-group">
                                    <label class="mb-0" for="pastmedicalhistory">Past Medical History <small>if you don't have enter none</small></label>
                                    <input type="textarea" class="form-control form-control-lg"  id="pastmedicalhistory" value="<?php echo $userpastmedhistory; ?>" />
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12" style="margin-top:10px;">
                            <form>
                                <div class="form-group">
                                    <label class="mb-0" for="familypastmedicalhistory">Enter Your Family Past Medical History  <small>if you dont't have enter none</small></label>
                                    <input type="text" class="form-control form-control-lg" id="familypastmedicalhistory" value="<?php echo $familymedhistory; ?>">
                                </div>
                            </form>
                        </div>
                             <div class="col-lg-12" style="margin-top:10px;">
                            <form>
                                <div class="form-group">
                                    <label class="mb-0" for="homeaddress">Home Address </label>
                                    <input type="text" class="form-control form-control-lg" id="homeaddress" value="<?php echo $address; ?>">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <center>
                                <button class="btn btn-primary btn-lg" id="submitbtn">Update Profile</button>
                            <center>
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
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
  <script>
        $("body").on("click","#submitbtn", function(){
            $("#submitbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
            var dateofbirth = $("#dateofbirth").val();
            var weight = $("#weight").val();
            var allergies = $("#allergies").val();
            var pastmedicalhistory = $("#pastmedicalhistory").val();
            var familypastmedicalhistory = $("#familypastmedicalhistory").val();
            var userid = "<?php echo $userrid; ?>";
            var bloodgroup = $("#bloodgroup").val();
            var genotype = $("#genotype").val();
            var homeaddress = $("#homeaddress").val();

            if(dateofbirth == '' || weight == '' || bloodgroup == '' ||genotype == '' || allergies == '' || familypastmedicalhistory == '' || pastmedicalhistory == '' || homeaddress == '')
            {
                $("#medprofileresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>  Fill all fields to proceed!!</center></div>');
                $("#submitbtn").html("Update Profile");
                $("html, #medprofileresponse").animate({ scrollTop: 0 }, "slow"); 
            }
            else
            {

                $.ajax({
                                type : 'post',
                                url : "../scripts/editmedicalprofile.php", //Here you will fetch records 
                                data:  'dateofbirth='+dateofbirth+'&weight='+weight+'&genotype='+genotype+'&bloodgroup='+bloodgroup+'&allergies='+allergies+'&familypastmedicalhistory='+familypastmedicalhistory+'&pastmedicalhistory='+pastmedicalhistory+'&userid='+userid+'&homeaddress='+homeaddress,
                                success : function(data)
                                {
                                  $("#medprofileresponse").html(data);	
                                
									

                                            	$("html, #medprofileresponse").animate({ scrollTop: 0 }, "slow"); 
                                            	$("#submitbtn").html("Update Profile");
										setTimeout(() => {
											window.location.href = "medicalprofile.php";
										}, 1000);
									
                                }
                                 
                            });

            }

        });
    </script>
</body>
</html>