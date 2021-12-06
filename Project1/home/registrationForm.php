<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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



      <div class="row justify-content-center" 
      style="padding:20px;position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);
      border:1px solid black;border-radius:5px;background:white;">
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
          style="align-items: flex-end;">Update</button>
        <?php else: ?>
          <button type="submit" class="btn btn-primary" name="submit" 
          style="align-items: flex-end;">Submit</button>
          <?php endif; ?>
      </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
