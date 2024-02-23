<?php
include 'connect.php';
include 'total.php';
include 'script.php';

include 'recent.php';

insert($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/lab.css">
    <title>LAB MANAGEMENT SYSTEM</title>
</head>
<body>
    <header>
        <div class="left-header">
            <h1>LAB MANAGEMENT SYSTEM</h1>
        </div>
        <div class="right-header">
           
            <div class="recent">
                <i class="bi bi-clock-history"></i>
                <samp><?=$row['t']+$row2['t'];?></samp>
            </div>
            <!-- <div class="notification">
                <i class="bi bi-bell"></i>
                <samp>0</samp>
            </div> -->
            <div class="user">
                <i class="bi bi-person"></i>
                <samp>Administrator</samp>
                <i class="bi bi-caret-down" id="get"></i>
            </div>
        </div>
    </header>
    <!-- <div class="notification-content">
        <div class="top">
            <samp>Notification</samp>
            <i class="bi bi-caret-down"></i>
        </div>
    </div> -->
    <div class="recent-content">
        <div class="top">
            <samp>Recent Activity</samp>
            <i class="bi bi-caret-down"></i>
           
        </div>
        <div class="resentcontant"> <?php rec($conn);?></div>
    </div>
    <div class="log">
        <div class="set">
            <i class="bi bi-person-circle"></i>
            <small>Profile</small>
        </div>
        <div class="set">
            <i class="bi bi-check"></i>  
            <small>Setting</small> 
        </div>
        <div class="set">
            <i class="bi bi-file-arrow-down"></i>
            <small>Logout</small>
        </div>
    </div>
    
    <menu>
       
        <div class="left-menu">

            <div class="item active" id="Dashboard">
                <i class="bi bi-speedometer2"></i>
                <small>Dashboard</small>
            </div>
            <!-- <div class="item">
                <i class="bi bi-cloud-minus"></i>
                <small>Transaction</small>
            </div> -->
            <div class="item" id="allitem">
                <i class="bi bi-file-arrow-down"></i>
                <small>All in Computer(<?=$totalin['total'];?>)</small>
            </div>
            <div class="item" id="presentitem">
                <i class="bi bi-file-arrow-down"></i>
                <small>Present Computer(<?=$totalpresent['total']?>)</small>
            </div>
            <div class="item" id="outitem">
                <i class="bi bi-check-circle"></i>
                <small>Computer(<?=$totalout['total']?>)</small>
            </div>
            <div class="item" id="getNewDevice">
                <i class="bi bi-plus-circle"></i>
                <small>New</small>
            </div>
            <div class="item">
                <i class="bi bi-house"></i>
                <small>Lab Room</small>
            </div>
            <div class="item">
                
                <i class="bi bi-person-circle"></i>
                <small>User</small>
            </div>
            <!-- <div class="item">
                <i class="bi bi-clock-history"></i>
                <small>History</small>
            </div> -->
        </div>
        
        <div class="right-menu">

        </div>
        
    </menu>
    
</body>

<script src="js/jquery.min.js"></script>
<script src="js/lab.js"></script>
<script src="js/javascript.js"></script>

</html>