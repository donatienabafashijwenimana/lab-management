<?php
session_start();
if (!isset($_SESSION['role']) || !isset($_SESSION['id']) || $_SESSION['role']!=="dos") {
    header("location:login.php?!");
}
include 'connect.php';

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
    <div class="container">
        <div class="top">
            <div class="left">
              <img src="icon/img-title.png" id="img-title">
              <span>student management system </span>
            </div>
               <div class="user-top"><small><?=$_SESSION['username'];?>/<?=$_SESSION['role'];?></   small><img src="icon/dropdown.png" class="nav1">
               <div class="logout">log out <br>edit profile</div>
            </div>
        </div>
        <div class="container2">
            <div class="left-menu">
               <div class="dashboard">dashboard</div>
               <div class="addtrainer">add trainer</div>
               <div class="addtrainee">add trainee</div>
               <div class="assignmodule">add module</div>
               <div class="addclass">add class</div>
               <div class="viewmodule">view module</div>
               <div class="viewtrainee">view trainee</div>
               <div class="viewtrainer">view trainer</div>
               <div class="viewmarks">view marks</div>
            </div>
            <div class="right-menu" >
            
            </div>
        </div>
        
    </div>
</body>
<script src="js/jquery-3.6.3.js"></script>
<script src="js/javascript.js"></script>

</html>