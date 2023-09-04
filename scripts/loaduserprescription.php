<?php
    include('config/config.php');
    $userid = $_POST['userid'];
    
    $sql = mysqli_query($link,"SELECT * FROM `userprescription` WHERE `userid`='$userid' ORDER BY `drugtitle` ASC ");
    $count = mysqli_num_assoc($sql);
    
    if($count > 0)
    {
                    $num = 0;
            $fetch = mysqli_fetch_assoc($sql);
            do{
                $num++;
                echo'<tr>';
                echo'<td>'.$num.'</td>';
                echo'<td>'.$fetch['drugtitle'].'</td>';
                echo'<td>'.$fetch['presdetails'].'</td>';
                echo'<td>'.$fetch['duration'].'</td>';
                echo'<td>'.$fetch['morningpres'].'</td>';
                echo'<td>'.$fetch['afternoonpres'].'</td>';
                echo'<td>'.$fetch['eveningpres'].'</td>';
                echo'</tr>';
            }while($fetch = mysqli_fetch_assoc($sql));
        
    }
    else
    {
            echo'
    <th colspan="8">
        <div class="col-md-12>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <center>
        <strong>Oops!</strong> No Prescription Available
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </center>
        </div>
        </div>
    </th>
    ';
        
    }


?>