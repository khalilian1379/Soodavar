<?php
if(ISSET ($_POST['login'])){
$username = $_POST['register_username'];
$password = $_POST['register_password'];
$query = $conn->query("SELECT * FROM `register` WHERE `register_username` = '$username' && `register_password` = '$password'") or die(mysqli_error());

$fetch = $query->fetch_array();
$row = $query->num_rows;
if($row > 0){
session_start();
$_SESSION['register_id'] = $fetch['register_id'];
header('location:pages.php');
}
else{
echo "<center> <labe style = 'color:red;'> نام کاربری یا رمزعبوز اشتباه است </label> </center>";
}
}
?>