<?php
 ob_start();
 session_start();
if(!isset($_SESSION['meduserid']))
{
header("Location: login.php");
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
   </head>
   <body>
      <!-- loading -->
      <div id="loading">
         <div id="loading-center">
            <img src="images/loader.gif" alt="loder">
         </div>
      </div>
      <!-- loading End -->
      <!--=================================
         MAIN CONTENT -->
      <div class="main-content">
         <!--=================================
            Error -->
         <div class="error-box">
            <div class="container">
            <div class="row justify-content-md-center">
                  <div class="col-lg-8 col-sm-12 text-center">
                     <div class="title-box">
                        <h2 class="">Create Your <span>Medical</span>Profile</h2>
                     </div>
                  </div>
               </div>
           
               <div class="row justify-content-md-center">
               <div class="col-12" style="margin:10px;" id="medprofileresponse"></div>
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label class="mb-0" for="dateofbirth">Date of Birth</label>
                            <input
                            type="date"
                            class="form-control"
                            id="dateofbirth"
                            placeholder="Date of Birth"
                            />
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="form-group" >
                            <label class="mb-0" for="weight">Weight</label>
                            <input
                            type="number"
                            class="form-control"
                            id="weight"
                            placeholder="Weight"
                            />
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" style="margin-top:2px;">
                    <form>
                        <div class="form-group" >
                            <label class="mb-0" for="bloodgroup">Blood group</label>
                            <input
                            type="text"
                            class="form-control"
                            id="bloodgroup"
                            placeholder="Blood group"
                            />
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" style="margin-top:10px;">
                    <form>
                        <div class="form-group">
                            <label class="mb-0" for="genotype">Genotype</label>
                            <input
                            type="text"
                            class="form-control"
                            id="genotype"
                            placeholder="Genotype"
                            />
                        </div>
                    </form>
                </div>
                <div class="col-lg-12" style="margin-top:10px;">
                    <form>
                        <div class="form-group">
                            <label class="mb-0" for="allergies">Allergies  <small>if you don't have enter none</small></label>
                          
                            <input type="textarea" class="form-control form-control-lg" 
                            id="allergies" placeholder="Enter your Allergies seperated by comma.">
                        </div>
                    </form>
                </div>
                <div class="col-lg-12" style="margin-top:10px;">
                    <form>
                        <div class="form-group">
                            <label class="mb-0" for="pastmedicalhistory">Past Medical History <small>if you don't have enter none</small></label>
                          
                            <input type="textarea" class="form-control form-control-lg" 
                            id="pastmedicalhistory" placeholder="Enter your Past Medical History.">
                        </div>
                    </form>
                </div>
                <div class="col-lg-12" style="margin-top:10px;">
                    <form>
                        <div class="form-group">
                            <label class="mb-0" for="familypastmedicalhistory">Enter Your Family Past Medical History  <small>if you dont't have enter none</small></label>
                          
                            <input type="textarea" class="form-control form-control-lg" 
                            id="familypastmedicalhistory" placeholder="Enter your Family Past Medical History.">
                        </div>
                    </form>
                </div>
               <div class="col-12">
                <center>
                <button type="button" class="button mt-2 mb-2 w-90" id="submitbtn">
                    Create Profile
                  </button>
                  <center>
</div>
</div>
               
         </div>
         </div>
         <!--=================================
            Error -->  
      </div>
      <!--=================================
         MAIN CONTENT -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Owl Carousel -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Wow -->
      <script src="js/wow.min.js"></script>
      <!-- main -->
      <script src="js/main.js"></script>
      <!-- Custom -->
      <script src="js/custom.js"></script>
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

            if(dateofbirth == '' || weight == '' || bloodgroup == '' ||genotype == '' || allergies == '' || familypastmedicalhistory == '' || pastmedicalhistory == '')
            {
                $("#medprofileresponse").html('<div class="alert alert-warning" role="alert"><center><i class="fa fa-warning"></i>  Fill all fields to proceed!!</center></div>');
                $("#submitbtn").html("Register");
                $("html, #medprofileresponse").animate({ scrollTop: 0 }, "slow"); 
            }
            else
            {

                $.ajax({
                                type : 'post',
                                url : "scripts/createmedicalprofile.php", //Here you will fetch records 
                                data:  'dateofbirth='+dateofbirth+'&weight='+weight+'&genotype='+genotype+'&bloodgroup='+bloodgroup+'&allergies='+allergies+'&familypastmedicalhistory='+familypastmedicalhistory+'&pastmedicalhistory='+pastmedicalhistory+'&userid='+userid,
                                success : function(data)
                                {
                                  $("#medprofileresponse").html(data);	
                                
									

                                            	$("html, #medprofileresponse").animate({ scrollTop: 0 }, "slow"); 
										setTimeout(() => {
											window.location.href = "users/dashboard.php";
										}, 1000);
									
                                }
                                 
                            });

            }

        });
    </script>
   </body>
</html>