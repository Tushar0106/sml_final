<?php
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}


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
        <li class="breadcrumb-item active">Add Book</li>
      </ol>
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Books</h4>
    </div>
     

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Books Listing
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student Enrollment</th>
                                            <th>Book Name</th>
                                            <th>Book Code </th>
                                            <th>Issued Date</th>
                                            <th>Return Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$sql = mysql_query("SELECT tblstudents.id,tblstudents.FullName,tblbooks.BookName,tblbooks.book_code,tblissuedbookdetails.IssuesDate,tblissuedbookdetails.ReturnDate from  tblissuedbookdetails join tblstudents on tblstudents.StudentEnrollment=tblissuedbookdetails.StudentEnrollment join tblbooks on tblbooks.id=tblissuedbookdetails.book_code order by tblissuedbookdetails.id desc",$con1);
// $query = $dbh -> prepare($sql);
// $query->execute();
//$results=mysql_query( "SELECT * from  tblissuedbookdetails ",$con1);
$cnt=1;
 
              
              while ($row1 = mysql_fetch_array($sql)) {
            ?>                                           
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo($cnt); ?><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo $row1["FullName"]; ?></td>
                                            <td class="center"><?php echo $row1["BookName"]; ?></td>
                                            <td class="center"><?php echo $row1["book_code"]; ?></td>
                                            <td class="center"><?php echo $row1["IssuesDate"]; ?></td>
                                            <td class="center"><?php echo $row1["ReturnDate"]; ?></td>
                                            <td class="center">

                                            <a href="update-issue-book.php?id=<?php echo $row1["id"];?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Update</button> 
                                          <!-- <a href="manage-books.php?del=<?php echo htmlentities($result->bookid);?>" onclick="return confirm('Are you sure you want to delete?');"" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button> -->
                                            </td>
                                        </tr>
 <?php $cnt++;} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


            
    </div>
    </div>

     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
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
