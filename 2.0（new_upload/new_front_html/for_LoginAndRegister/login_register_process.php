<?php
    include_once "login_register_class.php";
    $newUser = $_POST["newUser"];
    $newPassword = $_POST["newPassword"];
    $newPIN = $_POST["newPIN"];
    $newQQ = $_POST["newQQ"];
    $newEmail = $_POST["newEmail"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($newEmail != null) {
        $register = new login_register_class();
        $register->for_register($newUser, $newPassword,$newEmail, $newQQ, $newPIN);
    }else{
        $login = new login_register_class();
        $login->for_login($username,$password);
    }
