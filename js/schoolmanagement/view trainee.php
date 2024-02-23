<?php
session_start();
include 'connect.php';
$select = $conn->query("select trainee.t_id, trainee.fname,trainee.lname,class.class_name from class right join trainee on class.class_id=trainee.class_id ");

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
<tr><td><div class="header">view all student</div></td></tr>
    <tr>
        <th>trainee name</th>
        <th>class</th>
        <th colspan="2" class="action">action</th>
    </tr>
    <?php foreach ($select as $data) {
         ?>
           <tr>
            <td><?=$data['fname']." ".$data['lname'];?></td>
            <td><?=$data['class_name'];?></td>
            <td><a href="#?id=<?=$data['t_id'];?>"id="update">update</a>
                <a href="#?id=<?=$data['t_id'];?>"id="delete">delete</a></td>
           </tr>

    <?php }?>
</table></center>
</body>
</html>