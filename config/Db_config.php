<?php
    class Db_config
    {
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "commerce"
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
        if(!$conn){
            echo $conn->error;
        }

    }