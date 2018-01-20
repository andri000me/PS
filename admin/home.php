<?php
include "../perpustakaan/koneksi.php";
$sql = "SELECT nis, nama, ttl, jk, alamat, tahun_ajaran, nama_ibu, ttl_ibu, nama_ayah, ttl_ayah, kelas, masuk, keluar, spp FROM data_siswa";
$kueri = mysqli_query($koneksi, $sql);

?>
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
	<h1 style="font-family: Pacifico;">Pendataan Siswa</h1>
	<br><br>	
	<table class="table table-condensed table-hover">
		<thead>
			<tr class="danger">
				<th>No</th>
				<th>Nama</th>
				<th>TTL</th>
				<th>JK</th>
				<th>Alamat</th>
				<th>Tahun Ajaran</th>
				<th>Nama Ibu</th>
				<th>TTL Ibu</th>
				<th>Nama Ayah</th>
				<th>TTL Ayah</th>
				<th>Kelas</th>
				<th>Masuk Sekolah</th>
				<th>Keluar sekolah</th>
				<th>Bayar SPP</th>
				<th colspan="2">Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($kueri as $data):
			?>
			<tr>
				<td>
					<?php echo $data['nis'];?>
				</td>
				<td>
					<?php echo $data['nama'];?>
				</td>
				<td>
					<?php echo $data['ttl'];?>
				</td>
				<td>
					<?php echo $data['jk'];?>
				</td>
				<td>
					<?php echo $data['alamat'];?>
				</td>
				<td>
					<?php echo $data['tahun_ajaran'];?>
				</td>
				<td>
					<?php echo $data['nama_ibu'];?>
				</td>
				<td>
					<?php echo $data['ttl_ibu'];?>
				</td>
				<td>
					<?php echo $data['nama_ayah'];?>
				</td>
				<td>
					<?php echo $data['ttl_ayah'];?>
				</td>
				<td>
					<?php echo $data['kelas'];?>
				</td>
				<td>
					<?php echo $data['masuk'];?>
				</td>
				<td>
					<?php echo $data['keluar'];?>
				</td>
				<td>
					<?php echo $data['spp'];?>
				</td>
				<td><a href="edit.php?id=<?php echo $data['nis'];?>" class="btn btn-primary"><span class="fa fa-pencil-square-o"></span></a></td>
				<td><a href="hapus.php?id=<?php echo $data['nis'];?>" class="btn btn-danger"><span class="fa fa-trash-o"></span></a></td>
			</tr>
			<?php
		endforeach;
		?>
		</tbody>
	</table>
</div>
</body>
</html>