<?php
session_start();
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pymerch";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("connection error");
?>