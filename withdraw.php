<?php
include 'connect.php';
$insert = $conn->query("insert into computer_present select*from computer_present where computer_id='{$_GET['c_id']}'");
if ($insert == true) {
    $delete = $conn->query("delete from computer_present where computer_id='{$_GET['c_id']}'");
    if ($delete == true) {
        echo "<script>
              alert('computer with drawed')
              window.location.href='lab.php'</script>";
    }
}

?>