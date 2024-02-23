<?php 
include 'connect.php';
$selectt1= $conn->query("select count(*) as t from computer_present where date=current_date()");
    $selectt2= $conn->query("select count(*) as t from computer_out where date=current_date()");
    $row=mysqli_fetch_array($selectt1);
    $row2=mysqli_fetch_array($selectt2);
function rec($conn){
    echo"<table border='1'>";
    $select1= $conn ->query("select*from computer_present where date=current_date()");
    $select2= $conn ->query("select*from computer_out where date=current_date() order by times desc");  
    foreach($select1 as $data){
    ?>
     <tr>
        <td><?="you record new computer of ".$data['computername']." to  ".$data['student_fname']." ";?></td>
     </tr>
    <?php
    }
    foreach($select2 as $data){
        ?>
         <tr>
            <td><?="you withdraw computer of ".$data['computername']." to  ".$data['student_fname']." ";?></td>
         </tr>
    
        <?php
        }

    echo "</table>";
}


