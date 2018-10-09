<?php
include_once("config.php");

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];
	$kodepos = $_POST['kodepos'];

	$result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',email='$email',phone='$phone',alamat='$alamat',kota='$kota',kodepos='$kodepos' WHERE id=$id");
	header("Location: index.php");
}
?>

<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
	$nama = $user_data['nama'];
	$email = $user_data['email'];
	$phone = $user_data['phone'];
	$alamat = $user_data['alamat'];
	$kota = $user_data['kota'];
	$kodepos = $user_data['kodepos'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Pengguna</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8" />

</head>
<body>
	<a href="index.php">Home</a>

	<form name="update_user" method="post" action="edit.php">
	<div class="container">
	<div class="header">
		<h2 class="judul">EDIT</h2>
	</div>
	<div class="isi">		
		<form name="update_user" method="post" action="edit.php">
				<div class="group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" placeholder="Masukkan Nama Anda" value=<?php echo $nama;?>>
				</div>
				<div class="group">
					<label for="email">Email</label>
					<input type="email" name="email" placeholder="Masukkan Email Anda" value=<?php echo $email;?>>
				</div>
				<div class="group">
					<label for="phone">Nomor HP</label>
					<input type="number" name="phone" placeholder="Masukkan Nomor HP Anda" value=<?php echo $phone;?>>
				</div>
				<div class="group">
					<label for="alamat">Alamat</label>
					<input type="text" name="alamat" placeholder="Masukkan Alamat Anda" value=<?php echo $alamat;?>>
				</div>
				<div class="group">
					<label for="kota">Kota</label>
					<input type="text" name="kota" placeholder="Masukkan Kota Anda" value=<?php echo $kota;?>>
				</div>
				<div class="group">
					<label for="kodepos">Kode Pos</label>
					<input type="number" name="kodepos" placeholder="Masukkan Kode Pos Tempat Tinggal Anda" value=<?php echo $kodepos;?>>
				</div>
				<div class="group">
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<input type="submit" name="update" value="Update">
				</div>
		</form>
	</div>
</div>	

</body>
</html>