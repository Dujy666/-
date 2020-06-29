<?php
    $user = $_POST['user'];
    $choice = $_POST['choice'];
    $text = $_POST['text'];

    include_once "../conn/conn.php";

    $sql = "update tb_user set $choice='$text' where name = '$user'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "成功！1秒后返回";
        header("Refresh:2;url=change_userinfo.php");
    }