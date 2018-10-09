<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambahkan Pengguna</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8" />
</head>
<body>	
<a href="index.php">Go to Home</a>

<div class="container">
	<div class="header">
		<h2 class="judul">INPUT</h2>
	</div>
	<div class="isi">		
		<form action="add.php" method="post" name="addform">
				<div class="group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" placeholder="Masukkan Nama Anda">
				</div>
				<div class="group">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Masukkan Email Anda">
				</div>
				<div class="group">
					<label for="phone">Nomor HP</label>
					<input type="number" name="phone" placeholder="Masukkan Nomor HP Anda">
				</div>
				<div class="group">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" placeholder="Masukkan Alamat Anda">
				</div>
				<div class="group">
					<label for="kota">Kota</label>
					<input type="text" name="kota" placeholder="Masukkan Kota Anda">
				</div>
				<div class="group">
					<label for="kodepos">Kode Pos</label>
					<input type="number" name="kodepos" placeholder="Masukkan Kode Pos Tempat Tinggal Anda">
				</div>
				<div class="group">
					<input type="submit" name="Submit" value="Add">
				</div>
		</form>
	</div>
</div>	



<?php

if(isset($_POST['Submit'])){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$kodepos = $_POST['kodepos'];

	include_once("config.php");

	$result  = mysqli_query($mysqli, "INSERT INTO users(nama, email, phone, alamat, kota, kodepos) VALUES('$nama', '$email', '$phone', '$alamat', '$kota', '$kodepos')");
	echo "User telah berhasil ditambahkan. <a href = 'index.php'>View Users</a>";
}
?>	


</body>
</html>