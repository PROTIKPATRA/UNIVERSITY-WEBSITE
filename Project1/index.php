<?php
include('cofig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
                <h1>LOGIN</h1>
            <form action="index.php" method="post">
             <input type="text" id="name" name="name" placeholder="enter your name"> 
             <input type="text" id="registration" name="registration" placeholder="enter your registration number">
             <input type="text" id="email" name="email" placeholder="enter your register email-id">
            <!--- <input type="text" id="ph" placeholder=" enter you phone number">-

-->
         <textarea name="others" id="others" cols="30" rows="10" placeholder="remarks"></textarea>
             <button class="btn" name="submit" onclick="window.open('admin_panel/adminpanel1.php')">submit</button>
            </form>
    </div>
</body>
</html>