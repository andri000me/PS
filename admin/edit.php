<?php
include "../perpustakaan/koneksi.php";

$nis = isset($_GET['id']) ? $_GET['id'] : '';

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

	$sql = "UPDATE data_siswa SET nis='$nis', nama='$nama', ttl='$ttl', jk='$jk', alamat='$alamat', tahun_ajaran='$tahun_ajaran', nama_ibu='$nama_ibu', ttl_ibu='$ttl_ibu', nama_ayah='$nama_ayah', ttl_ayah='$ttl_ayah', kelas='$kelas', masuk='$masuk', keluar='$keluar', spp='$spp' WHERE nis='$nis'";
	$query = mysqli_query($koneksi, $sql);
	header("location: utama.php?tampil=lihat");
}

$sql = "SELECT nis, nama, ttl, jk, alamat, tahun_ajaran, nama_ibu, ttl_ibu, nama_ayah, ttl_ayah, kelas, masuk, keluar, spp FROM data_siswa WHERE nis='$nis'";
$kueri = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($kueri);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/bootstrap.min.css">
<script src="../assets/bootstrap/bootstrap.min.js"></script>
<script src="../assets/bootstrap/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="edit.php">
			<div class="form-group">
				<label>No Absen :</label>
					<input class="form-control" type="text" name="nis" value=<?php echo $data['nis'];?>>
			</div>
			<div class="form-group">
				<label>Nama :</label>
					<input class="form-control" type="text" name="nama" value=<?php echo $data['nama'];?>>
			</div>
			<div class="form-group">
				<label>Tampat, Tanggal Lahir</label>
					<input class="form-control" type="text" name="ttl" value=<?php echo $data['ttl'];?>>
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<div class="radio">
					<label><input type="radio" name="jk" value="Perempuan" selected>Perempuan</label>
					<label><input type="radio" name="jk" value="Laki - Laki" selected>Laki - Laki</label>
				</div>
			</div>
			<div class="form-group">
					<label>Alamat :</label>
					<input class="form-control" type="textares" name="alamat" value=<?php echo $data['alamat'];?>>
			</div>
			<div class="form-group">
					<label>Tahun Ajaran</label>
					<input class="form-control" type="text" name="tahun_ajaran" value=<?php echo $data['tahun_ajaran'];?>>
			</div>
			<div class="form-group">
					<label>Nama Ibu :</label>
					<input class="form-control" type="text" name="nama_ibu" value=<?php echo $data['nama_ibu'];?>>
			</div>
			<div class="form-group">
					<label>Tanggal Lahir Ibu :</label>
					<input class="form-control" type="date" name="ttl_ibu" value=<?php echo $data['ttl_ibu'];?>>
			</div>
			<div class="form-group">
					<label>Nama Ayah :</label>
					<input class="form-control" type="text" name="nama_ayah" value=<?php echo $data['nama_ayah'];?>>
			</div>
			<div class="form-group">
					<label>Tanggal Lahir Ayah</label>
					<input class="form-control" type="date" name="ttl_ayah" value=<?php echo $data['ttl_ayah'];?>>
			</div>
			<div class="form-group">
					<label>Kelas :</label>
					<input class="form-control" type="text" name="kelas" value=<?php echo $data['kelas'];?>>
			</div>
			<div class="form-group">
					<label>Masuk :</label>
					<input class="form-control" type="date" name="masuk" value=<?php echo $data['masuk'];?>>
			</div>
			<div class="form-group">
					<label>Keluar :</label>
					<input class="form-control" type="date" name="keluar" value=<?php echo $data['keluar'];?>>
			</div>
			<div class="form-group">
					<label>Bayar SPP :</label>
					<input class="form-control" type="text" name="spp" value=<?php echo $data['spp'];?>>
			</div>

					<input type="submit" class="btn btn-primary" name="submit" value="Edit">
			</div>
		</form>
	</div>

</body>
</html>
