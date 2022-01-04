<?php
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}

$id = $_GET['id'];
echo $id;
mysql_query("delete from tblbooks WHERE id='$id' ",$con1);
header('location: manage-books.php');