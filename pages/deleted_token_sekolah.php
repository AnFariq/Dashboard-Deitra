<?php
include("config.php");
include("firebaseRDB.php");

$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
if($id != ""){
   $delete = $db->delete("tabel_sekolah", $id);
   echo "<script>alert('Data Delete.');window.location='tables.php';</script>";
}
