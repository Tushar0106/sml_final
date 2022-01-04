<?php   
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
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
  <title>Profile</title>
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
  <?php  require('include/snav.html');  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Wainganga Polytechnic, Sakoli
</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      

      <div class="card mb-3">
        <div class="card-body view_pro" style="text-align: center">
           <img src="images/avatar/<?php echo $_SESSION['slam']['avatar']; ?>" class="img-rounded" width="200px" height="200px" style="border-radius: 50%" >
          <div class="form-group">
            <button id="submit" name="submit" class="btn btn-success edit"><a href="edit_staff_profile.php?id=<?php echo $_SESSION['slam']['id'];?>" style="color:#fff;">Edit Profile</a></button>
          </div>
          <div class="head_name">
           <h2 style="color: #ededed;text-transform: uppercase;"><?php echo $_SESSION['slam']['name']; ?></h2>
           <!-- <h3><?php echo $_SESSION['slam']['department']."-". $_SESSION['slam']['semester']."Sem"; ?></h3>
           <h3><?php echo "<span>". "Enrollment number: "."</span>" . $_SESSION['slam']['enrollment_no']; ?></h3>
            --><h3><?php echo "<span>"."Email: "."</span>" . $_SESSION['slam']['email']; ?></h3>
           <h3><?php echo "<span>"."Mobile: "."</span>" . $_SESSION['slam']['mobile']; ?></h3>
           <h3><?php echo "<span>"."Address: "."</span>" . $_SESSION['slam']['address']; ?></h3>
          </div>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
