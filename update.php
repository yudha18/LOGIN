<?php 
session_start();
include "koneksi.php";
$idnew=$_GET['id'];
$query = "SELECT * FROM anyarneh WHERE id =".$idnew; //get the data that will be updated
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
?>
<form action="updating.php" method="post">
		Id : <input type="text" name="id" value="<?php echo $data['id'];?>">
		<br>
		<br>
		username : <input type="text" name="nama">
		<br>
		<br>
		password : <input type="text"  name="alamat">
		<br>
		<br>
		nama : <input type="text"  name="usia">
		<br>
		<br>
		alamat : <input type="text" name="nama">
		<br>
		<br>
		email : <input type="text" name="nama">
		<br>
		<br>
		status : <input type="text" name="nama">
		<br>
		<br>
		kewarganegaraan : <input type="text" name="nama">
		<br>
		<br>
		umur : <input type="text" name="nama">
		<br>
		<br>
		hobby : <input type="text" name="nama">
		<br>
		<br>
		agama : <input type="text" name="nama">
		<br>
		<br>
		akses : <input type="text" name="nama">
		<br>
		<br>
		<input type="submit" name="tambah" value="Update ke database">
	</form>
<br><h2><a href="admin.php">Kembali</a>
