<?php
include 'connect.php';

$select = $conn->query("select*from computer_present");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/computer.css">
    <!-- <a href="https://www.freepik.com/icon/edit_1159633#fromView=search&term=edit&track=ais&page=1&position=56&uuid=6415ecaf-3383-48d1-ae07-17754eee7e48">Icon by Kiranshastry</a> -->
    <title>LAB MANAGEMENT SYSTEM</title>
    
</head>

<body>
    <div class="right-menu">
        
    <div class="top">
            <div class="left">
            <small>Present</small>
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
                <table border="1">
                <thead>
                    <td>student name</td>
                    <td>class</td>
                    <td>computer name</td>
                    <td>serial number</td>
                    <td>date</td>
                    <td colspan="3">action</td>

                </thead>
                <?php foreach($select as $data){
                ?>
                <tr>
                    <td><?=$data['student_fname']?></td>
                    <td><?=$data['class']?></td>
                    <td><?=$data['computername']?></td>
                    <td><?=$data['serialnumber']?></td>
                    <td><?=$data['date']?></td>
                    <td><a href="return.php?c_id_out=<?=$data['computer_id']?>" id="withdraw"><button>withdraw</button></a>
                    <a id="edit"><img src="image/edit.png" alt=""></a>
                    <a href="delete.php?id=<?=$data['computer_id']?>"><img src="image/delete.png" alt=""></a></td>
                </tr>
                <?php };?>
            </table>
          </div>
        </div>
    </body>
    <script src="js/jquery.min.js"></script>
    <script src="js/table.js"></script>
</html>