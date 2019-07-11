<?php
requre '../models/login_checker.php';

$username   = $_POST['username'];
$password   = $_POST['password'];
$level      = $_POST['level'];

if(empty($username) or empty($password))
{
    $_SESSION['alert_message'] = "Username atau password salah";
    header("location: ../login.php");
    break;
}

$checker    = new login_checker();
$result     = $checker->validation($username, $password, $level);
