<?php   
require_once('config/db.php');
if (!isset($_SESSION['slam']['id'])) {
  header('location: login.php');
  exit;
}