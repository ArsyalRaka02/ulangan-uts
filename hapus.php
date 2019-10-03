<?php 

include 'koneksi.php';

$id = $_POST['id'];
$koneksi->query("DELETE FROM anggota WHERE id_anggota='$id'");

 ?>