<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email             = $_POST["email"];
        $username          = $_POST["username"];
        $password          = $_POST["password"];
        $confirm_password  = $_POST["confirm-password"];

      
        //echo "USER email is ". $email."<br>";
        //echo "USER username is ". $username."<br>";
        //echo "USER password is ". $password."<br>";
        //echo "USER password is ". $confirm_password."<br>";

        if(trim($username) != ""){
            echo "USER username is NOT EMPTY<br>";
        } else {
            echo "field username is empty<br>";
        }


        if(trim($email) != ""){
            echo "USER email is NOT EMPTY<br>";
        } else {
            echo "field email is empty<br>";
        }


        if(trim($password) != ""){
            echo "USER password is NOT EMPTY<br>";
        } else {
            echo "field password is empty<br>";
        }
        

        if(trim($confirm_password) != ""){
            echo "USER confirm_password is NOT EMPTY<br>";
        } else {
            echo "field confirm_password is empty<br>";
        }
        

        if($password == $confirm_password){
            header("location: demo1.php?success=REGISTRATION SUCCESFUL");
        } else {
            header("location: demo1.php?error=PASSWORD MISMATCH");
            exit;
        }
        
        test($username);
    }
        function test($fieldName){
            if(trim($fieldName)!= "") {
                echo "USER field is NOT EMPTY<br>";
            } else {
                echo "field $$fieldName is empty<br>";
            }
        }


?>