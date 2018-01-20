<?php
include "../perpustakaan/koneksi.php";

if(isset($_POST['submit'])){
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$ttl = $_POST['ttl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$tahun_ajaran = $_POST['tahun_ajaran'];
	$nama_ibu = $_POST['nama_ibu'];
	$ttl_ibu = $_POST['ttl_ibu'];
	$nama_ayah = $_POST['nama_ayah'];
	$ttl_ayah = $_POST['ttl_ayah'];
	$kelas = $_POST['kelas'];
	$masuk = $_POST['masuk'];
	$keluar = $_POST['keluar'];
	$spp = $_POST['spp'];

$sql = "INSERT INTO data_siswa (nis, nama, ttl, jk, alamat, tahun_ajaran, nama_ibu, ttl_ibu, nama_ayah, ttl_ayah, kelas, masuk, keluar, spp) VALUES ('$nis','$nama','$ttl','$jk','$alamat','$tahun_ajaran','$nama_ibu','$ttl_ibu','$nama_ayah','$ttl_ayah','$kelas','$masuk','$keluar','$spp')";
$kueri = mysqli_query($koneksi, $sql);
//header("location: home.php");
var_dump($kueri);
if($kueri){
	echo "Berhasil";
}else{
	echo "GAgal";
	echo mysqli_error($koneksi);
}
}
?>

<html>
<head>
	<title>Tambah Data Siswa</title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
<script src="../assets/bootstrap/bootstrap.min.js"></script>
<script src="../assets/bootstrap/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">	
</head>
<body>
	<div class="container">
		<h2>Tambah Data Siswa</h2>
		<form method="POST" class="form-horizontal">
			<div class="form-group">
				<label>No Absen :</label>
				<input class="form-control" type="text" name="nis">
			</div>
			<div class="form-group">
				<label>Nama :</label>
				<input class="form-control" type="text" name="nama">
			</div>
			<div class="form-group">
				<label>Tempat, Tanggal Lahir :</label>
				<input class="form-control" type="text" name="ttl">
			</div>
			<div class="form-group">
					<label>Jenis Kelamin</label>
			<div class="radio">
				<label><input type="radio" name="jk" value="Perempuan" selected>Perempuan</label>
				<label><input type="radio" name="jk" value="Laki - Laki">Laki - Laki</label>
				</div>
			</div>
			<div class="form-group">
				<label>Alamat :</label>
				<input class="form-control" type="textarea" name="alamat">
			</div>
			<div class="form-group">
					<label>Tahun Ajaran :</label>
					<input class="form-control" type="text" name="tahun_ajaran">
			</div>
			<div class="form-group">
					<label>Nama Ibu :</label>
				<input class="form-control" type="text" name="nama_ibu">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir Ibu :</label>
				<input class="form-control" type="date" name="ttl_ibu">
			</div>
			<div class="form-group">
				<label>Nama Ayah :</label>
				<input class="form-control" type="text" name="nama_ayah">
			</div>
			<div class="form-group">
				<label>Tanggal Lahir Ayah :</label>
				<input class="form-control" type="date" name="ttl_ayah">
			</div>
			<div class="form-group">
				<label>Kelas :</label>
				<input class="form-control" type="text" name="kelas">
			</div>
			<div class="form-group">
				<label>Masuk Sekolah :</label>
				<input class="form-control" type="date" name="masuk">
			</div>
			<div class="form-group">
				<label>Keluar Sekolah :</label>
				<input class="form-control" type="date" name="keluar">
			</div>
			<div class="form-group">
				<label>Bayar SPP :</label>
				<input class="form-control" type="text" name="spp">
			</div>
			
					<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
				
			</table>
		</form>
	</div>

</body>
</html>