<?php
$server = "localhost";
$username = "root";
$password = "";
$database ="ad";
$con = mysqli_connect($server, $username, $password, $database );
$sql = "";
$result = "";
if(!$con)
{
die("database connection failed". mysqli_connect_error());
}
//else{
    //echo " database connected ";
//}
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $registration = $_POST['registration'];
    $email = $_POST['email'];
    $others = $_POST['others'];

   // echo $name."<br/>".$registration."<br/>". $email."<br/>".$others;

    $sql = "INSERT INTO ad (name, registration, email, others) VALUES ('$name', '$registration', '$email', '$others')";
    $result = mysqli_query($con, $sql);
    // print_r($sql);
    // die();

    if($con->query($sql) == true)
    {
    //echo "successfully submitted";
    }
    else{
      //  echo "Error 404 : <br> $con->error";
    }
    $con->close();
}
if(isset($_GET['delete']))
{
  $registration = $_GET["delete"];
  $mysqli->query("DELETE FROM ad WHERE id=$registration") or die(mysqli->error());
}
?>