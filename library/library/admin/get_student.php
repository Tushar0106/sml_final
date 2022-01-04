<?php 
// require_once('config/db.php');
// if (!isset($_SESSION['slam']['id'])) {
//   header('location: index.php');
//   exit;
// }
if(!empty($_POST["StudentEnrollment"])) {
  $studentid= strtoupper($_POST["StudentEnrollment"]);
 
    $sql ="SELECT FullName,Status FROM tblstudents WHERE StudentEnrollment=:StudentEnrollment";
$query= $dbh -> prepare($sql);
$query-> bindParam(':StudentEnrollment', $studentid, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
foreach ($results as $result) {
if($result->Status==0)
{
echo "<span style='color:red'> Student ID Blocked </span>"."<br />";
echo "<b>Student Name-</b>" .$result->FullName;
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else {
?>


<?php  
echo htmlentities($result->FullName);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
 else{
  
  echo "<span style='color:red'> Invaid Student Id. Please Enter Valid Student id .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
}
}



?>
