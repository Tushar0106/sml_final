<?php   
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}
if (isset($_POST['search'])) {
 // $find = $_POST['name'];
  $_SESSION['dept']=$_POST['dept'];
  $_SESSION['sem']=$_POST['sem'];
  $select =  mysql_query("select * from students where department = '".$_POST['dept']."' AND semester = '".$_POST['sem']."' ",$con);
  $row = mysql_num_rows($select);  
}

if (isset($_POST['save'])) {
  $date = date("Y-m-d");
  $exist = mysql_query("select * from attendance where date = '".$date."' AND dep = '".$_SESSION['dept']."' AND sem = '".$_SESSION['sem']."' ", $con);
  $d = mysql_num_rows($exist);
  if ($d > 0) {
    echo "Attendance aleready done";
  }
  else{
                $att=serialize($_POST['attendence']);
                //print_r($att);
                //echo $att;
                
     $sql = "insert into attendance set stud_id = '".$att."' , dep = '".$_SESSION['dept']."', sem = '".$_SESSION['sem']."', date = '".$date."' ";
    $sql_r = mysql_query($sql,$con);
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
  <title>Attendance</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-datetimepicker.css">
  <script type="text/javascript">
    
  </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php  require('include/tnav.html');  ?>
  <div class="content-wrapper">
    <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            
        </div>
        
    </div>
</div>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Attendance</li>
      </ol>

      <form method="POST" action="">
        <div class="card mb-3">
          <div class="card-body view_pro" style="text-align: center">
           <div class="form-group">
                <div class="form-row">
                 <div class="col-md-2">
                   <input type="text" name="date" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly="true">
                 </div>
                 <div class="col-md-3">
                    <select name="dept" class="form-control">
                      <option value="">Select department</option>
                      <option value="CW">Computer Science</option>
                      <option value="CE">Civil Engineering</option>
                      <option value="EE">Electrical Engineering</option>
                      <option value="ME">Mechanical Engineering </option>
                      <option value="MINNING">Minning</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <select name="sem" class="form-control">
                      <option value="">Select semester</option>
                      <option value="1st">First</option>
                      <option value="2nd">Second</option>
                      <option value="3rd">Third</option>
                      <option value="4th">Fourth</option>
                      <option value="5th">Fifth</option>
                      <option value="6th">Sixth</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <input type="submit" id="search" name="search" class="btn btn-primary btn-block" value="Search">
                  </div>
                </div>
            </div>
        </div>
      </div>
      <div class="card mb-3">
          <table class="table table-bordered">
            <tr>
              <th>Attendence</th>
              <th>Name</th>
              <th>Roll Number</th>
              <th>Department</th>
              <th>Semester</th>
              
            </tr>
            <?php  
              if (isset($select)) {
              while ($row1 = mysql_fetch_array($select)) {
                $name = $row1["name"];
                $roll_no = $row1["roll_no"];
                $department = $row1["department"];
                $semester = $row1['semester'];
                //$present = $_POST['attendence'];
                $date = date("Y-m-d");

            ?>
            <tr>
              <td><input type="checkbox" name="attendence[]" value="<?php echo $row1['id']; ?>" ></td>
              <td><?php echo $name;  ?></td>
              <td><?php echo $roll_no; ?></td>
              <td><?php echo $department; ?></td>
              <td><?php echo $semester; ?></td>
              
            </tr>
            <?php
             }

             } ?>
          </table>
      </div>
      <div class="col-md-2">
        <input type="submit" id="save" name="save" class="btn btn-primary btn-block" value="Save">
      </div>
      </form>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script type="text/javascript" src="bootstrap-datetimepicker.js"></script>
   
</div>
</body>

</html>
