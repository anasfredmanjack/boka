<?php
include('config/config.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/Exception.php';
require 'PHPMailer-master/PHPMailer.php';
require 'PHPMailer-master/SMTP.php';
$conversationhistory = array();
$openAISecretKey = "";
//== ===    user prescription plan======= ======//
$prescriptiontitle = $_POST['prescriptiontitle'];
$drugnamearray = $_POST['drugnamearray'];
$tabletsnumberarray = $_POST['tabletsnumberarray'];
$morntakearray = $_POST['morntakearray'];
$afttakearray = $_POST['afttakearray'];
$evetakearray = $_POST['evetakearray'];
$prescriptiondocname = $_POST['prescriptiondocname'];
$prescriptiondoccontact = $_POST['prescriptiondoccontact'];
$prescriptiondocremark = $_POST['prescriptiondocremark'];
 $countdrugnamee = explode(',', $drugnamearray);
 $counttabletsnumber = explode(',', $tabletsnumberarray);
 $countmorntake = explode(',', $morntakearray);
 $countafttakearray = explode(',', $afttakearray);
 $countevetake = explode(',', $evetakearray);
 $prescriptionplan = '';
//== ===    user prescription plan ends here======= ======//


$userrid = $_POST['userrid'];

//== ===    sql to get start user email & medical profile  stored in database ======= ======//
$sqlfetpateientemail = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `id` ='$userrid'");
$fetpateientemail = mysqli_fetch_assoc($sqlfetpateientemail);
$patientemail = $fetpateientemail['emailaddress']; 
$dateofbirth = $fetch['dateofbirth'];
$weight = $fetch['weight'];
$allergies = $fetch['allergies']; 
$familypastmedicalhistory = $fetch['familypastmedicalhistory'];
$pastmedicalhistory = $fetch['pastmedicalhistory'];
$bloodgroup = $fetch['bloodgroup'];
$genotype = $fetch['genotype'];
$address = $fetch['address'];
//== ===    sql to get  user email & medical profile  stored in database ends here ======= ======//

//== ===    script to generate customised health plan based on doctors prescription and tips from  boka ai using chatgpt======= ======//
$dateofbirth = $fetch['dateofbirth'];
$weight = $fetch['weight'];
$allergies = $fetch['allergies']; 
$familypastmedicalhistory = $fetch['familypastmedicalhistory'];
$pastmedicalhistory = $fetch['pastmedicalhistory'];
$bloodgroup = $fetch['bloodgroup'];
$genotype = $fetch['genotype'];
$address = $fetch['address'];

 for($x =0; $x<count($countdrugnamee); $x++)
             {
                
                 
             
             $drugname =   $countdrugnamee[$x];
            $totalnumberoftabs = $counttabletsnumber[$x];
            $morntake = $countmorntake[$x];
            $afttake = $countafttakearray[$x];
            $evetake = $countevetake[$x];
            
            $prescriptionplan .="Drug Names".$drugname." Number of Tablets:".$totalnumberoftabs." Morning Doses per drug:".$morntake." Afternoon Doses per drug:".$afttake." Evening Doses per drug:".$evetake;
            
             }

$modifiedprompt = "
You are Boka, an AI medical assistant designed to assist in creating health plans and offering tips based on a user's medical profile. The user has recently had a medical consultation, and you have access to the following information:

- Date Of Birth: ".$dateofbirth."
- Past Medical History: ".$pastmedicalhistory."
- Family Medical History: ".$familypastmedicalhistory."
- Allergies: ".$allergies."
- Weight: ".$weight."
- Blood Group:  ".$bloodgroup."
- Genotype: ".$genotype."

Additionally, the doctor has provided the following comments and prescription plan:"."Doctor remark:".$_POST['prescriptiondocremark']."
Prescription Plan: Prescription Name:".$_POST['prescriptiontitle']."Prescription Doses: ".$prescriptionplan."

As Boka, generate a personalized health plan and tips for the user based on their medical profile and the doctor's recommendations. Include advice on medication adherence, dietary guidelines, physical activity, follow-up appointments, and stress management. Ensure that the response is in a friendly and professional tone. in your response don't mention  the user medical profile or any other information  or data that attached to the prescription that has been provided to you and also the response should properly formatted in html and properly styled
";



   
$search = $modifiedprompt;
$data = [
        "model" => "gpt-3.5-turbo",
        'messages' => [
            [
               "role" => "user",
               "content" => $search
           ]
        ],
        'temperature' => 0.1,
      ];
  
  

                    $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
              
            $headers = [];
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Authorization: Bearer '.$openAISecretKey;
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
              
            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
              
            curl_close($ch);
           
              
            $arr = json_decode($response,true);
            
            $finalres = $arr["choices"][0]["message"]["content"];
            $data .= $finalres;
             $data .= $data;
             $boakairesponse = $arr["choices"][0]["message"]["content"];
//== ===    script to generate customised health plan based on doctors prescription and tips from  boka ai using chatgpt ends here======= ======//







 
 date_default_timezone_set("Africa/lagos");
 $date = date("Y-m-d");
$time = date("h:i:sa");
$DateCreated = date('Y-m-d H:i:s'); 
 
 $storeprescrip = mysqli_query($link,"INSERT INTO `userprescription`(
 `prescriptiontitle`, `doctorname`, `doctorcontact`, `doctorremark`,
 `userid`, `datecreated`) VALUES ('$prescriptiontitle','$prescriptiondocname','$prescriptiondoccontact','$prescriptiondocremark','$userrid','$date.$time')");
    $last_id = mysqli_insert_id($link);

             for($x =0; $x<count($countdrugnamee); $x++)
             {
                
                 
             
             $drugname =   $countdrugnamee[$x];
            $totalnumberoftabs = $counttabletsnumber[$x];
            $morntake = $countmorntake[$x];
            $afttake = $countafttakearray[$x];
            $evetake = $countevetake[$x];
            
            $sql = mysqli_query($link,"INSERT INTO `prescriptiondetails`( 
                `prescriptionid`, `drugtitle`, `totaltablets`, `morntake`, `aftrnoontake`, `eveningtake`)
                VALUES ('$last_id','$drugname','$totalnumberoftabs','$morntake','$afttake','$evetake')");
              

             }
             
    if($sql)
            {
    $message = '
                    <!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:520px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.row-content {
				width: 100% !important;
			}

			.image_block img.big {
				width: auto !important;
			}

			.column .border {
				display: none;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>
<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1d1b1b;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" style="line-height:10px"><img src="https://studenthive.com.ng/boka/users/assets/images/logo-stiky.png" style="display: block; height: auto; border: 0; width: 200px; max-width: 100%;" width="200"/></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: Arial, sans-serif">
<div style="font-size: 12px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
<p style="margin: 0; font-size: 12px;">Hello User</p>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
<p style="margin: 0; font-size: 12px;">Congratulations on uploading your prescription plan</p>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
<p style="margin: 0; font-size: 12px;">'.$boakairesponse.'</p>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>

</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-10" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1d1b1b;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td>
<div style="font-family: sans-serif">
<div style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
<p style="margin: 0; font-size: 12px; text-align: center;"><span style="color:#ffffff;">In our emails .We will never ask for your account login or password</span></p>
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-11" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1d1b1b;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" style="line-height:10px"><img src="https://studenthive.com.ng/boka/users/assets/images/logo-stiky.png" style="display: block; height: auto; border: 0; width: 200px; max-width: 100%;" width="200"/></div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-12" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
<tbody>
<tr>
<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="icons_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="vertical-align: middle; text-align: center;">
<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
<!--<![endif]-->
 
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>
                    ';


                    $to = $patientemail;
                    $nameto = 'Hello User';
                    $subject = 'Boka  AI Personalized Health Plan and Tips';
                    $email = 'mailus@studenthive.com.ng';
                    $nameto = 'Boka User';
                    
                       
                       $mail = new PHPMailer(true);
                       
                       try {
                              //Server settings
                           $mail->SMTPDebug = 0;                      //Enable verbose debug output
                           $mail->isSMTP();                                            //Send using SMTP
                           $mail->Host       = 'studenthive.com.ng';                     //Set the SMTP server to send through
                           $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                           $mail->Username   = 'mailus@studenthive.com.ng';                     //SMTP username
                           $mail->Password   = "Afm16772.";                             //SMTP password
                           $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                           $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                       
                           //Recipients
                           $mail->setFrom($email,$name);
                           $mail->Sender = $email;
                           $mail->addAddress($to, $nameto);     //Add a recipient
                           $mail->addAddress($to);               //Name is optional
                           $mail->addReplyTo($email, $nameto);
                           $mail->addCC($to);
                           $mail->addBCC($to);
                           
                           
                       
                          
                           //Content
                                                           //Set email format to HTML
                           $mail->Subject = $subject;
                            $mail->Body = $message;
                           $mail->AltBody = $message;
                       $mail->IsHTML(true);  
                           $mail->send();
                        echo'
                        <div class="alert alert-success" role="alert"><small><center>Prescription successfully uploaded</center></small></div>
                        ';
                       } catch (Exception $e) {
                       
                           echo $e.'     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Message could not be sent.  .
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                       </div>';
                       }

                

}



?>