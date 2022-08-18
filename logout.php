<?php
session_start();
include("db/dbconn.php");
unset($_SESSION['IS_LOGIN']);
echo $_SESSION['IS_LOGIN'];
header('location:index.php');
die();
?>