<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminpanel.css">
    <title>admin panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
<?php require_once 'process.php' ?>
<?php
if (isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
?>
</div>
<?php endif; ?>
<!------------------------side bar------------------------->
    <div class="side-menu">
        <div class="admin-name">
            <h1>ADMIN</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png">&nbsp; Dashboard</a></li>
            <li><img src="reading-book (1).png">&nbsp; students</li>
            <li><img src="teacher2.png">&nbsp; teachers</li>
            <li><img src="school.png">&nbsp; colleges</li>
            <li><img src="help-web-button.png">&nbsp; help</li>
            <li><img src="settings.png">&nbsp; <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
    setting
  </button>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="401.html">401 error</a></li>
    <li><a class="dropdown-item" href="404.html">404 error</a></li>
    <li><a class="dropdown-item" href="500.html">500 error</a></li>
    <li><hr class="dropdown-divider"></li>
  </ul>
</div>
</li>
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
                    <button class="btn btn-primary" onclick="show()">add new</button>
                    <img src="notifications.png" alt="">
                    <div class="image">
                    <img src="user.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
        
        <div class="grid">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo "5000";?></h1>
                        <h3>students</h3>
                    </div>
                    <div class="icon1">
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>122</h1>
                        <h3>teachers</a></h3>
                    </div>
                    <div class="icon1">
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>62</h1>
                        <h3>office staff</h3>
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
                    </div>
                </div>
            </div>
        </div>
      <?php
        $mysqli = new mysqli('localhost','root','','college databus') or die(mysqli_error($mysqli)); 
        $result = $mysqli->query("SELECT * FROM data")  or die($mysqli->error);
        
      ?>
    <div class="row justify-content-center" style="width:100%;">
        <table class="table" style="transform:translateX(2%);">
            <thead class="black">
                <tr>
                    <th>Sl<br>no.</th>
                    <th>Name</th>
                    <th>Registration</th>
                    <th>Email-id</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=$result->fetch_assoc()): ?>
                <tr>
                    <td scope="row"><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['registration']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <a href="adminpanel2.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                        <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
      <div style="width:100vw;height:100vh;background-color:rgba(25,25,25,0.4);visibility:hidden;
      position:fixed;top:0%;left:0%;" id="iphase"></div>

<!-------------------------student details adding form----------------------------->
      <div id="form" class="row justify-content-center" style="padding:20px;position:fixed;top:50%;left:50%;
      transform:translate(-50%,-50%);border:1px solid black;border-radius:5px;background:white;visibility:hidden;">

      <form action="process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="Name" class="form-control" value="<?php echo $name ?>" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
          <label>registration ID.</label>
          <input type="text" name="reg-Id" class="form-control" value="<?php echo $reg ?>" placeholder="Enter Registration id">
        </div>
        <div class="form-group">
          <label>Email id</label>
          <input type="text" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Enter Your Email-id">
        </div> 
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="Password" class="form-control" placeholder="Enter atleast 6 characters">
        </div>
        <?php
        if ($update == true): ?>
         <button type="submit" class="btn btn-info" name="update" 
          style="align-items: flex-end;" onclick="hide()">Update</button>
        <?php else: ?>
          <button type="submit" class="btn btn-primary" name="submit" 
          style="align-items: flex-end;" onclick="hide()">Submit</button>
          <?php endif; ?>
      </form>
      </div>
    </div>
    <script>
        var form = document.getElementById("form")
        var focus = document.getElementById("iphase")
        function show() {
            form.style.visibility = "visible"
            focus.style.visibility = "visible"
        }
        function hide() {
            form.visibility = "hidden"
            focus.visibility = "hidden"
        }
    </script>
    
<?php if($edit): ?>
    <script>show()</script>
<?php endif; ?>
<!-----------------footer----------------------->
<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
      
</body>
</html>
