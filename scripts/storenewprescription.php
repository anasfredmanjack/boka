<?php
include('config/config.php');
$prescriptiontitle = $_POST['prescriptiontitle'];
$userrid = $_POST['userrid'];
$drugnamearray = $_POST['drugnamearray'];
$tabletsnumberarray = $_POST['tabletsnumberarray'];
$morntakearray = $_POST['morntakearray'];
$afttakearray = $_POST['afttakearray'];
$evetakearray = $_POST['evetakearray'];

 $countdrugnamee = explode(',', $drugnamearray);
 $counttabletsnumber = explode(',', $tabletsnumberarray);
 $countmorntake = explode(',', $morntakearray);
 $countafttakearray = explode(',', $afttakearray);
 $countevetake = explode(',', $evetakearray);
 

             for($x =0; $x<count($countdrugnamee); $x++)
             {
                
                 
             
             $drugname =   $countdrugnamee[$x];

             $sqlname = mysqli_query($link,"SELECT * FROM `tbl_products` WHERE `product_id`='$newproduct'");
             $fetchname = mysqli_fetch_assoc($sqlname);

             $subtotal = $fetchname['product_price'] * $newquantity;
             $totalproductamount += $subtotal;

             }



?>