<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$status=$_POST['status'];
$kewarganegaraan=$_POST['kewarganegaraan'];
$umur=$_POST['umur'];
$hobby=$_POST['hobby'];
$agama=$_POST['agama'];
$akses=$_POST['akses'];
$query="insert into anyarneh (username,password,nama,alamat,email,status,kewarganegaraan,umur,hobby,agama,akses) values ('$username','$password','$nama','$alamat','$email','$status','$kewarganegaraan','$umur','$hobby','$agama','$akses')";
$sql=mysql_query($query,$koneksi);
if ($sql) {
	# code...
	echo"<script>
	alert('input berhasil');
	windows.location.assign('daftar.php');
	</script>";
}
else{
	echo mysql_errno($koneksi) . ":" . mysql_error($koneksi);
	echo"<script>
	</script>";
}	
?>