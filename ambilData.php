<?php
include 'koneksi.php';

$resultData = $koneksi->query("SELECT * FROM anggota");
$result = array();

while ($fecthData = $resultData->fetch_assoc()){
    $result[]=$fecthData; 
}
echo json_encode($result);