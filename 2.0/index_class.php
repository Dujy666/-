<?php
    include_once "db_connection.php";

class index_class
{
    var $db = null;

    function __construct()
    {
        $this->db = new db_connection("db_weike");
    }

    function getCarouselSlideInfo($id,$numbers){
        $item = null;
        switch ($numbers){
            case 1:
                $item = "title";
                break;
            case 2:
                $item = "message";
                break;
            case 3:
                $item = "image";
                break;
        }

        $sql = "select $item from index_slider where id='$id'";
        $result = mysqli_query($this->db->db_conn(),$sql);
        $rows = mysqli_fetch_array($result);
        echo $rows[0];
    }

    function getInfo($id,$table){


        $sql = "select * from $table where id='$id'";
        $result = mysqli_query($this->db->db_conn(),$sql);
        $rows = mysqli_fetch_array($result);
        return $rows;
    }
}