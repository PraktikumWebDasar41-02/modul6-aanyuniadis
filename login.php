<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<center>
		<h2><b> lOGIN </b></h2>
		<form action="" method="POST">
		<table>
			<tr>
				<td><b>NIM</b></td>
				<td> : </td>
				<td><input type="text" name="nim" required=""></td>
			</tr>
			<tr>
				<td><b>Nama</b></td>
				<td> : </td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			</tr>
    		<td colspan="7"><br><center><input type="submit" name="submit"></center> </td>
			</tr>
			<tr>
    		<td colspan="3"><br><center><a href= "regis.php">klik registrasi</a></center></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>

<?php
	$konek = mysqli_connect('localhost','root','','jurnal6');
	session_start();
	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$query= "SELECT nim, nama FROM jurnal_6 WHERE nim = '$nim' AND nama= '$kelas'";
	header('Location:home.php');
}
?>