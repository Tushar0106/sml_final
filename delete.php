<?php
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}

$id = $_GET['id'];
echo $id;
mysql_query("delete from students WHERE id='$id' ",$con);
header('location: manage_students.php');