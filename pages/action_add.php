<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$token = $_POST['token'];
$link = $_POST['link'];

$insert = $db->insert("uji/$token", [
   "link"      => $_POST['link'],
   "komentar" => $_POST['komentar']
]);

echo "<script>alert('data saved');window.location='tables.php';</script>";
?>
