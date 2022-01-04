<?php   
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}
//$totalCS = [];
$totalCS = mysql_num_rows(mysql_query("Select * from Students where department = 'CW' ",$con));
$firsttotalCS = mysql_num_rows(mysql_query("Select * from Students where department = 'CW' AND (semester = '1st' OR semester = '2nd') ",$con));
$secondtotalCS = mysql_num_rows(mysql_query("Select * from Students where department = 'CW' AND (semester = '3rd' OR semester = '4th') ",$con));
$thirdtotalCS = mysql_num_rows(mysql_query("Select * from Students where department = 'CW' AND (semester = '5th' OR semester = '6th') ",$con));

$totalCE = mysql_num_rows(mysql_query("Select * from Students where department = 'CE' ",$con));
$firsttotalCE = mysql_num_rows(mysql_query("Select * from Students where department = 'CE' AND (semester = '1st' OR semester = '2nd') ",$con));
$secondtotalCE = mysql_num_rows(mysql_query("Select * from Students where department = 'CE' AND (semester = '3rd' OR semester = '4th') ",$con));
$thirdtotalCE = mysql_num_rows(mysql_query("Select * from Students where department = 'CE' AND (semester = '5th' OR semester = '6th') ",$con));

$totalEE = mysql_num_rows(mysql_query("Select * from Students where department = 'EE' ",$con));
$firsttotalEE = mysql_num_rows(mysql_query("Select * from Students where department = 'EE' AND (semester = '1st' OR semester = '2nd') ",$con));
$secondtotalEE = mysql_num_rows(mysql_query("Select * from Students where department = 'EE' AND (semester = '3rd' OR semester = '4th') ",$con));
$thirdtotalEE = mysql_num_rows(mysql_query("Select * from Students where department = 'EE' AND (semester = '5th' OR semester = '6th') ",$con));

$totalME = mysql_num_rows(mysql_query("Select * from Students where department = 'ME' ",$con));
$firsttotalME = mysql_num_rows(mysql_query("Select * from Students where department = 'ME' AND (semester = '1st' OR semester = '2nd') ",$con));
$secondtotalME = mysql_num_rows(mysql_query("Select * from Students where department = 'ME' AND (semester = '3rd' OR semester = '4th') ",$con));
$thirdtotalME = mysql_num_rows(mysql_query("Select * from Students where department = 'ME' AND (semester = '5th' OR semester = '6th') ",$con));

$totalMM = mysql_num_rows(mysql_query("Select * from Students where department = 'MINNING' ",$con));
$firsttotalMM = mysql_num_rows(mysql_query("Select * from Students where department = 'MINNING' AND (semester = '1st' OR semester = '2nd') ",$con));
$secondtotalMM = mysql_num_rows(mysql_query("Select * from Students where department = 'MINNING' AND (semester = '3rd' OR semester = '4th') ",$con));
$thirdtotalMM = mysql_num_rows(mysql_query("Select * from Students where department = 'MINNING' AND (semester = '5th' OR semester = '6th') ",$con));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HOME</title>
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
          <a href="#">Wainganga Polytechnic, Sakoli</a>
        </li>
        <li class="breadcrumb-item active">Dashboard </li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <!-- <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div> -->
              <div class="mr-5 branch_name">Computer Science and Engg.</div>
              <div class="dropdown-divider"></div>
              <div class="mr-5">Total<span class="float-right"><?php echo($totalCS); ?></span></div>
              <div class="mr-5">First Year<span class="float-right"><?php echo($firsttotalCS); ?></div>
              <div class="mr-5">Second Year<span class="float-right"><?php echo($secondtotalCS); ?></span></div>
              <div class="mr-5">Third Year<span class="float-right"><?php echo($thirdtotalCS); ?></div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="text-center">View Details</span>
            </a> -->
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <!-- <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div> -->
              <div class="mr-5 branch_name">Civil Engineering</div>
              <div class="dropdown-divider"></div>
              <div class="mr-5">Total<span class="float-right"><?php echo($totalCE); ?></span></div>
              <div class="mr-5">First Year<span class="float-right"><?php echo($firsttotalCE); ?></div>
              <div class="mr-5">Second Year<span class="float-right"><?php echo($secondtotalCE); ?></span></div>
              <div class="mr-5">Third Year<span class="float-right"><?php echo($thirdtotalCE); ?></div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="text-center">View Details</span>
            </a> -->
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white  bg-success o-hidden h-100">
            <div class="card-body">
              <!-- <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div> -->
              <div class="mr-5 branch_name">Electrical Engineering</div>
              <div class="dropdown-divider"></div>
              <div class="mr-5">Total<span class="float-right"><?php echo($totalEE); ?></span></div>
              <div class="mr-5">First Year<span class="float-right"><?php echo($firsttotalEE); ?></div>
              <div class="mr-5">Second Year<span class="float-right"><?php echo($secondtotalEE); ?></span></div>
              <div class="mr-5">Third Year<span class="float-right"><?php echo($thirdtotalEE); ?></div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="text-center">View Details</span>
            </a> -->
          </div>
        </div>
        <div class="col-xl-2 col-sm-2 mb-2">
          &nbsp;
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white  bg-danger o-hidden h-100">
            <div class="card-body">
              <!-- <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div> -->
              <div class="mr-5 branch_name">Mechanical Engineering</div>
              <div class="dropdown-divider"></div>
              <div class="mr-5">Total<span class="float-right"><?php echo($totalME); ?></span></div>
              <div class="mr-5">First Year<span class="float-right"><?php echo($firsttotalME); ?></div>
              <div class="mr-5">Second Year<span class="float-right"><?php echo($secondtotalME); ?></span></div>
              <div class="mr-5">Third Year<span class="float-right"><?php echo($thirdtotalME); ?></div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="text-center">View Details</span>
            </a> -->
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white  bg-primary o-hidden h-100">
            <div class="card-body">
              <!-- <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div> -->
              <div class="mr-5 branch_name">Minning Engineering</div>
              <div class="dropdown-divider"></div>
              <div class="mr-5">Total<span class="float-right"><?php echo($totalMM); ?></span></div>
              <div class="mr-5">First Year<span class="float-right"><?php echo($firsttotalMM); ?></div>
              <div class="mr-5">Second Year<span class="float-right"><?php echo($secondtotalMM); ?></span></div>
              <div class="mr-5">Third Year<span class="float-right"><?php echo($thirdtotalMM); ?></div>
            </div>
            <!-- <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="text-center">View Details</span>
            </a> -->
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
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
    <!-- Logout Modal-->
    
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
    <!-- <script src="js/sb-admin-charts.min.js"></script> -->
  </div>
</body>

</html>
