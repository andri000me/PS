<?php
include "perpustakaan/koneksi.php";
$sql = "SELECT nis, nama, ttl, jk, alamat, tahun_ajaran, nama_ibu, ttl_ibu, nama_ayah, ttl_ayah FROM data_siswa";
$kueri = mysqli_query($koneksi, $sql);
?>
<html>
<head>
<title></title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="container">
<table class="table table-condensed table-hover">
	<h1>Data Siswa</h1>
<thead>
<tr class="danger">
	<th>No Absen</th>
	<th>Nama</th>
	<th>Tempat, Tanggal Lahir</th>
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>Tahun Ajaran</th>
	<th>Nama Ibu</th>
	<th>Nama Ayah</th>
</tr>
</thead>
<tbody>
	<?php
	foreach($kueri as $data):
	?>
	<tr>
		<td><?php echo $data['nis'];?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['ttl'];?></td>
		<td><?php echo $data['jk'];?></td>
		<td><?php echo $data['alamat'];?></td>
		<td><?php echo $data['tahun_ajaran'];?></td>
		<td><?php echo $data['nama_ibu'];?></td>
		<td><?php echo $data['nama_ayah']?></td>
	</tr>
	<?php
	endforeach;
	?>
</tbody>
</table>
</div>
</body>
</html>
