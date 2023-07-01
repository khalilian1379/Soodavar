<?php
require 'connect.php';
$query = $conn->query("SELECT * FROM `register` WHERE `register_id` = '$_SESSION[register_id]'") or die(mysqli_error());
$fetch = $query->fetch_array();
$name = $fetch['register_username'];
?>