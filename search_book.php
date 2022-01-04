<?php   
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}
if (isset($_POST['search'])) {
  $find = $_POST['name'];
  $select =  mysql_query("select * from books where name LIKE '%$find%' OR (department = '".$_POST['dept']."' AND semester = '".$_POST['sem']."' AND author = '".$_POST['author']."') ");
  $row = mysql_num_rows($select);
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
  <title>Search Books</title>
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
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

      <form method="POST" action="">
        <div class="card mb-3">
          <div class="card-body view_pro" style="text-align: center">
           <div class="form-group">
                <div class="form-row">
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
                    <input class="form-control" type="text" name="author" placeholder="Please enter author name">
                  </div>
                  <div class="col-md-3">
                    <input class="form-control" type="text" name="name" placeholder="Please enter book name">
                  </div>
                  <div class="col-md-2">
                    <input type="submit" id="search" name="search" class="btn btn-primary btn-block" value="Search">
                  </div>
                </div>
            </div>
        </div>
      </div>
      </form>
      <div class="card mb-3">
          <table class="table table-bordered">
            <tr>
              <th>Sr.No.</th>
              <th>Title</th>
              <th>Author</th>
              <th>Publication</th>
              <th>Book Code</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Description</th>
            </tr>
            <?php  
              
              while ($row1 = mysql_fetch_array($select)) {
            ?>
            <tr>
              <td><?php echo $row1["id"]; ?></td>
              <td><?php echo $row1["name"]; ?></td>
              <td><?php echo $row1["author"]; ?></td>
              <td><?php echo $row1["publication"]; ?></td>
              <td><?php echo $row1["book_code"]; ?></td>
              <td><?php echo $row1["department"]; ?></td>
              <td><?php echo $row1["semester"]; ?></td>
              <td><?php echo $row1["description"]; ?></td>
            </tr>
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
