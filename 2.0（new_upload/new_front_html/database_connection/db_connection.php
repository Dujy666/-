<?php


class db_connection
{
    private $db_name;

    function __construct($db_select){
        $this->db_name = $db_select;
    }

    function db_conn(){
        $conn = mysqli_connect("localhost", "root", "root", $this->db_name) or die("连接数据库服务器失败！".mysqli_error());
        mysqli_query($conn,"set names 'utf8'");
        return $conn;
    }

}