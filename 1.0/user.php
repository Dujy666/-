<?php

/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2020/5/3
 * Time: 20:49
 */
class user{
    var $id;
    var $name;
    var $password;
    var $qq;
    var $money;
    var $pin;
    var $point;
    var $sp_lesson;

    public function login($user,$password){
        $this->name=$user;
        $this->password=$password;
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $sql1 = "select name from tb_user where name='$user'";
        $check = mysqli_query($conn, $sql1);
        $rows = mysqli_fetch_array($check);
        $num = count($rows);
        if($num<0){
            return -1;
        }
        else{
            $sql2 = "select pwd from tb_user where name='$user'";
            $check1 = mysqli_query($conn,$sql2);
            $pass = mysqli_fetch_row($check1);
            if($pass[0]==$password){
                return 1;
            }
            else{
                return 0;
            }
        }
    }

    public function createuser($user){
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $sql = "select * from tb_user where name='$user'";
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_array($result);
        $this->id=$rows[0];
        $this->name=$rows[1];
        $this->password=$rows[2];
        $this->qq=$rows[3];
        $this->money=$rows[4];
        $this->pin=$rows[5];
        $this->point=$rows[6];
        $this->sp_lesson=$rows[7];
    }

    public function chick($username){
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $sql = "select name from tb_user where name='$username'";
        $check = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_array($check);
        $num = count($rows);
        if ($num > 0) {
            return false;
        }
        else{
            return true;
        }
    }

    public function insertinfo($username,$pass,$qq,$safe){
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $sql1 = "insert into tb_user(name,pwd,qq,pin) values('$username','$pass','$qq','$safe')";
        $result = $conn->query($sql1);
        $sql2 = "insert into tb_score(name) values('$username') ";
        $result1 = $conn->query($sql2);
        $key ="ALTER  TABLE  tb_user DROP id";
        mysqli_query($conn,$key);
        $key_do = "ALTER  TABLE  tb_user ADD id mediumint(6) PRIMARY KEY NOT NULL AUTO_INCREMENT FIRST";
        mysqli_query($conn,$key_do);
        if ($result&&$result1) {
            return true;
        }
        else{
            return false;
        }
    }



    public function reback($user,$pin,$password){
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $sql1 = "select name from tb_user where name='$user'";
        $check = mysqli_query($conn, $sql1);
        $rows = mysqli_fetch_array($check);
        $num = count($rows);

        $sql2 = "select pin from tb_user where name='$user'";
        $check2 = mysqli_query($conn, $sql2);
        $rows2 = mysqli_fetch_row($check2);
        if ($num==0) {
           return -1;
        }
        else if($pin!=$rows2[0]){
            return 0;
        }
        else{
            $sql3 = "update tb_user set pwd='$password' where name='$user'";
            if(mysqli_query($conn, $sql3) or die(mysqli_error($conn)) ){
                return 1;
            }
        }


    }
    public function buy1($money){
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $this->money=  $this->money-$money;
        $sql0 = "update  tb_user set money='$money' where name='$this->name'";
        $result0 = mysqli_query($conn, $sql0);
        $sql1 = "update tb_user set sp_lesson='1' where name='$this->name'";
        $result1 = mysqli_query($conn, $sql1);
    }

    public function buy2($point){
        $conn = mysqli_connect("localhost", "root", "root", "db_database10") or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        $this->point=  $this->point-$point;
        $sql2 = "update  tb_user set point='$point' where name='$this->name'";
        $result2 = mysqli_query($conn, $sql2);
        $sql3 = "update tb_user set sp_lesson='1' where name='$this->name'";
        $result3 = mysqli_query($conn, $sql3);
    }

    public function charge(){}








}