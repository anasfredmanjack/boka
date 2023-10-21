<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: ../login.html");
}
include('scripts/config/config.php');
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
        <!-- Modal -->
                    <div class="modal fade" id="addprescriptionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:#3d9970;"><i class="fas fa-plus"></i> Add Prescription</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="color:#3d9970;">
                              <span aria-hidden="true" >&times;</span>
                            </button>
                          </div>
                                                            <div class="modal-body">
                                                                <div class="row align-items-center">  
                                                                   <div class="col-md-12" style="margin:20px;">
                                                                            <div id="registerresponse"></div>
                                                                        </div>
                                                                </div>    
                                                                 <div class="row align-items-center">  
                                                                        <div class="col-md-12">
                                                                            <div id="prescribeaddresp"></div>
                                                                        </div>
                                                                </div>
                                                                <div class="row align-items-center">  
                                                                    <div class="col-md-12"> 
                                                                            <center><h5  style="color:#3d9970;">Prescription Details</h5>
                                                                            <br>
                                                                            <small><strong>NOTE:</strong>Prescription count starts immediately after the prescription has been uploaded.<br>
                                                                            1. You need a Gmail Account to activate your prescription reminder
                                                                            <br> 2. Ensure to login on the device you want to receive prescription reminders on</small>
                                                                            </center>
                                                                            
                                                                                <div class="card" style="margin:5px; box-shadow: 1px 1px 1px 1px #3d9970;">
                                                                                    <div class="card-body">
                                                                                            <div class="row">             
                                                                                                 <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="mb-0" for="exampleInputName">Prescription Title <small>E.g Maleria Prescription</small></label>
                                                                                                        <input type="text" class="form-control"   id="prescriptiontitle" placeholder="Prescription Title"  />
                                                                                                    </div> 
                                                                                                 </div>
                                                                                                       <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <label class="mb-0" for="exampleInputName"><small>Enter your Gmail Account Click <a href="">here</a> to create if you don't have</small></label>
                                                                                                        <input type="text" class="form-control"   id="remindermail" placeholder="Enter your Gmail Account"  />
                                                                                                    </div> 
                                                                                                 </div>
                                                                                                 
                                     
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                
                                                                                   
                                                                                
                                                                                     <div class="row">
                                                                                                 <div class="col-12">
                                                                                                     <center><h4>Prescription Drug Details</h4></center>
                                                                                                 </div>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                        <div class="card" style="margin:5px; box-shadow: 1px 1px 1px 1px #3d9970;">
                                                                                            <div class="card-body">
                                                                                                
                                                                                                <div class="row">             
                                                                                                    <div class="col-6">
                                                                                                        <div class="form-group">
                                                                                                             <label class="mb-0" for="exampleInputName"><small>Drug Name</small></label>
                                                                                                            <input type="text" class="form-control drugname"  placeholder="Drug Name"  />
                                                                                                        </div> 
                                                                                                    </div>
                                                                                                       <div class="col-6">
                                                                                                        <div class="form-group">
                                                                                                             <label class="mb-0" for="exampleInputName"><small>Number of Tablets</small></label>
                                                                                                            <input type="text" class="form-control tabletsnumber"    placeholder="No of Tablets"  />
                                                                                                        </div> 
                                                                                                    </div>
                                                                                                    
                                                                                                       <div class="col-6">
                                                                                                        <div class="form-group">
                                                                                                             <label class="mb-0" for="exampleInputName"><small>Enter morning intake (no of times to be taken in the morning Enter Unavailable if there's none)</small></label>
                                                                                                            <input type="text" class="form-control morntake"   placeholder="Morning intake"  />
                                                                                                        </div> 
                                                                                                    </div>
                                                                                                    
                                                                                                        <div class="col-6">
                                                                                                        <div class="form-group">
                                                                                                             <label class="mb-0" for="exampleInputName"><small>Enter afternoon intake (no of times to be taken in the afternoon Enter Unavailable if there's none)</small></label>
                                                                                                            <input type="text" class="form-control afttake"  placeholder="Afternoon intake"  />
                                                                                                        </div> 
                                                                                                    </div>
                                                                                                    
                                                                                                        <div class="col-6">
                                                                                                        <div class="form-group">
                                                                                                             <label class="mb-0" for="exampleInputName"><small>Enter evening intake (no of times to be taken in the evening Enter Unavailable if there's none)</small></label>
                                                                                                            <input type="text" class="form-control evetake"   placeholder="Evening intake"  />
                                                                                                        </div> 
                                                                                                    </div>
                                                                                                    
                                                                                                </div>
                                                                                                
                                                                                             </div>
                                                                                        </div>
                                                                                        
                                                                                        <div id="addmoerdrugfield" style="margin:5px;"></div>
                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="col-9"></div>
                                                                                                   <div class="col-3">
                                                                                                                <button type="button" id="addrgbtn" class="btn btn-primary"><i class="fas fa-plus"></i> Add another Drug</button>
                                                                                                 </div>
                                                                                        </div>
                                                                                
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                    
                                                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="uploadpresbtn" class="btn btn-primary"><i class="fas fa-plus"></i> upload prescription</button>
                          </div>
                        </div>
                      </div>
                    </div>
            <!-- Modal -->
    
    
    
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
<i class="pe-7s-keypad text-success"></i>
</div>
<div>Welcome How can Boka help you !!
<div class="page-title-subheading">Whatever the symptom is BOKA is here to help</div>
</div>
</div>
 </div>
</div> 


<div class="row">
    <div class="col-md-9"></div>
      <div class="col-md-3">
          



          <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#addprescriptionmodal"><i class="pe-7s-id"></i> Add Prescription</button>
      </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                <th>Prescription Name</th>
                <th>Date Created</th>
                <th>Total Number of Drugs</th>
                <th></th>
                <th></th>
                </tr>
                </thead>
                <tbody id="fetchtabledata">

                    
                </tbody>
                </table>
            </div>
        </div>
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
$("body").on("click","#addrgbtn", function(){
    
    $("#addmoerdrugfield").append(`<div class="card" style="margin:5px; box-shadow: 1px 1px 1px 1px #3d9970;"> <div class="card-body"> <div class="row">    <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Drug Name</small></label>
                  <input type="text" class="form-control drugname"  placeholder="Drug Name"  />
              </div> 
          </div>
             <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Number of Tablets</small></label>
                  <input type="text" class="form-control tabletsnumber"    placeholder="No of Tablets"  />
              </div> 
          </div>
          
             <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Enter morning intake (no of times to be taken in the morning Enter Unavailable if there's none)</small></label>
                  <input type="text" class="form-control morntake"   placeholder="Morning intake"  />
              </div> 
          </div>
          
              <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Enter afternoon intake (no of times to be taken in the afternoon Enter Unavailable if there's none)</small></label>
                  <input type="text" class="form-control afttake"  placeholder="Afternoon intake"  />
              </div> 
          </div>
          
              <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Enter evening intake (no of times to be taken in the evening Enter Unavailable if there's none)</small></label>
                  <input type="text" class="form-control evetake"   placeholder="Evening intake"  />
              </div> 
          </div>
          
      </div>
      
   </div>
</div>`);
    
});


    $("body").on("click","#uploadpresbtn",function(){
        $("#uploadpresbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
        var prescriptiontitle = $("#prescriptiontitle").val();
         var userrid = "<?php echo $userrid; ?>";
        var remindermail = $("#remindermail").val();
        var drugnamearray = [];
        var tabletsnumberarray = [];
        var  morntakearray = [];
        var afttakearray = [];
        var evetakearray = [];
        
        
        $(".drugname").each(function(){
            drugnamearray.push($(this).val())
            });
            
          $(".tabletsnumber").each(function(){
        tabletsnumberarray.push($(this).val())
        });
        
           $(".morntake").each(function(){
        morntakearray.push($(this).val())
        });
       
         $(".afttake").each(function(){
        afttakearray.push($(this).val())
        });
        
            $(".evetake").each(function(){
        evetakearray.push($(this).val())
        });
        
            $.ajax({
                    url: '../scripts/storenewprescription.php',
                    method:'POST',
                    data: 'prescriptiontitle='+prescriptiontitle+'&userrid='+userrid+'&drugnamearray='+drugnamearray+'&tabletsnumberarray='+tabletsnumberarray+'&morntakearray='+morntakearray+'&afttakearray='+afttakearray+'&evetakearray='+evetakearray,
                    success: function(data)
                    {
                    
                        $("#prescribeaddresp").html(data);
                        $("#submitbtn").html('<i class="fas fa-plus"></i> upload prescription');
                    }
                });
        
        
    });
    
    $("document").ready(function(){
         var userrid = "<?php echo $userrid; ?>";
           $("#fetchtabledata").html('<tr colspan="8"><td><center><i style="color:white;" class="fa fa-spinner fa-spin"></i></center></td></tr>');
               $.ajax({
                    url: '../scripts/loadprescriptiontable.php',
                    method:'POST',
                    data: 'userrid='+userrid,
                    success: function(data)
                    {
                    
                        $("#fetchtabledata").html(data);
                    }
                });
    });
</script>
</body>
</html>


