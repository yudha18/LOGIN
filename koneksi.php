<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "anyar";

$koneksi = mysql_connect($db_host, $db_user, $db_pass);
if(!$koneksi) die("Gagal melakukan koneksi ke MySQL");
else {
//memilih database 
	mysql_select_db($db_name, $koneksi)
	//jika database tidak ditemukan
	or die ("database tidak ditemukan");
}
?>