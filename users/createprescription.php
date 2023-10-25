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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boka - Bridging medical gaps</title>
          <!-- Favicon -->
      <link rel="shortcut icon" href="../images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .boldtext {
            font-family: 'Noto Sans', sans-serif;
        }
    </style>
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 48
        }
        </style>
        
  </head>
  <body>
    <div class="container">
         <!--back button-->
        <div class="row" style="margin-top:50px;">
            <div class="col-2">
                 <a href="prescription.php" style="text-decoration:none;">
                     <div class="card-hover-shadow card">
                        <div class="card-body">
                            <center>
                                <i class="fa fa-arrow-left" style="color:#3d9970; font-size:30px;"></i>
                            </center>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-10">
                <center>        
                <h5 style="color:#3d9970;"><i class="fa fa-plus"></i> Add Prescription</h5>
                </center>    
            </div>
        </div>
        <!--end back button-->
        
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
                                                                                                <label class="mb-0" for="exampleInputName">Doctor's Name <small>e.g Dr Robinson</small></label>
                                                                                                <input type="text" class="form-control"   id="prescriptiondocname" placeholder="Prescription Title"  />
                                                                                            </div> 
                                                                                         </div>
                                                                                             <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label class="mb-0" for="exampleInputName">Doctor's Contact Number <small></small></label>
                                                                                                <input type="text" class="form-control"   id="prescriptiondoccontact" placeholder="Prescription Title"  />
                                                                                            </div> 
                                                                                         </div>
                                                                                             <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label class="mb-0" for="exampleInputName">Doctor's Remark/Comment <small>e.g Dr Robinson</small></label>
                                                                                                <textarea  class="form-control"  id="prescriptiondocremark"></textarea>
                                                                                            </div> 
                                                                                         </div>
                                                                                               <div class="col-12">
                                                                                            <div class="form-group">
                                                                                                <label class="mb-0" for="exampleInputName">Prescription EndDate<small></small></label>
                                                                                                   <input type="date" class="form-control"   id="prescriptionenddate" placeholder="Prescription Title"  />
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
                                                                                        
                                                                                        
                                                                                    
                                                                                             
                                                                                              <div class="row drug"> 
                                                                                             
                                                                                            <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                     <label class="mb-0" for="exampleInputName"><small>Drug Name</small></label>
                                                                                                    <input type="text" class="form-control drugname"  placeholder="Drug Name"  />
                                                                                                </div> 
                                                                                            </div>
                                                                                            
                                                                                           
                                                                                                  
                                                                                               <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                     <label class="mb-0" for="exampleInputName"><small>Number of Tablets</small></label>
                                                                                                    <input type="number" class="form-control tabletsnumber"   value="0"  placeholder="No of Tablets"  />
                                                                                                </div> 
                                                                                            </div>
                                                                                            
                                                                                               <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                     <label class="mb-0" for="exampleInputName"><small>Enter morning intake (no of times to be taken in the morning Enter Unavailable if there's none)</small></label>
                                                                                                    <input type="number" class="form-control totaldosage morntake"   placeholder="Morning intake"  value="0" />
                                                                                                </div> 
                                                                                            </div>
                                                                                            
                                                                                                <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                     <label class="mb-0" for="exampleInputName"><small>Enter afternoon intake (no of times to be taken in the afternoon Enter Unavailable if there's none)</small></label>
                                                                                                    <input type="number" class="form-control totaldosage afttake"   value="0"  placeholder="Afternoon intake"  />
                                                                                                </div> 
                                                                                            </div>
                                                                                            
                                                                                                <div class="col-6">
                                                                                                <div class="form-group">
                                                                                                     <label class="mb-0" for="exampleInputName"><small>Enter evening intake (no of times to be taken in the evening Enter Unavailable if there's none)</small></label>
                                                                                                    <input type="number" class="form-control totaldosage evetake"   value="0"  placeholder="Evening intake"  />
                                                                                                </div> 
                                                                                            </div>
                                                                                        </div>
                                                                                            
                                                                                      
                                                                                        
                                                                                     </div>
                                                                                </div>
                                                                                
                                                                                <div id="addmoerdrugfield" style="margin:5px;"></div>
                                                                                
                                                                                <div class="row">
                                                                                    <div class="col-9"></div>
                                                                                           <div class="col-3">
                                                                                                        <button type="button" id="addrgbtn" class="btn btn-primary"><i class="fa fa-plus"></i> Add another Drug</button>
                                                                                         </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <center>
                                                                                             <button type="button" id="uploadpresbtn" class="btn btn-primary"><i class="fa fa-plus"></i> upload prescription</button>
                                                                                        </center>
                                                                                    </div>
                                                                                </div>
                                                                        
                                                                
                                                                
                                                            </div>
                                                        </div>
      
         
   

       
 

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script>
     var prescriptionsummary ='';
     
 $("body").on("click","#addrgbtn", function(){
    
    $("#addmoerdrugfield").append(`<div class="card" style="margin:5px; box-shadow: 1px 1px 1px 1px #3d9970;"> <div class="card-body"> 
   
    <div class="row drug">
    <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Drug Name</small></label>
                  <input type="text" class="form-control drugname"  placeholder="Drug Name"  />
              </div> 
          </div>
           
           
             <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Number of Tablets</small></label>
                  <input type="text" class="form-control tabletsnumber"  placeholder="No of Tablets"  />
              </div> 
          </div>
          
             <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Enter morning intake (no of times to be taken in the morning Enter Unavailable if there's none)</small></label>
                  <input type="number"  class="form-control totaldosage morntake"    value="0"  placeholder="Morning intake"  />
              </div> 
          </div>
          
              <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Enter afternoon intake (no of times to be taken in the afternoon Enter Unavailable if there's none)</small></label>
                  <input type="number" class="form-control totaldosage afttake"   value="0"  placeholder="Afternoon intake"  />
              </div> 
          </div>
          
              <div class="col-6">
              <div class="form-group">
                   <label class="mb-0" for="exampleInputName"><small>Enter evening intake (no of times to be taken in the evening Enter Unavailable if there's none)</small></label>
                  <input type="number" class="form-control totaldosage evetake"   placeholder="Evening intake"   value="0"  />
              </div> 
          </div>
          
          
          
      </div>
      
   </div>
</div>`);
    
});

 $("body").on("click","#uploadpresbtn",function(){
        $("#uploadpresbtn").html('<i style="color:white;" class="fa fa-spinner fa-spin"></i>');
        var prescriptiontitle = $("#prescriptiontitle").val();
        var prescriptiondocname = $("#prescriptiondocname").val();
        var prescriptiondoccontact = $("#prescriptiondoccontact").val();
        var prescriptiondocremark = $("#prescriptiondocremark").val();
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
        
        
                    
         for(var x =0; x < drugnamearray.length; x++)
             {
                 var drugnamee = drugnamearray[x];
                 var morningDosage = morntakearray[x];
                 var afternoonDosage = afttakearray[x];
                 var eveningDosage = evetakearray[x];
                 prescriptionsummary += `Take  ${drugnamee} ${morningDosage} in the morning, ${afternoonDosage} in the afternoon, ${eveningDosage} in the evening. Get Well soon okay from BOKA AI`;
               
                 
             }
        
      
    handleAuthClick();
                            
        
            $.ajax({
                    url: '../scripts/storenewprescription.php',
                    method:'POST',
                    data: 'prescriptiontitle='+prescriptiontitle+'&userrid='+userrid+'&drugnamearray='+drugnamearray+'&tabletsnumberarray='+tabletsnumberarray+'&morntakearray='+morntakearray+'&afttakearray='+afttakearray+'&evetakearray='+evetakearray+'&prescriptiondocname='+prescriptiondocname+'&prescriptiondoccontact='+prescriptiondoccontact+'&prescriptiondocremark='+prescriptiondocremark,
                    success: function(data)
                    {
                   
                        $("#prescribeaddresp").html(data);
                                              
                        
                              $("#uploadpresbtn").html('<i class="fas fa-plus"></i> upload prescription');
                                                   $("html, #prescribeaddresp").animate({ scrollTop: 200 }, "slow"); 
                                             setTimeout(() => {
                                              window.location.href = "prescription.php";
                                             }, 2000);
                    }
                });
        
        
    });
</script>

    <script type="text/javascript">
// returns "2021-03-15T19:22:36.245Z"
      /* exported gapiLoaded */
      /* exported gisLoaded */
      /* exported handleAuthClick */
      /* exported handleSignoutClick */

      // TODO(developer): Set to client ID and API key from the Developer Console
      const CLIENT_ID = '562119';
      const API_KEY = 'AIz;

      // Discovery doc URL for APIs used by the quickstart
      const DISCOVERY_DOC = 'https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest';

      // Authorization scopes required by the API; multiple scopes can be
      // included, separated by spaces.
      const SCOPES = 'https://www.googleapis.com/auth/calendar.readonly';

      let tokenClient;
      let gapiInited = false;
      let gisInited = false;


      /**
       * Callback after api.js is loaded.
       */
      function gapiLoaded() {
        gapi.load('client', initializeGapiClient);
      }

      /**
       * Callback after the API client is loaded. Loads the
       * discovery doc to initialize the API.
       */
      async function initializeGapiClient() {
        await gapi.client.init({
          apiKey: API_KEY,
          discoveryDocs: [DISCOVERY_DOC],
        });
        gapiInited = true;
        maybeEnableButtons();
      }

      /**
       * Callback after Google Identity Services are loaded.
       */
      function gisLoaded() {
        tokenClient = google.accounts.oauth2.initTokenClient({
          client_id: CLIENT_ID,
          scope: SCOPES,
          callback: '', // defined later
        });
        gisInited = true;
        maybeEnableButtons();
      }

      /**
       * Enables user interaction after all libraries are loaded.
       */
      function maybeEnableButtons() {
        if (gapiInited && gisInited) {
        }
      }

      /**
       *  Sign in the user upon button click.
       */
      function handleAuthClick() {
        tokenClient.callback = async (resp) => {
          if (resp.error !== undefined) {
            throw (resp);
          }
            
          await listUpcomingEvents();
        };

        if (gapi.client.getToken() === null) {
          // Prompt the user to select a Google Account and ask for consent to share their data
          // when establishing a new session.
          tokenClient.requestAccessToken({prompt: 'consent'});
        } else {
          // Skip display of account chooser and consent dialog for an existing session.
          tokenClient.requestAccessToken({prompt: ''});
        }
      }

      /**
       *  Sign out the user upon button click.
       */
      function handleSignoutClick() {
        const token = gapi.client.getToken();
        if (token !== null) {
          google.accounts.oauth2.revoke(token.access_token);
          gapi.client.setToken('');
        }
      }

      /**
       * Print the summary and start datetime/date of the next ten events in
       * the authorized user's calendar. If no events are found an
       * appropriate message is printed.
       */
      
      async function listUpcomingEvents() {
          ///get the current date and the user default timezone in icana format//
          const now = new Date();
        const isoString = now.toISOString();
          var icanacurrenttimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
          
          
         
             const prescenddate = document.getElementById('prescriptionenddate').value;
              const newpresdatecon =  new Date(prescenddate);
                  const prescenddateiso = newpresdatecon.toISOString();
                  
        
                  
         
       const event = {
  'summary': 'Prescription reminder from BOKA your AI Medical Assistant',
  'description': prescriptionsummary,
  'start': {
    'dateTime': isoString,
    'timeZone': icanacurrenttimezone
  },
  'end': {
    'dateTime': prescenddateiso,
    'timeZone': icanacurrenttimezone
  },
  'recurrence': [
    'RRULE:FREQ=DAILY;COUNT=3'
  ],
  'reminders': {
    'useDefault': false,
    'overrides': [
      {'method': 'email', 'minutes': 24 * 60},
      {'method': 'popup', 'minutes': 20}
    ]
  }
};

const request = gapi.client.calendar.events.insert({
  'calendarId': 'primary',
  'resource': event
});

request.execute(function(event) {
  console.log('Event created: ' + event.htmlLink);
});
    
      }
    </script>
    <script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
    <script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>
  </body>
</html>