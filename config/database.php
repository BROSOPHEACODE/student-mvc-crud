<?php

    class Database{
        public static function connection(){
            $conn = new mysqli('localhost','root','','mvc_project');
            if($conn->connect_error){
                die('database fail: '.$conn->connect_error);
            }
            return $conn;
        }
    }
?>