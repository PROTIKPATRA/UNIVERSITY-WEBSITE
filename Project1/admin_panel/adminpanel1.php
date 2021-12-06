<?php
include('cofig.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpanel.css">
    <title>admin panel</title>
</head>
<body>
    <div class="side-menu">
        <div class="admin-name">
            <h1>ADMIN</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png">&nbsp; Dashboard</li>
            <li><img src="reading-book (1).png">&nbsp; students</li>
            <li><img src="teacher2.png">&nbsp; teachers</li>
            <li><img src="school.png">&nbsp; colleges</li>
            <li><img src="help-web-button.png">&nbsp; help</li>
            <li><img src="settings.png">&nbsp; settings</li>
        </ul>
    </div>
    <div class="conteiner">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="search....">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <a href="../index.php" class="btn">add new</a>
                    <img src="notifications.png" alt="">
                    <div class="image">
                    <img src="user.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
        <?php   
    $server = "localhost";
    $username = "root";
    $password = "";
    $database ="ad";
    $con = mysqli_connect($server, $username, $password, $database );
    if(!$con)
    {
    die("database connection failed". mysqli_connect_error());
    }
    $con = mysqli_connect($server, $username, $password, $database );
        $sql = "SELECT * FROM ad";
        $result = mysqli_query($con, $sql);
    ?>
        <div class="grid">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo mysqli_num_rows($result)-1;?></h1>
                        <h3>students</h3>
                    </div>
                    <div class="icon1">
                        <img src="students.png">
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>122</h1>
                        <h3>teachers</h3>
                    </div>
                    <div class="icon1">
                        <img src="teachers.png">
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>62</h1>
                        <h3>office stuff</h3>
                    </div>
                    <div class="icon1">
                        <img src="info.png">
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>30</h1>
                        <h3>faculty member </h3>
                    </div>
                    <div class="icon1">
                        <img src="income.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="table" style=" border: 0.5px; margin-top:5vw; padding-left:3vw;">
<table align="center" style="border: 0.5px solid black; width: 70vw; line-height: 5vw; color: black;">
<tr>
    <th colspan="4"><h2>student record</h2></th>
</tr>
<t style="">
    <th>name</th>
    <th>reg no.</th>
    <th>email</th>
    <th>others</th>
    <th>Edit</th>
    <th>Delete</th>
</t>
<?php
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result)){
      ?>
    
<tr>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['registration']; ?></td>
   <td><?php  echo $row['email']; ?></td>
   <td><?php echo $row['others']; ?></td>
   <td>
       <form action="edit.php" method="post">
           <input type="text" name="edit_registration" value="<?php echo $row['registration']; ?>">
       <button type="submit" name="edit_btn" class="btn-edit">Edit</button>
    </form>
    </td>
   <td>
       <a href="config.php?delete=<?php echo $row['registration']; ?>" class="btn-delete" >Delete</a>
    </td>
    </tr>
    <?php
    }
}
else{
    echo "NO record found ";
}
?>
</table>
        </div>
    </div>
</body>
</html>
