<?php
session_start();
include ("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM login WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
if ($password == $data['password'])
{
	?>
		<script language="javascript">
			document.location='session.php';
		</script>
	<?php
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
	mysql_error();
}
else
{
	?>
		<script language="javascript">
			alert("Gagal Login, Coba Lagi!");
			document.location='login.php';
		</script>
	<?php
}
?>