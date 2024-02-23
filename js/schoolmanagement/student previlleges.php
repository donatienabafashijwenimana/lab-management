<?php
session_start();
if (!isset($_SESSION['role']) || !isset($_SESSION['id']) || $_SESSION['role']!=="STUDENT") {
    header("location:login.php?!");
}
include 'connect.php';


$select=$conn->query("select class.class_name, trainee.fname,trainee.lname,module.module_code,module.module_name,result.marks,result.overmarks from class right join trainee on class.class_id=trainee.class_id left join module on class.class_id=module.class_id left join result on trainee.t_id = result.t_id  and module.module_code=result.module_code where trainee.t_id='{$_SESSION['id']}'");

$sum = $conn->query("select sum(marks),sum(overmarks) from result where t_id='{$_SESSION['id']}'");
$data = mysqli_fetch_array($sum);

$percentage = $data['sum(marks)']*100/$data['sum(overmarks)'];
$row = mysqli_fetch_array($select);
?>

<table border="1">
    <tr>
        <th>names:</th><th colspan="5"><?=$row['fname']." ".$row['lname'];?></th></tr>
        <tr><th>class:</th><th colspan="4"><?=$row['class_name'];?></th></tr>
    <tr>
       <th colspan="2">module</th>
       <th colspan="2">result</th>

    </tr>
    <tr>
        <td>module code</td>
        <td>module name</td>
        <td>marks</td>
        <td>over marks</td>
    </tr>
<?php 
foreach ($select as $row) {
    ?><tr>
        <td><?=$row['module_code']?></td>
        <td><?=$row['module_name'];?></td>
        <td><?php if($row['marks']=="") echo "--";else echo $row['marks'];?></td>
        <td><?php if($row['overmarks']=="") echo "--";else echo $row['overmarks'];?></td>
    </tr>
    
    <?php
}
?>
   <tr>
    <th>total</th>
    <th colspan="5"><?=$data['sum(marks)']."/".$data['sum(overmarks)'];?></th>
    </tr>
    <tr>
        <th>percentage</th>
        <th colspan="5"><?=$percentage."%";?></th>
    </tr>
</table>