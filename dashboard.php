<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: login.html");
}
include('scripts/config/config.php');
 $userrid = $_SESSION['meduserid'];
?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Boka - Bridging medical gaps</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Magnific Popup CSS-->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Circle CSS-->
      <link rel="stylesheet" href="css/circle.css">
      <!-- Chatbot -->
      <link rel="stylesheet" href="css/chatbot.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
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
      <!-- loading -->
      <div id="loading">
         <div id="loading-center">
            <img src="images/gg.gif" alt="loder">
         </div>
      </div>
      <!-- loading End -->
      <!--=================================
         Header -->
      <header id="header">
         <div class="container" style="background-color:#3d9970;">
            <div class="row align-items-center">
               <div class="col-lg-9">
                  <nav class="navbar navbar-expand-lg navbar-dark">
                     <a class="navbar-brand" href="index.html">
                     <img class="logo" src="images/logo.png" alt="image">
                     <img class="logo-stiky" src="images/logo-stiky.png" alt="image">
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav  justify-content-center ">
                           <li class="nav-item">
                              <a class="nav-link active" href="#">Dashboard</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="prescription.php">Prescriptions</a>
                           </li>
                         
                           <li class="nav-item">
                              <a class="nav-link" href="contact-us.html">Profile</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <div class="col-lg-3 text-right">
                  <ul class="login">
                     <li class="d-inline"><a href="login.html">Log out</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
      <!--=================================
         Header -->
      <!--=================================
    
      <!--=================================
         MAIN CONTENT -->
      <div class="main-content">
         <!--=================================
            Features -->
         <section class="iq-features">
            <div class="bg"><img src="images/works/work-bg.png" alt="img"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="title-box">
                        <h2 class="title-light text-dark"  style="margin-top:10px;">
                          Let <span>Boka</span> Diagnose your health.
                        </h2>
                      </div>
                    </div>
                </div>
                  <div class="row align-items-center">
                      <div id="chatcontainer"></div>
                  </div>
                                              <div class="card" style="margin-top:100px; margin-bottom:-90px; ">
                              <div class="card-body">
                           <div class="row align-items-center">
                                      <div class="col-lg-2 col-md-2 text-center">
                                         <img class="img-fluid top-img1" src="images/works/bokaabot.png" alt="image"> 
                                      </div>
                                       <div class="col-lg-8 col-md-8 text-center">
                                            
                                                <input type="textarea" class="form-control form-control-lg" 
                                                id="userinput" placeholder="Greetings from Boka! How is your health today">
                                      </div>
                                       <div class="col-lg-2 col-md-2 text-center">
                                             <center>
                                  
                                    <button type="button" id="submitbtn" class="btn btn-primary">Proceed</button>
                                      <center>
                                      </div>
                                      </div>
                                      </div>
                           </div>
            </div>
         </section>
         <!--=================================
            Features -->
     
      </div>
      <!--=================================
         MAIN CONTENT -->
      <!--=================================
         Footer -->
         <footer id="contact" class="education">
            <div class="container">
                <!-- Address END -->
               
                <!-- Address -->
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="footer-logo">
                                <a href="index.html#">
                                    <img src="images/logo.png" alt="vizion1">
                                </a>
                            </div>
                            <div class="widget">
                                <div class="textwidget">
                                    <p class="mt-3">It is a long established fact that a reader will be distracted by the
                                        readable content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 ">
                            <div class="widget">
                                <h4 class="footer-title">Pages</h4>
                                <div class="menu-footer1-container">
                                    <ul id="menu-footer1" class="menu">
                                        
                                        <li class="menu-item"><a href="index.html">Home</a></li>
                                        <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 ">
                            <div class="widget">
                                <h4 class="footer-title iq-rmt-30">About Us</h4>
                                <div class="menu-footer2-container">
                                    <ul id="menu-footer2" class="menu">
                                     <li class="menu-item"><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item"><a href="about-us.html#sources">Our Sources</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 ">
                            <div class="widget">
                                <h4 class="footer-title iq-rmt-30">Resources</h4>
                                <div class="menu-footer1-container">
                                    <ul id="menu-footer1-1" class="menu">
                                        <li class="menu-item"><a href="about-us.html#team">Our Team</a></li>
                                        <li class="menu-item"><a href="about-us.html#sources">Our Sources</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <h4 class="footer-title iq-rmt-30">Contact Info</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="iq-contact text-white">
                                        <li>
                                           <a href="https://templates.iqonic.design/vizion/chatbot/+0123456789"><svg xmlns="http://www.w3.org/2000/svg" width="30px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                            </svg>+0123456789</a>
                                        </li>
                                        <li>
                                            <a href="mailto:support@vizion.com"><svg xmlns="http://www.w3.org/2000/svg" width="30px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>support@vizion.com</a>
                                        </li>
                                        <li>
                                            <a href="index.html#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                              </svg>1234 North Avenue Luke Lane, South Bend, IN 360001</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="pt-5">
                <!-- Address END -->
                <div class="pt-3 pb-3">
                    <div class="row justify-content-between">
                        <div class="col-auto mr-auto">
                            <span class="copyright">Copyright 2019 vizion All Rights Reserved.</span>
                        </div>
                        <div class="col-auto">
                            <div class="social-icone">
                                <ul class="d-flex">
                                    <li class="d-inline"><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="d-inline"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="d-inline"><a href="https://plus.google.com/"><i
                                            class="fab fa-google-plus"></i></a></li>
                                    <li class="d-inline"><a href="https://www.instagram.com/"><i
                                            class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
      <!--=================================
         Footer -->  
    
      <!--=================================
         Cookies -->
      <div id="cookie_div" class="align-items-center"> We use cookies to give you tailored experiences on our website.
         <a class="button grey text-right ml-3" href="index.html#" role="button" id="cookie">Accept </a>
      </div>
      <!--=================================
         Cookies -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Owl Carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Wow -->
      <script src="js/wow.min.js"></script>
      <!-- App Min -->
      <script src="js/app.min.js"></script>
      <!-- Circle -->
      <script src="js/circle.js"></script>
      <!-- Chatbot -->
      <script src="js/chatbot.js"></script>
      <!-- main -->
      <script src="js/main.js"></script>
      <!-- Custom -->
      <script src="js/custom.js"></script>
      <script>
                  $("body").on("click","#submitbtn",function(){
                        $("#submitbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
var userinput = $("#userinput").val();
$.ajax({
        url: 'scripts/rungpt.php',
        method:'POST',
        data: 'userinput='+userinput,
        success: function(data)
        {
           
            $("#chatcontainer").append(data);
            $("#submitbtn").html("Proceed");
        }
    });
});
      </script>
   </body>
</html>