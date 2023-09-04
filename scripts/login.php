<?php
include('config/config.php');

$email = $_POST['useremail'];

$password = $_POST['userpassword'];


    $sql = mysqli_query($link,"SELECT * FROM `user_tbl` WHERE `emailaddress` ='$email' AND `password`='$password'");
    $count = mysqli_num_rows($sql);

    if($count > 0)
    {
        $fetch = mysqli_fetch_assoc($sql);
        $userrid = $fetch['id'];
        session_start();
        $usercreatedid = $userrid;
        $_SESSION['meduserid'] = $usercreatedid; 
        echo'1';
    
    }
    else
    {
        echo'2';
    
    }







?>