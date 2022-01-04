<?php
require_once('config/db.php');
if (isset($_SESSION['slam']['id'])) {
	unset($_SESSION['slam']['password']);
    header('location:login.php');
    //exit;
}
?>