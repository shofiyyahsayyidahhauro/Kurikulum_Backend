<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>

	<h2>CRUD DATA BARANG/h2>
	<br/>
	<a href="2nd_indexcrud.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>deskripsi</td>
				<td><input type="text" name="deskripsi_barang"></td>
			</tr>
			<tr>
				<td>Tempat</td>
				<td><input type="text" name="tempat_kulakan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>