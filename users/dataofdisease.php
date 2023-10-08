<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: ../login.html");
}
include('../scripts/config/config.php');
 $userrid = $_SESSION['meduserid'];
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
    <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '225c9c650df8cd357ad270528e8af88e781bd826';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
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
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-graph text-success"></i>
</div>
<div>Data Of Diseases (DOD)<small>integrated with <span style="color:#3d9970;">BOKA</span> AI</small>
<div class="page-title-subheading">Search for any symptom or disease and get credible information from our database also integrated with our medical AI</div>
</div>
</div>
 </div>
</div> 



                                    <div class="row">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-3 widget-content bg-night-fade">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">COVID TRACKER</div>
                                                        <div class="widget-subheading"><small>Track the outbreak of the pandemic</small></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="card mb-3 widget-content bg-arielle-smile">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">OUTBREAK LIST</div>
                                                        <div class="widget-subheading"><small>Track global outbreaks and their risks</small></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                                <div class="col-lg-6 col-xl-4">
                                                    <div class="card mb-3 widget-content bg-premium-dark">
                                                        <div class="widget-content-wrapper text-white">
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">World Death Rates</div>
                                                                <div class="widget-subheading"><small>According to CDC</small></div>
                                                            </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-warning">
                                                                        <span>3,000,000</span>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="dodnotresp"></div>
                                        </div>
                                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-hover-shadow card-border mb-3 card">
                                <div class="card-body">
                                <h5 class="card-title"><small>Search for any disease or symptoms related to a particular disease and get credible information</small></h5>
                            
                                    <input placeholder="Search here" type="text"  id="userinput" class="mb-2 form-control-lg form-control">


                                    <div class="divider"></div>
                                    <button class="btn-wide btn btn-success" style="width:100%;"  id="submitbtn" >Click to search <i class="pe-7s-paper-plane" style="font-size:100%;"> </i></button>
                                


                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                              <div id="dodfeedbackdata"></div>
                        </div>
                    </div>


</div>







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
</div>
</div>
<script type="text/javascript" src="assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script>
$("body").on("click","#submitbtn",function(){
    $("#submitbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
    var userinput = $("#userinput").val();
    var userrid = "<?php echo $userrid; ?>";
    if (userinput == "") {
        $("#dodnotresp").html('<div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true">×</span></button><center>Fill all fields in order to proceed</center></div>');
        $("#submitbtn").html('Click to search <i class="pe-7s-paper-plane" style="font-size:100%;"> </i>');
    }else{
             $.ajax({
                    url: '../scripts/dodresponse.php',
                    method:'POST',
                    data: 'userinput='+userinput+'&userrid='+userrid,
                    success: function(data)
                    {
                    
                        $("#dodfeedbackdata").html(data);
                        $("#submitbtn").html('Click to search <i class="pe-7s-paper-plane" style="font-size:100%;"> </i>');
                    }
                });
    }

});
      </script>
</body>
</html>