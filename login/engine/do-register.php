<?php

    //1 connection to DB
    require_once('db.php');

   
    //2 register in DB

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['password-conf'];
    // Error ==> $query = "INSERT INTO 'users'('name','email','psw') VALUES('$userName', '$email', '$password')";
    $query = "INSERT INTO users(name,email,psw) VALUES('$userName', '$email', '$password')";
    
    if($password != $passwordConf)
    {
        echo"Error: Confirmation is not ok.";
    }
    else{

        $register = mysqli_query($con,$query);
        if($register){
            echo"Done ! - register data in DB from doRegister";
            
            header(string:'location:www/camagru/index.html');
            // header('location:http://www.camagru.com');
            // exit;
           
        }   
        else{
            echo"Error: register in DB .";
        };

    }
    
    
    
        

?>