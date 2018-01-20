<?php
include "perpustakaan/koneksi.php";
$sql = "SELECT nis, nama, spp FROM data_siswa";
$kueri = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
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
		<h1>Data SPP Siswa</h1>
	<table class="table table-condensed table-hover">
		<thead>
		<tr class="danger">
			<th>No Abs</th>
			<th>Nama</th>
			<th>Bayar SPP</th>
			<th>Keterangan</th>
		</tr>
		</thead>
		<tbody>
			<?php
			foreach ($kueri as $data):
			?>
			<tr>
				<td><?php echo $data['nis'];?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['spp'];?></td>
				<td><?php if ($data['spp'] < 100000){
					echo "Belum Lunas";
				}else{
					echo "Lunas";
				}?>
			</tr>
			<?php
		endforeach;
		?>
		</tbody>
	</table>
	</div>
</body>
</html>

