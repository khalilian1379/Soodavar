<?php 
session_start();
if(!ISSET($_SESSION['register_id'])){
header("location:index.php");
}