<?php
    session_start();
    include_once "login_register_class.php";
    if($_SESSION['login_register']==1){
        $login = new login_register_class();
        $login->for_login($_GET['user'],$_GET['password']);
    }else if($_SESSION['login_register']==0){
        $register = new login_register_class();
        $register->for_register($_GET['user1'],$_GET['password'],$_GET['qq'],$_GET['safecode']);
    }else{
        $find = new login_register_class();
        $find->for_find($_GET['user2'],$_GET['safecode'],$_GET['repassword']);
    }
