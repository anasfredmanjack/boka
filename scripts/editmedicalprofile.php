<?php
include('config/config.php');
 $dateofbirth = $_POST['dateofbirth'];
 $weight = $_POST['weight'];
 $allergies = $_POST['allergies'];
 $familypastmedicalhistory = $_POST['familypastmedicalhistory'];
 $pastmedicalhistory = $_POST['pastmedicalhistory'];
 $userid = $_POST['userid'];
 $bloodgroup = $_POST['bloodgroup'];
 $genotype = $_POST['genotype'];
 $homeaddress = $_POST['homeaddress'];

 $sql = mysqli_query($link,"UPDATE `user_tbl` SET `dateofbirth`='$dateofbirth',`weight`='$weight',`allergies`='$allergies',
 `familymedhistory`='$familypastmedicalhistory',`userpastmedhistory`='$pastmedicalhistory',`bloodgroup`='$bloodgroup', `genotype`='$genotype', `address`='$homeaddress' WHERE `id`='$userid'");
 if($sql){
    echo'<div class="alert alert-success"><center><small>Medical Profile successfully updated </small></center></div>';
 }

?>