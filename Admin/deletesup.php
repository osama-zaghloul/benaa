<?php
include_once "../supplier.php";
$sup = new supplier();
$sup->Deletesup($_GET['supId']);
$dir = "../images/supimages/";
$img = $_GET['supId'];
$fdir = $dir . $img . ".jpg";
unlink($fdir);
header('location:index.php');

?>