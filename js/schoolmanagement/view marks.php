
<?php
session_start();
include 'connect.php';
$select = $conn->query("select module.module_code,module.module_name,result.result_id,result.marks,trainee.fname,trainee.lname from trainee right join result on trainee.t_id=result.t_id left join module on module.module_code=result.module_code");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dos style.css">
</head>
<body>
<center><table border="1">
    <tr><td><div class="header">view marks</div></td></tr>
    <tr>
        <th>module code</th>
        <th>module name</th>
        <th>class</th>
        <th>teacher name</th>
        <th colspan="2"  class="action">action</th>
    </tr>
    <?php foreach ($select as $data) {
         ?>
           <tr>
            <td><?=$data['fname'].$data['lname'];;?></td>
            <td><?=$data['module_code'];?></td>
            <td><?=$data['module_name'];?></td>
            
            <td><?=$data['marks'];?></td>
            <td><a href="#?id=<?=$data['result_id'];?>"id="update">update</a>
                <a href="#?id=<?=$data['result_id'];?>"id="delete">delete</a></td>
           </tr>

    <?php }?>
</table></center>
</body>
</html>