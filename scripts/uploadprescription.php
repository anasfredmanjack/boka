<?php
include('config/config.php');
$drugtitle = $_POST['drugtitle'];
$presdetails = $_POST['presdetails'];
$duration = $_POST['duration'];
$morningpres = $_POST['morningpres'];
$afternoonpres = $_POST['afternoonpres'];
$eveningpres = $_POST['eveningpres'];
$userid = $_POST['userid'];


$sql = mysqli_query($link,"INSERT INTO `userprescription`( `drugtitle`, `presdetails`, 
`duration`, `morningpres`, `afternoonpres`, `eveningpres`, `userid`) VALUES ('$drugtitle','$presdetails','$duration','$morningpres','$afternoonpres','$eveningpres','$userid')");
if($sql)
{
 echo '<div class="alert alert-success"><center><small>Prescription added </small>Reloading page<center><i class="fa fa-spinner fa-spin"></i> </div>';   
}
else

{
    
}



?>