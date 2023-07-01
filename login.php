<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['register_username'];
    $password = $_POST['register_password'];
 
    $query = $connection->prepare("SELECT * FROM `register` WHERE `register_username` = '$username'");
    $query->bindParam("register_username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">نام کاربری یا رمزعبور اشتباه است</p>';
    } else {
        if (password_verify($password, $result['register_password'])) {
            $_SESSION['register_id'] = $result['ID'];
            echo '<p class="success">ورود با موفقیت انجام شد</p>';
        } else {
            echo '<p class="error">نام کاربری یا رمزعبور اشتباه است</p>';
        }
    }
}
 
?>