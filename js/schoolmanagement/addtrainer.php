

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/record.css">
</head>
<body>
<?php
include 'connect.php';
if (isset($_POST['recordtrainer'])) {
 echo $_POST['t_fname'].$_POST['t_lname']." ";

$insert= $conn->query("insert into trainer values(null,'{$_POST['t_fname']}','{$_POST['t_lname']}','{$_POST['t_email']}')");
if ($insert == true) {
    echo "inserted";
}else{
    echo"no";
}
}
?>
<div class="right-menu" >
    <form action="insert.php" method="post">
    <label for="">teacher first name</label><br>
    <input type="text" name="t_fname"><br>
    <label for="">teacher last name</label><br>
    <input type="text" name="t_lname"><br>
    <label for="">teacher email</label><br>
    <input type="text" name="t_email"><br>
    <input type="submit" name="recordtrainer" value="record">
</form>
</div>
</body>
</html>