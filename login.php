<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from anyarneh where username='$username' and password='$password' ");
$data=mysql_fetch_object($query);

if ($query) {
	# code...
	$_SESSION['username']=$username;
	if($data->akses=='admin')
	echo "<script>
		alert('Selamat anda berhasil login');
		window.location.assign('admin.php');
	</script>";
	elseif ($data->akses=='user') {
		# code...
		echo "<script>
		alert('Selamat anda berhasil login');
		window.location.assign('pengunjung.php');
		</script>";
	}
	?> 
	<?php
}
else{
	?>Anda gagal login, silahkan <a href="form.php">halaman login<a><?php
	echo mysql_error();
}