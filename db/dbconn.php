<?php
// session_start();
$server = "localhost";
$user = "root";
$password = "";
$db = "sm";

if(!$con = mysqli_connect($server,$user,$password,$db))
{

	die("failed to connect!");
}
