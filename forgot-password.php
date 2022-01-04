<?php  
require_once('config/db.php');
  if(isset($_POST['submit']))
{ 
 
 $mail=$_POST['email'];
 $q=mysql_query("select * from students where email='".$mail."' ",$con);
 $p = mysql_num_rows($q);
 //var_dump($q);
 if($p != 0){
  //echo "string";
 $res= mysql_fetch_array ($q);
// echo($res['email']);
  $to=$res['email'];
  $subject='Remind password';
  $message='Your  encrypted password is  : '.$res['password'] . '' .'Please visit on given link and decrypt your password Link: http://md5decrypt.net/en/'; 
  $headers='From:tushartk111@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
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
  <title>SB Admin - Start Bootstrap Template</title>
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
      <div class="card-header">Reset Password</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Forgot your password?</h4>
          <p>Enter your email address and we will send you instructions on how to reset your password.</p>
        </div>
        <form action="" method="post">
          <div class="form-group">
            <input class="form-control" id="email" name="email" type="email" aria-describedby="email" placeholder="Enter email address">
          </div>
          <!-- <a class="btn btn-primary btn-block" type="submit" name="submit">Reset Password</a> -->
          <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Reset Password">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="login.php">Login Page</a>
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
