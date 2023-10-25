<?php
include('config/config.php');
$userrid = $_POST['userrid'];

$sql = mysqli_query($link,"SELECT * FROM `userprescription` WHERE `userid`='$userrid' ORDER BY prescriptiontitle ASC");
$count = mysqli_num_rows($sql);

if($count > 0)
{
    $fetch = mysqli_fetch_assoc($sql);
    $prescribid = $fetch['id'];
    $sqlgetdrugs = mysqli_query($link,"SELECT * FROM `prescriptiondetails` WHERE `prescriptionid`='$prescribid'");
    $countdrugs = mysqli_num_rows($sqlgetdrugs);
    do{
        echo'
        <tr>
<td>'.$fetch['prescriptiontitle'].'</td>
<td>'.$fetch['datecreated'].'</td>
<td>'.number_format($countdrugs).'</td>
</tr>
        ';
        
    }while($fetch = mysqli_fetch_assoc($sql));
}
else
{
    
}

 
?>