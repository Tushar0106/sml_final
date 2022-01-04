<?php   
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: index.php');
  exit;
}
$firstyear = mysql_query("Select * from Students where semester = '1st' OR semester = '2nd' ",$con);
$secondyear = mysql_query("Select * from Students where semester = '3rd' OR semester = '4th' ",$con);
$thirdyear = mysql_query("Select * from Students where semester = '5th' OR semester = '6th' ",$con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>All Students</title>
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
  <?php  require('include/lnav.html');  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Wainganga Polytechnic, Sakoli</a>
        </li>
        <li class="breadcrumb-item active">All Students</li>
      </ol>

      <div class="card mb-3">
          <table class="table table-striped table-bordered table-hover" >
            <thead>
            <tr>
              <th>Sr.No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Gender</th>
              <th>Photo</th>
            </tr>
          </thead>
            <tr>
              <td colspan="6" style="text-align: center;" class="card-header"><b>First Year Students</b></td>
            </tr>
            <?php  
              
              while ($row1 = mysql_fetch_array($firstyear)) {
            ?>
            <tbody>
            <tr>
              <td><?php echo $row1["id"]; ?></td>
              <td><?php echo $row1["name"]; ?></td>
              <td><?php echo $row1["email"]; ?></td>
              <td><?php echo $row1["mobile"]; ?></td>
              <td><?php echo $row1["gender"]; ?></td>
              <td><img src="images/avatar/<?php echo $row1["avatar"]; ?>" width="50px" height="50px"></td>
            </tr>
          </tbody>
            <?php } ?>
            <thead>
            <tr>
              <td colspan="6" style="text-align: center;" class="card-header"><b>Second Year Students</b></td>
            </tr>
          </thead>
            <?php  
              
              while ($row1 = mysql_fetch_array($secondyear)) {
            ?>
            <tbody>
            <tr>
              <td><?php echo $row1["id"]; ?></td>
              <td><?php echo $row1["name"]; ?></td>
              <td><?php echo $row1["email"]; ?></td>
              <td><?php echo $row1["mobile"]; ?></td>
              <td><?php echo $row1["gender"]; ?></td>
              <td><img src="images/avatar/<?php echo $row1["avatar"]; ?>" width="50px" height="50px"></td>
            </tr>
          </tbody>
            <?php } ?> 
            <thead>
            <tr>
              <td colspan="6" style="text-align: center;" class="card-header"><b>Third Year Students</b></td>
            </tr>
          </thead>
            <?php  
              
              while ($row1 = mysql_fetch_array($thirdyear)) {
            ?>
            <tbody>
            <tr>
              <td><?php echo $row1["id"]; ?></td>
              <td><?php echo $row1["name"]; ?></td>
              <td><?php echo $row1["email"]; ?></td>
              <td><?php echo $row1["mobile"]; ?></td>
              <td><?php echo $row1["gender"]; ?></td>
              <td><img src="images/avatar/<?php echo $row1["avatar"]; ?>" width="50px" height="50px"></td>
            </tr>
          </tbody>
            <?php } ?>


          </table>
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  </div>
</body>

</html>
