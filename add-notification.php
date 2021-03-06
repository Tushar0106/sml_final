<?php    
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: index.php');
  exit;
}

if(isset($_POST['submit']))
{
           $src = $_FILES['file']['tmp_name'];
        $dest = "images/avatar/".$_FILES['file']['name'];
        if (move_uploaded_file($src, $dest)) {
          $_POST['file'] = $_FILES['file']['name'];
            $sql = " insert into notification set 
            title = '".$_POST['name']."', 
            file = '".$_POST['file']."', 
            created = now(), 
            modified = now() ";
            $record = mysql_query($sql,$con);
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
        <li class="breadcrumb-item active">Add Notificatin</li>
      </ol>

      <div class="card card-register mx-auto mt-5">
      
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="name">Title</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php if(isset($errors['name'])){ echo $errors['name']; }  ?>">
              </div>
            </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="name">Notice File</label>
                <input class="form-control" type="file"  name="file" accept="image/*">
                
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" value="Add">
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
          <small>Copyright ?? Your Website 2018</small>
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

