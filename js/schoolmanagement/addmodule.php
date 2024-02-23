
<?php
include 'connect.php';

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
    <label for="">module code</label><br>
    <input type="text" name="modulecode"><br>
    <label for="">modulename</label><br>
    <input type="text" name="modulename" id=""><br>
    <label for="">class</label>
    <select name="class" >
        <?php foreach ($select1 as $data2) {
           ?>
            <option value="<?=$data2['class_id'];?>"><?=$data2['class_name'];?></option>
           <?php
        }?>
    </select><br>
    <label for="">trainer</label>
    <select name="tr_id" id="">
        <?php foreach($select as $data){?>
            <option value="<?=$data['tr_id'];?>"><?=$data['tr_fname']." ".$data['tr_lname'];?></option>
            <?php } ?>
    </select><br>
    <input type="submit" name="recordmodule" value="record">
    </form>

</div>
</body>
</html>