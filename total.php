<?php

$selectin = $conn->query("select count(*) as total from computer_in");
$totalin = mysqli_fetch_array($selectin);

$selectout = $conn->query("select count(*) as total from computer_out");
$totalout = mysqli_fetch_array($selectout);

$selectpresent = $conn->query("select count(*) as total from computer_present");
$totalpresent = mysqli_fetch_array($selectpresent);
?>