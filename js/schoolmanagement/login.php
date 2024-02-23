<?php
session_start();
include 'connect.php';
if (isset($_POST['login'])) {
    

$select = $conn->query("select*from users where name='{$_POST['username']}' and password='{$_POST['password']}' and role='{$_POST['role']}'");
if (mysqli_num_rows($select)>0) {
    $row = mysqli_fetch_array($select);
    $_SESSION['id']=$row['id'];
    $_SESSION['username']=$row['name'];
    $_SESSION['role']=$row['role'];
     if ($row['role']=='dos') {
        header("location:dos previleges.php");
     }elseif ($row['role']=="TRAINER") {
        header("location:trainer previleges.php");
     }elseif($row['role']=="STUDENT") {
        header("location:student previlleges.php");
     }
}else {
    echo"login failed";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="#" method="post">
    <label for="">username</label><br>
    <input type="text" name="username" id=""><br>
    <label for="">role</label><select name="role">
        <option value="dos">dos</option>
        <option value="TRAINER">trainer</option>
        <option value="STUDENT">student</option>
    </select><br>
    <label for="">password</label><br>
    <input type="password" name="password" id=""><br>
    <input type="submit" name="login" value="login">
   </form> 
</body>
</html>