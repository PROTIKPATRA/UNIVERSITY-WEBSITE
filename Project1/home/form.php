<?php
include('cofig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>LOGIN</title>
</head>
<body>
<div class="container">
    <header>Login From</header>
    <form class="user" action="" method="post">
        <div class="input-field">
            <input name="name" type="text" required>
            <label>Username</label>
        </div>
        <div class="input-field">
            <input name="registration" class="pswd" type="password" required>
            <span class="show">SHOW</span>
            <label>Password</label>
        </div>
        <div class="button">
            <div class="inner"></div>
                <button type="submit" name="log_btn">LOGIN</a></button>
        </div>
    </form>
    <div class="signup">
        Not a member? <a href="http://" target="_blank" rel="noopener noreferrer">Signup</a>
    </div>
</div>
    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click',active);
        function active(){
            if(input.type === "password"){
                input.type ="text";
                show.style.color="#1DA1F2";
                show.textContent="HIDE";
            }
            else{
                input.type = "password";
                show.textcontent = "SHOW";
                show.style.color = "#111"
            }
        }
    </script>
    <?php
    if(isset($_POST['log_btn']))
    {
        $name_login = $_POST['name'];
        $password_login = $_POST['registration'];
        $query = "SELECT * FROM ad WHERE name='$name_login' AND registration ='$password_login'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result)==1)
        {
            echo "correct";
        }
        else{
            echo"incorrect";
        }
    }
    ?>
</body>
</html>