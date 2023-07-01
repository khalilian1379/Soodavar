<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['register_username'];
    $email = $_POST['register_email'];
    $password = $_POST['register_password'];
 
    $query = $connection->query("SELECT * FROM `register` WHERE `register_username`='$username'");
    $query->bindParam("register_username", $username, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">Tایمیل وارد شده تکراری است</p>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->query("INSERT INTO `register` (register_username, register_password, register_email) VALUES ('$username', '$password', '$email')");
        $query->bindParam("register_username", $username, PDO::PARAM_STR);
        $query->bindParam("register_password", $password_hash, PDO::PARAM_STR);
        $query->bindParam("register_email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo '<p class="success">ثبت نام شما با موفقیت انجام شد</p>';
        } else {
            echo '<p class="error">ثبت نام شما با خطا مواجه شد</p>';
        }
    }
}
 
?>