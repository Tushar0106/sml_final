<?php  
require_once('config/db.php');
if(isset($_POST['submit'])) {
  $errors = array();
  $errors = validate_login();
  if(!count($errors)) {
    $_POST['password'] = md5($_POST['password']);
    if($_POST['role'] == 'student') {
      $select =  mysql_query("select * from students where username = '".$_POST['username']."' and password = '".$_POST['password']."' ",$con);
      $row = mysql_fetch_array($select);
      if(isset($row['id'])) {
        $_SESSION['slam'] = $row;
        unset($_SESSION['slam']['password']);
        header('location:dash.php');
        exit;
      }
    }
    if($_POST['role'] == 'teacher') {
      $select =  mysql_query("select * from teachers where username = '".$_POST['username']."' and password = '".$_POST['password']."' ",$con);
      $row = mysql_fetch_array($select);
      if(isset($row['id'])) {
        $_SESSION['slam'] = $row;
        unset($_SESSION['slam']['password']);
        header('location:staff_dash.php');
        exit;
      }
    }
    if($_POST['role'] == 'librarian') {
      $select =  mysql_query("select * from teachers where username = '".$_POST['username']."' and password = '".$_POST['password']."' ",$con);
      $row = mysql_fetch_array($select);
      if(isset($row['id'])) {
        $_SESSION['slam'] = $row;
        unset($_SESSION['slam']['password']);
        header('location:library_dash.php');
        exit;
      }
    }
    if($_POST['role'] == 'admin') {
      $select =  mysql_query("select * from teachers where username = '".$_POST['username']."' and password = '".$_POST['password']."' ",$con);
      $row = mysql_fetch_array($select);
      if(isset($row['id'])) {
        $_SESSION['slam'] = $row;
        unset($_SESSION['slam']['password']);
        header('location:dashboard.php');
        exit;
      }
    }
    
    else{
      echo "Not authorised";
    }
  }
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form  method="post" action="">
          <div class="form-group">
            <label for="role">Select Role</label>
            <select class="form-control" name="role">
              <option>Select Role</option>
              <option value="admin">Admin</option>
              <option value="teacher">Teacher</option>
              <option value="librarian">Librarian</option>
              <option value="student">Student</option>
            </select><br/>
            <?php if(isset($errors['role'])){ echo $errors['role']; }  ?>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" type="username" aria-describedby="username" name="username" placeholder="Enter Username"><?php if(isset($errors['username'])){ echo $errors['username']; }  ?>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password" placeholder="Password">
            <?php if(isset($errors['password'])){ echo $errors['password']; }  ?>
          </div>
          <div class="form-group ">
              <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
            </div>
        </form>
        <div class="text-center">
          <select class="form-control" onchange="location = this.value;" name="role">
              <option>Register as</option>
              <option value="s_register.php">Admin</option>
              <option value="s_register.php">Teacher</option>
              <option value="s_register.php">Librarian</option>
              <option value="register.php">Student</option>
            </select>
          <a class="d-block small mt-3" href="forgot-password.php">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
