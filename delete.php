<?php
include 'connect.php';
if (isset($_GET['id'])) {
    
$delete = $conn->query("delete from computer_in where computer_id='{$_GET['id']}'");
if ($delete == true) {
    echo"<script>alert('this computer deleted');
     window.location.href='lab.php'</script>";
}
}
?>