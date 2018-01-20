<?php
if(isset($_GET['tampil'])) $tampil = $_GET['tampil'];
else $tampil = "welcome";

if($tampil == "welcome") include("welcome.php");
elseif($tampil == "logout") include("logout.php");

elseif($tampil == "lihat")
    include("home.php");
elseif($tampil == "tambah")
    include("tambah.php");
elseif($tampil == "logout")
    include("logout.php");

else echo "Tidak Tersedia";
?>
