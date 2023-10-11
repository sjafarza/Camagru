<?php



$servarname = "localhost";
$username = "camagru_db_user";
$psw = "123";
$dbname = "camagru";
$con = mysqli_connect($servarname, $username, $psw, $dbname);
if($con){
    echo"ok conncection,from db.php . </br></br> ";
}else{
    echo"Error: Failed to connec to DB.";
}
?>