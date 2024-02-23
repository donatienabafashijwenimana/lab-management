<?php
session_start();
include 'connect.php';
$select = $conn->query("select module.module_code,module.module_name,class.class_name,trainer.tr_fname,trainer.tr_lname from trainer right join module on trainer.tr_id=module.teacherid left join class on class.class_id=module.class_id ");

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
<tr><td><div class="header">view all module</div></td></tr>
    <tr>
        <th>module code</th>
        <th>module name</th>
        <th>class</th>
        <th>teacher name</th>
        <th colspan="2" class="action">action</th>
    </tr>
    <?php foreach ($select as $data) {
         ?>
           <tr>
            <td><?=$data['module_code'];?></td>
            <td><?=$data['module_name'];?></td>
            <td><?=$data['class_name'];?></td>
            <td><?=$data['tr_fname']." ".$data['tr_lname'];?></td>
            <td><a href="#?id=<?=$data['module_code'];?>"id="update">update</a>
                <a href="#?id=<?=$data['module_code'];?>"id="delete">delete</a></td>
           </tr>

    <?php }?>
</table></center>
</body>
</html>