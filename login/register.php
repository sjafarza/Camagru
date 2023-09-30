<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Register in Camagru</title>
       
        <link rel="stylesheet" href="register.css">
     
        
    </head>
    <body>
        <div id="users">
            <form action="engine/do-register.php" method="post">
                <input type="text" name="userName" class="input" placeholder="Your name..."><br>
                <input type="text" name="email" class="input" placeholder="Your Email..."><br>
                <input type="password" name="password" class="input" placeholder="Your Password..."><br>
                <input type="password" name="password-conf" class="input" placeholder="Repete Password please..."><br>
                <input type="submit" name="do-register"  value="Register"><br>

            </form>
        </div>
    </body>

</html>