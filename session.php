<?php
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
	if ($_SESSION['level'] == "admin")
   {
	   ?>
		<script language="javascript">
			alert("Berhasil Login");
			document.location='index.php';
		</script>
		<?php
   }
}
if (!isset($_SESSION['level']))
{
	?>
		<script language="javascript">
			alert("Gagal Login, Coba Lagi!");
			document.location='login.php';
		</script>
	<?php
 
}
mysql_error();
 ?>