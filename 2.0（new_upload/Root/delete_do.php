<?php
    include_once "../conn/conn.php";
    $user = $_POST['user'];

    if(isset($_POST['r1'])&&isset($_POST['r2'])&&isset($_POST['r3'])){
        $sql0 = "delete from tb_user where name='$user'";
        $result0 = mysqli_query($conn,$sql0);

        $sql1 = "delete from tb_score where name='$user'";
        $result1 = mysqli_query($conn,$sql1);

        $key ="ALTER  TABLE  tb_user DROP id";
        mysqli_query($conn,$key);
        $key_do = "ALTER  TABLE  tb_user ADD id mediumint(6) PRIMARY KEY NOT NULL AUTO_INCREMENT FIRST";
        mysqli_query($conn,$key_do);

        echo "<script type='text/javascript'>alert('删除完毕');</script>";
        header( "Refresh:1;url=delete_user.php");

    }else{
        echo "<script type='text/javascript'>alert('请确认你的删除');</script>";
        header( "Refresh:1;url=delete_user.php");
    }
