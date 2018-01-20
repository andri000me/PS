<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$kueri = mysqli_query($koneksi, $sql);
$hasil = mysqli_fetch_assoc($kueri);

if($hasil != null){
	if($password==$hasil['password']){
		$_SESSION['username'] = $hasil;
		header("Location: ../admin/utama.php");
	}else{
		header("Location: ../login.php");
	}

}
 ?>
