<?php
$username= "root";
$server = "localhost";
$password = "";
$database ="ad";
$con = mysqli_connect($server, $username, $password, $database );
// $sql = "";
// $result = "";
$result= mysqli_connect($con, $query);
if(!$con)
{
die("database connection failed". mysqli_connect_error());
}
else{
    echo " database connected ";
}

?>