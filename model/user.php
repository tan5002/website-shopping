<?php
    function insert_user($username,$email, $password){
        $sql = "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password')";
        pdo_execute($sql);
    }

    function check_user($email, $password){
        $sql = "SELECT email,password FROM user WHERE email = '".$email."' AND password = '".$password."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }

?>