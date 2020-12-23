<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal</title>
</head>
<body>
    <center><h1>Data Produk</h1></center>
    
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Action</th>
        </tr> 
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM jurnal ORDER BY id ASC";
        ?>
     </tbody>
        
</table>
    
</body>
</html>