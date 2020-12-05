<?php
   require_once("3rd_koneksi.php");

   $r= "SELECT * FROM barang";
   $data = mysqli_query($koneksi, $r);
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>


	<h2>CRUD DATA BARANG</h2>
	<br/>
	<a href="4th_tambah.php">+ TAMBAH BARANG</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>id</th>
			<th>Nama_barang</th>
			<th>Deskripsi_barang</th>
			<th>Tempat_kulakan</th>
			<th>OPSI</th>
		</tr>
		<?php 
		  while($d = mysqli_fetch_assoc($data)){
			?>
			<tr>
				<td><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['deskripsi_barang']; ?></td>
				<td><?php echo $d['tempat_kulakan']; ?></td>
				<td>
					<a href="5th_edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="6th_hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
<a href="logout.php?id=<?php echo $d['id']; ?>">LOGOUT</a> 
</body>
</html>

<?php