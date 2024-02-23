<?php
include 'connect.php';
if(isset($_GET['c_id_out'])){
$insert = $conn->query("insert into computer_out select*from computer_present where computer_id='{$_GET['c_id_out']}'");
 
if ($insert == true) {
    $update = $conn->query("update computer_out set date=now(),times=current_time() where computer_id='{$_GET['c_id_out']}'");
    if($update==true){
    $delete = $conn->query("delete from computer_present where computer_id='{$_GET['c_id_out']}'");
    if ($delete == true) {
        echo "<script>
              alert('computer with drawed')
              window.location.href='lab.php'</script>";
    }
}
}
}
if(isset($_GET['c_id_present'])){
    $insert2 = $conn->query("insert into computer_present select*from computer_out where computer_id='{$_GET['c_id_present']}'");
    if ($insert2 == true) {
        $update = $conn->query("update computer_present set date=now(),times=current_time() where computer_id='{$_GET['c_id_present']}'");
    if($update==true){
        $delete = $conn->query("delete from computer_out where computer_id='{$_GET['c_id_present']}'");
        if ($delete == true) {
            echo "<script>
                  alert('computer returned')
                  window.location.href='lab.php'</script>";
        }
    }
    }
    }
?>