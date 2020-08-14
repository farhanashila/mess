<?php

require 'connection.php';
$conn    = Connect();
$serial  = $conn->real_escape_string($_POST['serial_no']);
$hname   = $conn->real_escape_string($_POST['hname']);
$house_num     = $conn->real_escape_string($_POST['house_no']);
$address = $conn->real_escape_string($_POST['address']);
$contact     = $conn->real_escape_string($_POST['contact']);

$query   = "INSERT into tb_house (serial_no,hname,house_no,address,contact) VALUES('" . $serial . "','" . $hname . "','" . $house_num . "','" . $address . "','" . $contact . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}


include 'houseinfo2.php';

$conn->close();

?>