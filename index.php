<?php session_start(); 
    if(empty($_session['user_id'])){
        $_session['alert_msg'] = "Username atau password salah";
        header("location: login.php");
    }