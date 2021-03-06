<?php    
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: index.php');
  exit;
}
$id = $_GET['id'];
$books = mysql_query( "SELECT tblstudents.id,tblstudents.FullName,tblbooks.BookName,tblbooks.book_code,tblissuedbookdetails.IssuesDate,tblissuedbookdetails.ReturnDate,tblissuedbookdetails.id as id,tblissuedbookdetails.fine,tblissuedbookdetails.RetrunStatus from  tblissuedbookdetails join tblstudents on tblstudents.StudentId=tblissuedbookdetails.StudentId join tblbooks on tblbooks.book_code=tblissuedbookdetails.book_code where tblissuedbookdetails.id=:id",$con1);
$row = mysql_fetch_array($books);
if(isset($_POST['submit']))
{
            $id = $_GET['id'];
            $fine=$_POST['fine'];
            $rstatus=1;
            $sql = " update tblissuedbookdetails set 
            fine = '".$fine."', 
            RetrunStatus = '".$rstatus."', 
            ReturnDate = now() WHERE id = '".$id."' ";
            $record = mysql_query($sql,$con1);
            if ($record) {
              echo "Update";
            }
            else{
              echo "fail";
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
        <li class="breadcrumb-item active">Update issue Book</li>
      </ol>

      <div class="card card-register mx-auto mt-5">
      
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-9">
                <label for="name">Sudent Name</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="<?php if(isset($errors['name'])){ echo $errors['name']; }  ?>" value="<?php echo $row['FullName'];  ?>" >
              </div>
              <div class="col-md-3">
                <label for="book_code">Book Code</label>
                <input class="form-control" id="book_code" name="book_code" type="number" placeholder="<?php if(isset($errors['book_code'])){ echo $errors['book_code']; }  ?>" value="<?php echo $row['book_code'];  ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="author">Author Name</label>
                <input class="form-control" id="author" type="text" name="author"  placeholder="<?php if(isset($errors['author'])){ echo $errors['author']; }  ?>" value="<?php echo $row['author'];  ?>">
              </div>
              <div class="col-md-6">
                <label for="publication">Book Publication</label>
                <input class="form-control" id="publication" name="publication" type="text" placeholder="<?php if(isset($errors['publication'])){ echo $errors['publication']; }  ?>" value="<?php echo $row['publication'];  ?>">
              </div>
            </div>
          </div>
          
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
              <div class="col-md-6">
                <input type="number" class="form-control" name="book_price" placeholder="Book price" value="<?php echo $row['BookPrice'];  ?>" >
              </div>
              
            </div>
          </div>
         
          
          </div>
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-5" style="margin: 0px auto;">
              <input type="submit" id="submit" name="submit" class="btn btn-primary btn-block login-button" value="Update">
            </div>
            <div class="col-md-5" style="margin: 0px auto;">
              <a class="btn btn-primary btn-block login-button" href="manage-books.php">Cancel</a>
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

