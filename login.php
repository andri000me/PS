<?php
session_start();
if(isset($_SESSION['user'])){
	header("Location: admin/home.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="images/png" href="./root/img/blc.png">
	<title></title>
<style type="text/css">
	body{
	background-color: red;
}
img{
	box-shadow: 10px 10px 50px black;
	margin-bottom: 20px;
}
img:hover{
	box-shadow: none;
}
.form{
	background: red; /*memberi warna pada background*/
	border-radius: 5px;/*border-radius:membuat lengkungan pada pinggirnya*/
	margin: auto; /*membuat rata kanan dan kiri*/
	color: white; /*memberi warna pada teksnya*/
	width: 400px; /*mengatyyr lebar pada form*/
	height: 200px; /*mengatur lebar (atas ke bawah)*/
	padding: 10px 22px; /*mengatur jarak didalam bagian tag form(yang pertama atas dan bawah, yang kedua kiri dan kanan*/
	/*border: 2px solid black;....solid, dotted. (2px adalah ukuran border), (solid adalah tegak lurus), (black adalah warnanye)
	/*box-shadow: 10px 10px 50px black;....value pertama adalah sisi miringnya, kedua adalah bawahnya, ketiga adalah kepudarannya, black adalah warnanya*/
}
.form:hover{
	box-shadow: 10px 10px 60px black;
}
.btn{
	width: auto;
	color: red;
	border: none;/*menghilangi garis tepi pada form*/
	cursor: pointer;/*memberi efek saat diklik*/
	padding: 10px;/*mengatur ukuran button pada form*/
}
.btn-submit{
	background: white;
	padding: 10px 25px;
	transition: ease-in 0.5s;
	-o-transition: ease-in 0.5s; /*untuk opera*/
	-webkit-transition: ease-in 0.5s; /*untuk chrome browser*/
	-moz-transition: ease-in 0.5s; /*untuk browser mozilla*/

}
.btn-submit:hover{
	background: red;
	color: white;
	box-shadow: 5px 5px 20px black;
}
</style>
</head>
<body>
<form method="post" name="form_login" action="perpustakaan/proses.php" id="form_login" style="margin-top: 120px;">
	<table class="form">
		<tr>
			<td colspan="2">
				<h1 align="center" style="font-family: Bebas;">Login Aplikasi Pendataan Siswa</h1>
				<center><img src="assets/img/smk1mejayan.png" width="100px" height="100px"></center>
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username" placeholder="Masukkan Username" required/>
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" placeholder="Masukkan Password" required/>
			</td>
		</tr>
		<tr style="height: 10px"></tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" name="login" id="login" value="login" class="btn btn-submit" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>