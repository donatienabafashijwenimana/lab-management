<?php
include 'connect.php';

if (isset($_REQUEST['key'])) {
    echo $_REQUEST['key'];
     $select = $conn->query("select*from computer_in where student_fname like'%{$_POST['key']}'");
}


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
<div class="search_container">
        <div class="result_container">
            <div class="top">
                <small>Result:</small>
            </div>
        </div>
   </div>
</body>
</html>