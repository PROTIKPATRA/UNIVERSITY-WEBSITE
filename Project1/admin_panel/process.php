<?php
session_start();
$mysqli = new mysqli('localhost','root','','college databus') or die(mysqli_error($mysqli)); 

$name = "";
$reg = "";
$email = "";
$password = "";
$update= false;
$edit = false;
// ---------students data adding form----------- 
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $reg = $_POST['reg-Id'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $mysqli->query("INSERT INTO data (name,registration,email,password) values ('$name','$reg','$email','$password')") or
        die($mysqli->error);
    $_SESSION['message'] = "Record has been saved";
    $_SESSION['msg_type'] = "success";
    header("location: adminpanel2.php");
}
// update logic of student data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['Name'];
    $reg = $_POST['reg-Id'];
    $email = $_POST['email'];
    $password = $_POST['Password'];
    $mysqli->query("UPDATE data SET name='$name', registration='$reg', email='$email',password='$password' WHERE id= $id") or
    die($mysqli->error);
    $_SESSION['message'] = "Record has been updated";
    $_SESSION['msg_type'] = "success";
    $update = false;
    $edit = false;
    header("location: adminpanel2.php");
}
//delete logic of student data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die(mysqli->error); 
    $_SESSION['message'] = "Record has been deleted";
    $_SESSION['msg_type'] = "danger";
    header("location: adminpanel2.php");
}
//edit logic of student data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update= true;
    if ($result = $mysqli->query("SELECT * FROM data WHERE id = $id")  or die($mysqli->error)) {
        $row=$result->fetch_array();
        $name = $row['name'];
        $reg = $row['registration'];
        $email = $row['email'];
        $password = $row['password'];
    }
    $edit = true;
}
?>