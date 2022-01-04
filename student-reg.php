<?php  
require_once('config/db.php');

if (isset($_POST['submit'])) {
          $status = 1;
          $sql = " insert into tblstudents set 
            StudentEnrollment = '".$_POST['enrollment_no']."', 
            FullName = '".$_POST['name']."',
            EmailId = '".$_POST['email']."', 
            MobileNumber = '".$_POST['mobile']."',
            Status = '".$status."',
            RegDate = now(), 
            UpdationDate = now() ";
            $record = mysql_query($sql,$con1);
            //header('location: login.php');
  
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
  <title>Add Books</title>
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
        <li class="breadcrumb-item active">Update issue Book</li>
      </ol>

      <div class="card card-register mx-auto mt-5">
      
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
              <div class="col-md-9">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email"  placeholder="<?php if(isset($errors['email'])){ echo $errors['email']; }  ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="enrollment_no">Enrollment Number</label>
                <input class="form-control" id="enrollment_no" name="enrollment_no" type="text" placeholder="<?php if(isset($errors['enrollment_no'])){ echo $errors['enrollment_no']; }  ?>">
              </div>
              <div class="col-md-6">
                <label for="mobile">Mobile</label>
                <input class="form-control" id="mobile" name="mobile" type="number" placeholder="<?php if(isset($errors['mobile'])){ echo $errors['mobile']; }  ?>">
              </div>
            </div>
          </div>      
          
          </div>
          <div class="form-group">
            <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Register">
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



