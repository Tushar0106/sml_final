<?php  
require_once('config/db.php');

if (isset($_POST['submit'])) {
  //echo "string";
  $errors = array();
  $errors = validate_sregistration();
  if (!count($errors)) {
    //echo "hello";
    $select =  mysql_query("select * from teachers where username = '".$_POST['username']."' ",$con);
    if (mysql_num_rows($select)) {
      echo "Username areready exist , please try again";
    }
    else{
      //if ($_FILES['avatar']['errors']==0) {
        $src = $_FILES['avatar']['tmp_name'];
        $dest = "images/avatar/".$_FILES['avatar']['name'];
        if (move_uploaded_file($src, $dest)) {
          $_POST['avatar'] = $_FILES['avatar']['name'];
          //echo $_POST['avatar'];

          $_POST['password'] = md5($_POST['password']);
          $_POST['cpassword'] = md5($_POST['cpassword']);
          if ($_POST['password'] == $_POST['cpassword']  && $_POST['clg_code'] == '100')  {
            echo "correct";
            $sql = " insert into teachers set 
            name = '".$_POST['name']."', 
            email = '".$_POST['email']."', 
            mobile = '".$_POST['mobile']."',
            username = '".$_POST['username']."',
            dob = '".$_POST['dob']."', 
            password = '".$_POST['password']."', 
            cpassword = '".$_POST['cpassword']."', 
            gender = '".$_POST['gender']."', 
            clg_code = '".$_POST['clg_code']."',
            department = '".$_POST['dept']."',
            role = '".$_POST['role']."',
            address = '".$_POST['address']."',
            avatar = '".$_POST['avatar']."', 
            created = now(), 
            modified = now() ";
            $record = mysql_query($sql,$con);
            // header('location: login.php');
              if (mysql_query($sql)) {
               $msg="Registration Fail Please Try Again";
              }
              else{
               $msg="Registration Successfully ";
              }
          }
          else{
            $msg="Confirm passwordis not match";
          }
        }
      //}

      
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
  <title>Registration</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="alert alert-success">
      <strong><?php if (isset($msg)) {
        echo $msg;
      }  ?></strong>
    </div>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Staff Registration</div>
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="fname">Full name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php if(isset($errors['name'])){ echo $errors['name']; }  ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email"  placeholder="<?php if(isset($errors['email'])){ echo $errors['email']; }  ?>">
              </div>
              <div class="col-md-6">
                <label for="mobile">Mobile</label>
                <input class="form-control" id="mobile" name="mobile" type="number" placeholder="<?php if(isset($errors['mobile'])){ echo $errors['mobile']; }  ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="username">Username</label>
                <input class="form-control" id="username" type="text" name="username" placeholder="<?php if(isset($errors['username'])){ echo $errors['username']; }  ?>">
                
              </div>
              <div class="col-md-6">
                <label for="dob">Date of Birth</label>
                <input class="form-control" id="dob" type="date" name="dob" placeholder="Select Date of Birth">
                
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input class="form-control" id="password" type="password" name="password" placeholder="<?php if(isset($errors['password'])){ echo $errors['password']; }  ?>">
                
              </div>
              <div class="col-md-6">
                <label for="cpassword">Confirm password</label>
                <input class="form-control" id="cpassword" type="password" name="cpassword" placeholder="<?php if(isset($errors['cpassword'])){ echo $errors['cpassword']; }  ?>">
                
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-4">
                <label for="clg_code">College Code</label>
                <input class="form-control" id="clg_code" name="clg_code" type="text" placeholder="<?php if(isset($errors['clg_code'])){ echo $errors['clg_code']; }  ?>">
              </div>
              
              <div class="col-md-4 col-md-offset-0">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" value="male"> Male   <input type="radio" name="gender" value="female"> Female
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              
              <div class="col-md-4">
                <select class="form-control" name="role">
                <option>Select Role</option>
                <option value="admin">Admin</option>
                <option value="teacher">Teacher</option>
                <option value="librarian">Librarian</option>
                <option value="student">Student</option>
              </select>
              </div>
              <div class="col-md-4">
                <select name="dept" class="form-control">
                  <option value="">Select Department</option>
                  <option value="CW">Computer Science</option>
                  <option value="CE">Civil Engineering</option>
                  <option value="EE">Electrical Engineering</option>
                  <option value="ME">Mechanical Engineering </option>
                  <option value="MINNING">Minning</option>
                </select>
              </div>
             
            </div>
          </div>
          
          <div class="form-group ">
            <label for="address">Address</label>
            <textarea rows="3" name="address" class="form-control"></textarea>
          </div>
          <div class="form-group ">
            <div class="form-row">
            <div class="col-md-6">
              <input class="form-control" type="file"  name="avatar" accept="image/*">
              
            </div>
          </div>
          </div>
          <div class="form-group">
            <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register">
          </div>

        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
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


