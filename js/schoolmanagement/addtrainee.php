
<?php
include 'connect.php';
if (isset($_POST['record'])) {


$insert = $conn->query("insert into trainee values(null,'{$_POST['traineename']}','{$_POST['class']}')");
if ($insert == true) {
    echo "inserted";
}else{
    echo"no";
}
}
$select=$conn->query("select*from trainer");
$select1 = $conn->query("select*from class");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/record.css">
</head>
<body>
<div class="right-menu" >
    <form action="insert.php" method="post">
    <label for="">first name</label><br>
    <input type="text" name="traineefname" id=""><br>
    <label for="">last name</label><br>
    <input type="text" name="traineelname" id=""><br>
    <label for="">class</label>
    <select name="class" >
        <?php foreach ($select1 as $data2) {
           ?>
            <option value="<?=$data2['class_id'];?>"><?=$data2['class_name'];?></option>
           <?php
        }?>
    </select><br>
    
    <input type="submit" name="recordtrainee" value="record">
    </form>

</div>
</body>
</html>