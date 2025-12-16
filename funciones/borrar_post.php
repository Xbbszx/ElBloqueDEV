<?php
session_start();
require_once '../config/db_connect.php';
$tucuenta = $_SESSION['user'];
$tuid = $_SESSION['id'];

$bor = $_GET['postbar'];

print $bor;
?>