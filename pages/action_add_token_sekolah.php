<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$token = $_POST['token'];
$komentar = $_POST['komentar'];

$insert = $db->insert("tabel_sekolah/$token", [
   "komentar" => $_POST['komentar']
]);

echo "<script>alert('data saved');window.location='tables.php';</script>";
?>
