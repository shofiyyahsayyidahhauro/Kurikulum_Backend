
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Deskripsi barang</td>
                <td><input type="text" name="deskripsi_barang"></td>
            </tr>
            <tr> 
                <td>Tempat kulakan</td>
                <td><input type="text" name="tempat_kulakan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_barang = $_POST['nama_barang'];
        $deskripsi_barang = $_POST['deskripsi_barang'];
        $tempat_kulakan = $_POST['tempat_kulakan'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table1
        $result = mysqli_query($mysqli, "INSERT INTO CRUD(nama_barang, deskripsi_barang, tempat_kulakan) VALUES('$nama_barang','$deskripsi_barang','$tempat_kulakan')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>