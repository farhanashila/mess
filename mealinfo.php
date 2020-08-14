<?php

require 'connection.php';
$conn    = Connect();
$serial  = $conn->real_escape_string($_POST['serial_no']);
$tmeal   = $conn->real_escape_string($_POST['t_meal']);
$mrate      = $conn->real_escape_string($_POST['m_rate']);

$query   = "INSERT into tb_meal (serial_no,meal,rate) VALUES('" . $serial. "','" . $tmeal. "','" . $mrate . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}


include 'mealinfo2.php';

$conn->close();

?>