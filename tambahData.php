<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama_anggota = $_POST['nama_anggota'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
$result['pesan']="";

if ($nama_anggota == " ") {
	$result['pesan']="nama anggota tidak boleh kosong";	
}elseif ($jk == " ") {
	$result['pesan']="Jenis Kelamin tidak boleh kosong";
}elseif ($alamat == " ") {
	$result['pesan']="Alamat tidak boleh kosong";
}elseif ($no_telpon == " ") {
	$result['pesan']="no Telpon tidak boleh kosong";
}else {
	$queryData = $koneksi->prepare("INSERT INTO anggota VALUES('$id','$nama_anggota','$jk','$alamat','$no_telpon')");
	if ($queryData->execute()) {
		$result['pesan']="data sudah di tambahkan";
	}else{
		$result['pesan']="data gagal di tambahkan";
	}

}
echo json_encode($result);