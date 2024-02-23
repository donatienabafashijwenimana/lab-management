<?php
include 'connect.php';
include 'total.php';

$select = $conn->query("select computer_in.student_fname,computer_in.computername,computer_in.serialnumber,computer_in.class,computer_in.date,computer_present.computer_id as status from computer_in left join computer_present on computer_in.computer_id=computer_present.computer_id");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/computer.css">
</head>
<body>
    <div class="right-menu">
    <div class="top">
            <div class="left">
            <small>Borrowed</small>
            <select name="sort">
                <option value="name">name</option>
                <option value="type">type</option>
                <option value="class">class</option>
                <option value="owner">owner</option>
            </select>
            </div>
            <div class="right">
            <i class="bi bi-printer"></i>
            <div class="search">
            <input type="text" name="search" placeholder="Search...">
            <i class="bi bi-search"></i>
            </div>
            </div>
        </div>
        <div class="data">
        <table border="0">
        <thead>
            <td>student name</td>
            <td>class</td>
            <td>computer name</td>
            <td>serial number</td>
            <td>date</td>
            <td>status</td>

        </thead>
        <?php foreach($select as $data){
        ?>
        <tr>
            <td><?=$data['student_fname']?></td>
            <td><?=$data['class']?></td>
            <td><?=$data['computername']?></td>
            <td><?=$data['serialnumber']?></td>
            <td><?=$data['date']?></td>
            <td><?php if ($data['status']!=0) echo"present";else echo"not present";?> </td>
        </tr>
        <?php };?>
    </table>
        </div>
    </div>
</body>
    <script src="js/jquery.min.js"></script>
    <script src="js/table.js"></script>
</html>