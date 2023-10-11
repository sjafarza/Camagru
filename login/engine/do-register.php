<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="/../../styles/do-register.css">
        <title>Camagru</title>

    </head>
 <body>
    
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
            

                $register = mysqli_query($con,$query);
                if($register){
                    echo"Done ! - register data in DB from doRegister</br></br>";
                    echo '<a class="btn" href="../../index.html"> ok </a>';
                    // header(string:'location:www/camagru/index.html');
                    // header('location:http://www.camagru.com');
                    // exit;
                
                }   
                else{
                    echo"Error: register in DB .";
                };

            
    ?>
    
    </body>
   </html>      

