<?php
require_once 'db.php';

//print_r($_POST);
$email = $_POST['email'];
$psw = $_POST['password'];
$query = "SELECT * FROM users WHERE email='$email' AND psw='$psw'"; 

echo $email . " and " . $psw ." is recived in page do_login. </br>";


$chek = mysqli_query($con,$query);
echo  " ..</br></br>";
if(mysqli_num_rows($chek) > 0){
    echo" Welcome toyour prifile .</br>";
}else{
    echo" You don't registe yet. </br>";
}
?> 