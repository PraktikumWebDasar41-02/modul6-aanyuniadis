<!DOCTYPE html>
<html>
<head>
	<title>REGISTRASI</title>
</head>
<body>
	<center>
		<h2><b> Registrasi Mahasiswa</b></h2>
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
			<tr>
				<td><b>Kelas</b></td>
				<td> : </td>
				<td><input type="radio" name="kelas" value="D3MI-41-01" required="">D3MI-41-01</td><br>
				<td><input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02<br></td><br>
				<td><input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03<br></td><br>
				<td><input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04<br></td>
			</tr>
			<tr>
				<td><b>Jenis Kelamin</b></td>
				<td> : </td>
				<td><input type="radio" name="jeniskelamin" value="Laki-Laki" required="">Laki-Laki</td><br>
				<td><input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br></td>
			</tr>
			<tr>
				<td><b> Hobi </b></td>
				<td> : </td>
				<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca</td><br>
				<td><input type="checkbox" name="hobi[]" value="Menulis">Menulis</td><br>
				<td><input type="checkbox" name="hobi[]" value="Menari">Menari</td><br>
				<td><input type="checkbox" name="hobi[]" value="Menyanyi">Menyanyi</td><br>
				<td><input type="checkbox" name="hobi[]" value="Melukis">Melukis</td><br>
			</tr>
			<tr>
				<td><b>Fakultas</b></td>
				<td> :</td>
				<td><select name="fakultas" required="">
    				<option value="FTE">Fakultas Teknik Elektro</option>
    				<option value="FIT">Fakultas Ilmu Terapan</option>
    				<option value="FEB">Fakultas Ekonomi Bisnis</option>
    				<option value="FIK">Fakultas Industri Kreatif</option>
    				<option value="FRI">Fakultas Rekayasa Industri</option>
    		</select></td>
    		<tr>
    			<td><b>Alamat</b></td>
    			<td> : </td>
    			<td><textarea name="alamat" placeholder=""></textarea></td>
    		</tr>
    		<td colspan="7"><br><center><input type="submit" name="submit"></center> </td>
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
		$kelas=$_POST['kelas'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$hobi=$_POST['hobi'];
		$fakultas=$_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$hobby = "";
		if(!empty($hobi)){
			foreach ($hobi as $value) {
				$hobby.=$value.",";
			}
		}

		/*if ($nim == is_numeric($nim)) {
			if (count($nim)==10)
				if(strlen($nama)<=35){	
				}
		}else{
			echo "<script language = 'javascript'>alert('NIM HARUS BERJUMLAH 10')
			document.location=('regis.php');</script>";
		}*/
	$query=mysqli_query($konek,"INSERT INTO jurnal_6 VALUES ($nim,'$nama','$kelas','$jeniskelamin','$hobby','$fakultas','$alamat')");
	if($query){
		header('Location:login.php');
	}
}
?>
