<?php

include('./config/dbconnection.php');

if(isset($_POST['submit'])) {
  $adminname = $_POST['adminname'];
  $password = $_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM admin WHERE adminName = '$adminname' AND Password = '$password'");

  $user = mysqli_fetch_assoc($query);

  if(mysqli_num_rows($query) > 0) {
    
    $userLogged=$user['adminName'];
    header('Location: ./dashboard.php'); 
  }else {
    echo('Invalid Credetials');
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RDL Admin Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Login.css">
</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>RDL Admin Login</h2>
      <form method="POST">
        <div class="input-group">
          <label for="adminname">Admin Name</label>
          <input type="text" name="adminname" id="adminname" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" required>
        </div>
        <button type="submit" name="submit" class="btn-login">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
