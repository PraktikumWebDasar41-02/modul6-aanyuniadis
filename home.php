<?php
$konek = mysqli_connect('localhost','root','','jurnal6');
$result = mysqli_query($konek, "SELECT * FROM jurnal_6");

echo 
'<center><table border = "2px">
	<thead>
		<tr>
			<th> NIM</th>
			<th> Nama </th>
			<th> kelas </th>
			<th> Jenis Kelamin</th>
			<th> hobi</th>
			<th> fakultas </th>
			<th> alamat </th>
		</tr>
	</thead>
<tbody>';

$row = mysqli_fetch_row($result);
echo
	'<tr>
		<td>'.$row[0].'</td>
		<td>'.$row[1].'</td>
		<td>'.$row[2].'</td>
		<td>'.$row[3].'</td>
		<td>'.$row[4].'</td>
		<td>'.$row[5].'</td>
		<td>'.$row[6].'</td>
	</tr></center>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<center>
		<h2><b> Data Mahasiswa</b></h2>
			<form action="" method="POST">
				<input type="submit" name="submit" value="Logout"><br><br>
				<tr>
    			<td colspan="7"><br><center><a href= "edit.php">Update Data</a></center></td>
				</tr>
			</form>
		</center>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$kelas=$_POST['kelas'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		session_destroy();
		header('Location:login.php');
	}
?>