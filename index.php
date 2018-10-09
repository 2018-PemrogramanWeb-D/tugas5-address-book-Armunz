<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8" />
</head>
<body>
	<h1 class="h11">ADDRESS BOOK</h1>
	<table class="table1">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Nomor HP</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Kode Pos</th>
			<th>Update</th>
		</tr>
	<?php
		while($user_data = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$user_data['nama']."</td>";
			echo "<td>".$user_data['email']."</td>";
			echo "<td>".$user_data['phone']."</td>";
			echo "<td>".$user_data['alamat']."</td>";
			echo "<td>".$user_data['kota']."</td>";
			echo "<td>".$user_data['kodepos']."</td>";
			echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>"; 
		}
	?>
	</table>
	<br>
	<a href="add.php">Tambahkan User Baru </a><br/><br/>	
</body>
</html>