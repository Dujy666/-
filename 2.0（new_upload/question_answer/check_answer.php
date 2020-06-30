<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script type='text/javascript'>alert('请先登录');</script>";
        header( "Refresh:1;url=../login.php");
    }else{
        $mark = $_SESSION['lesson'].'_mark';
        $user_answer_get = array(1=>$_POST['question1'],2=>$_POST['question2'],3=>$_POST['question3'],4=>$_POST['question4'],5=>$_POST['question5'],6=>$_POST['question6'],7=>$_POST['question7'],
            8=>$_POST['question8'],9=>$_POST['question9'],10=>$_POST['question10']);

        include "give_result.php";

        $check = new check_answer();
        $check->check($_SESSION['lesson'],$user_answer_get,$mark);
    }
