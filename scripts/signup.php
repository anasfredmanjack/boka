<?php
include('config/config.php');
 
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
 



date_default_timezone_set("Africa/Lagos");
    $DateCreated = date('Y-m-d H:i:s'); 

$sqlcheckemail = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `emailaddress`='$email'");
$countemail = mysqli_num_rows($sqlcheckemail);

if($countemail > 0)
{
    echo'1';
   
}
else
{

  
              
                    $sql = mysqli_query($link,"INSERT IGNORE INTO `user_tbl`( `name`, `address`,
                     `emailaddress`, `password`) VALUES ('$name','$address','$email','$password')");
                     $usercreatedid = mysqli_insert_id($link);
                     session_start();
                     $_SESSION['meduserid'] = $usercreatedid; 
                    echo'2';
                
             

}




?>