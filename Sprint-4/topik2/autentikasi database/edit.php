<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="indexcrud.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from barang where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Deskripsi barang</td>
					<td><input type="text" name="deskripsi_barang" value="<?php echo $d['deskripsi_barang']; ?>"></td>
				</tr>
				<tr>
					<td>Tempat kulakan</td>
					<td><input type="text" name="tempat_kulakan" value="<?php echo $d['tempat_kulakan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>