<?php    
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: index.php');
  exit;
}

if(isset($_POST['find']))
{
$select =  mysql_query("select * from students where department = '".$_POST['dept']."' AND semester = '".$_POST['sem']."' ",$con);
}
if (isset($_POST['save'])) {
  $sql = implode($_POST['attendance']);
  echo($sql);
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
  <title>Attendance</title>
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
          <a href="#">Wainganga Polytechnic, Sakoli</a>
        </li>
        <li class="breadcrumb-item active">Add Attendence</li>
      </ol>

      <div class="card card-register mx-auto mt-5">
      
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <select name="dept" class="form-control">
                  <option value="">Select department</option>
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
              <div class="col-md-2">
                <input type="submit" name="find" class="btn btn-primary btn-block login-button" value="Find">
              </div>
            </div>
          </div>
         
           
          </div>
          <div class="form-group" >
            <div class="col-md-4" style="margin: 0px auto;">
              <?php echo date("Y-m-d");?>
            </div>
          </div>
          <div class="card mb-3">
            <table class="table table-bordered">
              <tr>
                <th>Roll No.</th>
                <th>Name</th>
                <th>Attendance</th>
              </tr>
              <?php  
                
                while ($row1 = mysql_fetch_array($select)) {
              ?>
              <tr>
                <td><?php echo $row1["roll_no"]; ?></td>
                <td><?php echo $row1["name"]; ?></td>
                <td>
                  <input type="checkbox" name="attendance[]" value="present">P
                  <input type="checkbox" name="attendance[]" value="absent">A
                </td>
              </tr>
              <?php } ?>
            </table>
             
          </div>
          <div class="form-group">
            <div class="col-md-5" style="margin: 0px auto;">
              <input type="submit" id="save" name="save" class="btn btn-primary btn-block login-button" value="Submit">
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

