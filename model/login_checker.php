<?php
require '../config/Db_class.php';
    class login_checker extends Db_config
    {

        pubic function validation($username, $password, $level)
        {
            if($level == "admin"){
                $table = "admin";
            }else{
                $table = "user";
            }

            $sql = "SELECT * FROM $table where username = $username AND password=$password";
            $result = $this->query($sql);


        }

    }