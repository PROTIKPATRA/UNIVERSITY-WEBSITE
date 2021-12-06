<?php
session_start();
$mysqli = new mysqli('localhost','root','','college databus') or die(mysqli_error($mysqli)); 
$correct = false;
$submited = false;
$msg = "";
if(isset($_POST['submit'])) {
    $key = $_POST['reg-Id'];
    $password = $_POST['Password'];
    $submited = true;
    $result = $mysqli->query("SELECT * FROM data")  or die($mysqli->error);
    while($row = $result->fetch_array()) {
        echo $row['registration'];
        if($row['registration'] == $key) {
            if($password == $row['password']) {
                echo "Log-in successfull";
                $correct = true;
                break;
            } else {
                echo "wrong";
                break;    
            }

        }
    }
    if($correct==false){
        $_SESSION['message'] = "Username or password is incorrect";
        $_SESSION['msg_type']="danger";
        header("location: college1.php");
    } else {
        // $_SESSION['message'] = "Successfull";
        header("location: ../admin_panel/adminpanel2.php");
    }
}
?>