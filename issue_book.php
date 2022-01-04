<?php
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: index.php');
  exit;
}
if(isset($_POST['issue']))
{
$studentid=$_POST['StudentEnrollment'];
$bookid=$_POST['booikid'];
// $sql="INSERT INTO  tblissuedbookdetails(StudentID,BookId) VALUES(:studentid,:bookid)";
// $query = $dbh->prepare($sql);
// $query->bindParam(':studentid',$studentid,PDO::PARAM_STR);
// $query->bindParam(':bookid',$bookid,PDO::PARAM_STR);
// $query->execute();
$sql = " insert into tblissuedbookdetails set 
            StudentEnrollment = '".$studentid."', 
            book_code = '".$bookid."',
            IssuesDate = now(), 
            ReturnDate = now() ";
            $record = mysql_query($sql,$con1);
            if ($record) {
                echo "string";
            }
          }
// $lastInsertId = $dbh->lastInsertId();
// if($lastInsertId)
// {
// $_SESSION['msg']="Book issued successfully";
// header('location:manage-issued-books.php');
// }
// else 
// {
// $_SESSION['error']="Something went wrong. Please try again";
// header('location:manage-issued-books.php');
// }

// }

    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Books</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script>
// function for get student name
// function getstudent() {
// $("#loaderIcon").show();
// jQuery.ajax({
// url: "get_student.php",
// data:'StudentEnrollment='+$("#StudentEnrollment").val(),
// type: "POST",
// success:function(data){
// $("#get_student_name").html(data);
// $("#loaderIcon").hide();
// },
// error:function (){}
// });
// }

//function for book details
// function getbook() {
// $("#loaderIcon").show();
// jQuery.ajax({
// url: "get_book.php",
// data:'bookid='+$("#bookid").val(),
// type: "POST",
// success:function(data){
// $("#get_book_name").html(data);
// $("#loaderIcon").hide();
// },
// error:function (){}
// });
// }

</script>
<style type="text/css">
  .others{
    color:red;
}
</style>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<?php  require('include/nav.html');  ?>
    <div class="content-wrapper">
         <div class="container">
            <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Wainganga Polytechnic, Sakoli
</a>
        </li>
        <li class="breadcrumb-item active">Issue a New Book</li>
      </ol>
        
           <div class="row">
<div class="col-md-10 col-sm-6 col-xs-12 col-md-offset-1"">
<div class="panel panel-info">
<!-- <div class="panel-heading">
Issue a New Book
</div> -->
<div class="panel-body">
<form role="form" method="post">

<div class="form-group">
<label>Srtudent Enrollment Number<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="StudentEnrollment" id="StudentEnrollment" onBlur="getstudent()" autocomplete="off"  required />
</div>

<div class="form-group">
<span id="get_student_name" style="font-size:16px;"></span> 
</div>





<div class="form-group">
<label>Book Code or Book Title<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="booikid" id="bookid" onBlur="getbook()"  required="required" />
</div>

 <div class="form-group">

  <select  class="form-control" name="bookdetails" id="get_book_name" readonly>
   
 </select>
 </div>
<button type="submit" name="issue" id="submit" class="btn btn-info">Issue Book </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>


            
    </div>
    </div>

     <!-- CONTENT-WRAPPER SECTION END-->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>


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
</body>
</html>
