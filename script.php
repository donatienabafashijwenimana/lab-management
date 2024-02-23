<?php
  include 'connect.php';
  function insert($conn){
  if (isset($_POST['record'])) {
    $select1 = $conn->query("select* from computer_in where student_fname='{$_POST['sname']}' and computername='{$_POST['cname']}' and serialnumber='{$_POST['snumber']}' and class='{$_POST['class']}' and date='{$_POST['date']}'");
    if (mysqli_num_rows($select1)<=0) {

  $insert = $conn->query("insert into computer_in values(null,'{$_POST['sname']}','{$_POST
                       ['cname']}','{$_POST['snumber']}','{$_POST['class']}','{$_POST['date']}',current_time())");

  if($insert== true){
    $select = $conn->query("select* from computer_in where student_fname='{$_POST['sname']}' and computername='{$_POST['cname']}' and serialnumber='{$_POST['snumber']}' and class='{$_POST['class']}' and date='{$_POST['date']}'");

 if (mysqli_num_rows($select)>0) {
    $row = mysqli_fetch_array($select);
  
    $insert2= $conn->query("insert into computer_present values('{$row['computer_id']}','{$_POST['sname']}','{$_POST
      ['cname']}','{$_POST['snumber']}','{$_POST['class']}','{$_POST['date']}',current_time())");
if ($insert2= true) {
    echo"<script>alert('this computer recorded')</script>";
}
    }
  }
}else {
  echo"<script>alert('this computer exist')</script>";
}
}
  }
?>