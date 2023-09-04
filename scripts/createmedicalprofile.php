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

 $sql = mysqli_query($link,"UPDATE `user_tbl` SET `dateofbirth`='$dateofbirth',`weight`='$weight',`allergies`='$allergies',
 `familymedhistory`='$familypastmedicalhistory',`userpastmedhistory`='$pastmedicalhistory',`bloodgroup`='$bloodgroup', `genotype`='$genotype' WHERE `id`='$userid'");
 if($sql){
    echo'<div class="alert alert-success"><center><small>Medical Profile Created Please wait </small>logging you in<i class="fa fa-spinner fa-spin"></i> </center></div>';
 }

?>