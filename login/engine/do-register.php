<?php

    // require_once('db.php');
    $host = "10.0.2.15";
    $username = "camagru_db_user";
    $psw = "123";
    $dbname = "camagru";
    // $db = mysquli_connect($host, $username, $psw, $dbname);
    // if($db){
    //     echo"ok";
    // }else{
    //     echo"No";
    // }

    echo'Hello  ';
    echo $_POST['userName'];
    echo"  from do-register.ph\n";

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = $_POST['password-conf'];

    echo $userName . "+" . $email . "+" . $password;
    
    // $register = mysqli_query($db,"INSERT INTO users  VALUES ('$userName','$email','$password')");
    // if($register){
    //     echo"Done !";
    // }   
    // else{
    //     echo"Error";
    // }
        

?>