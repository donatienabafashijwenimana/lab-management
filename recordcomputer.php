<?php
session_start();
include 'connect.php';
if (!isset($_SESSION['adimin_name'])) {
    header("location:sign in.php");

}

  include 'connect.php'; 
  date_default_timezone_set("africa/kigali");
  $time = date("y-m-d h:i:s");
  
  
  if (isset($_POST['record'])) {
    $select = $conn->query("select * from computer_present where 
                          student_fname='{$_POST['sfname']}' and
                          student_lname='{$_POST['slname']}' 
                          and class='{$_POST['class']}' and
                          computer_name='{$_POST['cname']}'");
        if (mysqli_num_rows($select)==0) {
            
        $insert = $conn->query("insert into computer_in values(null,'{$_POST['cname']}',
                      '{$_POST['sfname']}','{$_POST['slname']}','{$_POST['ctype']}',
                      '$time','{$_POST['class']}')");
            if ($insert== true) {
                
                 $insert2 = $conn->query("insert into computer_present(select * from computer_in where student_fname='{$_POST['sfname']}' and
                 student_lname='{$_POST['slname']}' 
                 and class='{$_POST['class']}' and
                 computer_name='{$_POST['cname']}')");
            if($insert2 == true){
                header("location:computer_present.php");
            }
        }
        
    }else {
        echo"this student exist";
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
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body style="padding:0px; margi:0px;">
    

   <div class="input-control form-control container col-sm-1">
      <form action="#" method="post"style="width:60%;;margin-left:20%" >
           <label for="" class="h5"> student first name</label> <br>
           <input type="text" name="sfname"  id="" class="container col-sm-8 imput-control "><br><br>
           <label for=""class="h5">student second name</label><br>
           <input type="text" name="slname" id="" required  class="container col-sm-8"><br><br>
           <label for=""class="h5">class</label><br>
           <input type="text" name="class" required id="" class="container col-sm-8"><br><br>
           <label for=""class="h5">computer name</label><br>
           <input type="text" name="cname" required id="" class="container col-sm-8"><br><br>
           <label for=""class="h5 ">coputer type</label><br>
           <input type="text" name="ctype" required id="" class="container col-sm-8"><br><br>
           <input type="submit" value="record" name="record"class="btn btn-primary h1">
       </form>
   </div>
    </body>
</html>