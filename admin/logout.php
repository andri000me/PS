<?php
session_start();
session_destroy();
echo"<meta http-equiv='refresh' content='1; url=../index.php'>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		alert("Anda Telah Keluar");
	</script>

</body>
</html>