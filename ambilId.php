<?php 

include 'koneksi.php';

$id = $_POST['id'];
$result = array();

$queryResult = $koneksi->query("SELECT * FROM anggota WHERE id_anggota=".$id);
$fecthData = $queryResult->fetch_assoc();
$result = $fecthData;

echo json_encode($result);

 ?>