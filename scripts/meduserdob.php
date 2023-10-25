<?php
include('config/config.php');
$userid = $_POST['userid'];

$sqlfetchuserdob = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `id`='$userid'");
$fetchdob = mysqli_fetch_assoc($sqlfetchuserdob);

echo '<center><small>'.$fetchdob['dateofbirth'].'</small></center>';
 
 
 ?>