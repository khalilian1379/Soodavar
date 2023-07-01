<?php 
if(ISSET($_POST['add_account'])){
$username = $_POST['register_username'];
$email = $_POST['register_email'];
$password = $_POST['register_password'];
$query = $conn->query("SELECT * FROM `register` WHERE `register_username` = '$username'") or die(mysqli_error());

$conn->query("INSERT INTO `register` (register_username, register_email, register_password) VALUES('$username', '$email', '$password')") or die(mysqli_error());
header("location:auth-login-cover.php");

}
?>