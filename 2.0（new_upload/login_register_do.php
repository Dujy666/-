<?php
    session_start();
    include_once "login_register_class.php";
    if($_SESSION['login_register']==1){
        $login = new login_register_class();
        $login->for_login($_POST['user'],$_POST['password']);
    }else if($_SESSION['login_register']==0){
        $register = new login_register_class();
        $register->for_register($_POST['user1'],$_POST['password'],$_POST['qq'],$_POST['safecode']);
    }else{
        $find = new login_register_class();
        $find->for_find($_POST['user2'],$_POST['safecode'],$_POST['repassword']);
    }
