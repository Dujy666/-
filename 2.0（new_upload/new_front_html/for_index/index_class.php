<?php
    include_once "database_connection/db_connection.php";

class index_class
{
    var $db = null;

    function __construct()
    {
        $this->db = new db_connection("db_weike");
    }

    function getInfo($id,$table){


        $sql = "select * from $table where id='$id'";
        $result = mysqli_query($this->db->db_conn(),$sql);
        $rows = mysqli_fetch_array($result);
        return $rows;
    }
}