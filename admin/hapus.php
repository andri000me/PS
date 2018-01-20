<?php
include "../perpustakaan/koneksi.php";

$nis = $_GET['id'];

$sql = "DELETE FROM data_siswa WHERE nis='$nis'";
$kueri = mysqli_query($koneksi, $sql);

header("Location: utama.php?tampil=lihat");
?>
