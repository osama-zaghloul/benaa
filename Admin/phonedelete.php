<?php
include_once "../phoneclass.php";
$phone = new phone();
$phone->Deleteph($_GET['supId']);
header('location:supphone.php');
?>
