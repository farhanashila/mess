<?php

require 'connection.php';
$conn    = Connect();
$serial  = $conn->real_escape_string($_POST['serial_no']);
$id    = $conn->real_escape_string($_POST['worker_id']);
$name      = $conn->real_escape_string($_POST['worker_name']);
$phone = $conn->real_escape_string($_POST['phn_no']);
$work_addr     = $conn->real_escape_string($_POST['worker_add']);
$type   = $conn->real_escape_string($_POST['worker_type']);

$query   = "INSERT into tb_workers (serial_no,id,name,phone,address,type) VALUES('" . $serial . "','" . $id . "','" . $name . "','" . $phone . "','" . $work_addr . "','" . $type . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}


include 'workersinfo2.php';

$conn->close();


?>

