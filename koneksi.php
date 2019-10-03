<?php 

$koneksi = new mysqli('localhost','root','scind','ulangan');

if (!$koneksi) {
	echo 'Database tidak connect';
	exit();
}