<?php
class check_answer{
        function check($lesson,$user_answer,$mark){
            $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
            mysqli_query($conn,"set names 'utf8'");
            $sql0 = "select * from tb_answer where lesson='$lesson' ";
            $return_answer = mysqli_query($conn,$sql0);
            $c_answer = mysqli_fetch_row($return_answer);

            $total = 100;
            $wrong = array();

            for($i = 1;$i<=10;$i++){
                if($c_answer[$i]!=$user_answer[$i]){
                    $total -= 10;
                    array_push($wrong,$i);
                }
            }

            $point = $total/10;

            if(count($wrong)==0){
                echo "<script type='text/javascript'>alert('你的成绩是100分！非常出色，你获得了10积分！');</script>";
            }else{
                echo "<script type='text/javascript'>alert('你的成绩是".$total.",你获得了".$point."积分!');</script>";
            }

            if(isset($_COOKIE['username'])){
                $user = $_COOKIE['username'];
                $sql = "update  tb_score set $lesson='$total'where name='$user'";
                $result = mysqli_query($conn,$sql);
                $sql1 = "update  tb_score set $mark='1'where name='$user'";
                $result1 = mysqli_query($conn,$sql1);
                $sql2 = "update tb_user set point=$point+point where name='$user'";
                $result2 = mysqli_query($conn,$sql2);
                if($result&&$result1&&$result2){
                    echo "<script type='text/javascript'>alert('成功录入数据库！返回课程页面');</script>";
                    header( "Refresh:1;url=../course.php");
                }
            }
        }
}