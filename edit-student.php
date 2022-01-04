<?php    
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: index.php');
  exit;
}
$id = $_GET['id'];
$books = mysql_query( "SELECT * from  students WHERE id = '".$id."' ",$con);
$row = mysql_fetch_array($books);
if(isset($_POST['submit']))
{
            $id = $_GET['id'];
             $src = $_FILES['avatar']['tmp_name'];
              $dest = "images/avatar/".$_FILES['avatar']['name'];
              if (move_uploaded_file($src, $dest)) {
                $_POST['avatar'] = $_FILES['avatar']['name'];
            $_POST['password'] = md5($_POST['password']);
          $_POST['cpassword'] = md5($_POST['cpassword']);
          if ($_POST['password'] == $_POST['cpassword']  && $_POST['clg_code'] == '100')  {
            $sql = " update students set 
              name = '".$_POST['name']."', 
              roll_no = '".$_POST['roll_no']."',
              email = '".$_POST['email']."', 
              mobile = '".$_POST['mobile']."',
              username = '".$_POST['username']."',
              dob = '".$_POST['dob']."', 
              password = '".$_POST['password']."', 
              cpassword = '".$_POST['cpassword']."', 
              gender = '".$_POST['gender']."', 
              clg_code = '".$_POST['clg_code']."',
              enrollment_no = '".$_POST['enrollment_no']."',
              year = '".$_POST['year']."', 
              department = '".$_POST['dept']."',
              semester = '".$_POST['sem']."', 
              address = '".$_POST['address']."',
              avatar = '".$_POST['avatar']."', 
              modified = now() WHERE id = '".$id."' ";
              $record = mysql_query($sql,$con);
              if (! $record) {
                echo "fail";
              }
              else{
                echo "Success";
              }
              }
          else{
            echo "Confirm passwordis not match";
          }
        }
// if($lastInsertId)
// {
// $_SESSION['msg']="Book Listed successfully";
// header('location:manage-books.php');
// }
// else 
// {
// $_SESSION['error']="Something went wrong. Please try again";
// header('location:manage-books.php');
// }

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
  <title>Edit Student</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php  require('include/nav.html');  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Wainganga Polytechnic, Sakoli
</a>
        </li>
        <li class="breadcrumb-item active">Edit Student</li>
      </ol>

      <div class="card card-register mx-auto mt-5">
      
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-9">
                <label for="fname">Full name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php if(isset($errors['name'])){ echo $errors['name']; }  ?>" value="<?php echo $row['name'];  ?>" >
              </div>
              <div class="col-md-3">
                <label for="roll_no">Role Number</label>
                <input class="form-control" id="roll_no" name="roll_no" type="text" placeholder="<?php if(isset($errors['roll_no'])){ echo $errors['roll_no']; }  ?>" value="<?php echo $row['roll_no'];  ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email"  placeholder="<?php if(isset($errors['email'])){ echo $errors['email']; }  ?>" value="<?php echo $row['email'];  ?>">
              </div>
              <div class="col-md-6">
                <label for="mobile">Mobile</label>
                <input class="form-control" id="mobile" name="mobile" type="number" placeholder="<?php if(isset($errors['mobile'])){ echo $errors['mobile']; }  ?>" value="<?php echo $row['mobile'];  ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="username">Username</label>
                <input class="form-control" id="username" type="text" name="username" placeholder="<?php if(isset($errors['username'])){ echo $errors['username']; }  ?>" value="<?php echo $row['username'];  ?>">
                
              </div>
              <div class="col-md-6">
                <label for="dob">Date of Birth</label>
                <input class="form-control" id="dob" type="date" name="dob" placeholder="Select Date of Birth" value="<?php echo $row['dob'];  ?>">
                
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
                <label for="enrollment_no">Enrollment Number</label>
                <input class="form-control" id="enrollment_no" name="enrollment_no" type="text" placeholder="<?php if(isset($errors['enrollment_no'])){ echo $errors['enrollment_no']; }  ?>" value="<?php echo $row['enrollment_no'];  ?>">
              </div>
              <div class="col-md-4">
                <label for="clg_code">College Code</label>
                <input class="form-control" id="clg_code" name="clg_code" type="text" placeholder="<?php if(isset($errors['clg_code'])){ echo $errors['clg_code']; }  ?>" value="<?php echo $row['clg_code'];  ?>">
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
                <select name="dept" class="form-control">
                  <option value="">Select Department</option>
                  <option value="CW">Computer Science</option>
                  <option value="CE">Civil Engineering</option>
                  <option value="EE">Electrical Engineering</option>
                  <option value="ME">Mechanical Engineering </option>
                  <option value="MINNING">Minning</option>
                </select>
                
              </div>
              <div class="col-md-4">
                <select name="sem" class="form-control">
                  <option value="">Select Semester</option>
                  <option value="1st">First</option>
                  <option value="2nd">Second</option>
                  <option value="3rd">Third</option>
                  <option value="4th">Fourth</option>
                  <option value="5th">Fifth</option>
                  <option value="6th">Sixth</option>
                </select>
              </div>
              <div class="col-md-4">
                <select name="year" class="form-control">
                  <option value="">Admission Year</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                </select>
                
              </div>
            </div>
          </div>
          <div class="form-group ">
            <label for="address">Address</label>
            <textarea rows="3" name="address" class="form-control" value="<?php echo $row['address'];  ?>"></textarea>
          </div>
          <div class="form-group ">
            <div class="form-row">
            <div class="col-md-6">
              <input class="form-control" type="file"  name="avatar" accept="image/*">
              
            </div>
          </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Update">
              </div>
              <div class="col-md-6">
                <a class="btn btn-primary btn-lg btn-block login-button" href="student_details.php">Cancel</a>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
   
  </div>
</body>

</html>

