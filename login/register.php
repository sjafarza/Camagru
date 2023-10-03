<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Register in Camagru</title>
       
        <link rel="stylesheet" href="register.css">
     
        
    </head>
    <body>
        <div id="users">
            <form action="engine/do-register.php" method="post" required>
                <h2>Register form</h2>
                <!-- <label for="usn"> UserNamme : </label> -->
                <input type="text" id="usn" name="userName" class="input" placeholder="Your name..." required><br>
                <!-- <label for="eml"> Email : </label> -->
                <input type="text" id="eml" name="email" class="input" placeholder="Your Email..." required><br>
                <!-- <label for="psw"> Password : </label> -->
                <input type="password" id="psw" name="password" class="input" placeholder="Your Password..." required><br>
                <!-- <label for="rpsw"> Repeate Pasword: </label> -->
                <input type="password" name="password-conf" class="input" placeholder="Repete Password please..." required><br>
                <input type="submit" name="do-register"  value="Register"><br>

            </form>
        </div>
    </body>

</html>