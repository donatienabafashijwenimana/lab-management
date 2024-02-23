<?php
session_start();
include 'connect.php';
$select = $conn->query("select* from trainer ");

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
<tr><td><div class="header">view trainer</div></td></tr>
    <tr>
       
        <th>teacher name</th>
        <th>email</th>
        <th colspan="2" class="action">action</th>
    </tr>
    <?php foreach ($select as $data) {
         ?>
           <tr>
            <td><?=$data['tr_fname']." ".$data['tr_lname'];?></td>
            <td><?=$data['email'];?></td>
            <td><a href="#?id=<?=$data['tr_id'];?>" id="update">update</a>
                <a href="#?id=<?=$data['tr_id'];?>" id="delete">delete</a></td>
           </tr>

    <?php }?>
</table></center>
</body>
</html>