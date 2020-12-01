<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_barang=$_POST['nama_barang'];
    $deskripsi_barang=$_POST['deskripsi_barang'];
    $tempat_kulakan=$_POST['tempat_kulakan'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE CRUD SET name='$nama_barang',deskripsi_barang='$deskripsi_barang',tempat_kulakan='$tempat_kulakan' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM CRUD WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_barang = $user_data['nama_barang'];
    $deskripsi_barang = $user_data['deskripsi_barang'];
    $tempat_kulakan = $user_data['tempat_kulakan'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi barang</td>
                <td><input type="text" name="deskripsi_barang" value=<?php echo $deskripsi_barang;?>></td>
            </tr>
            <tr> 
                <td>Tempat kulakan</td>
                <td><input type="text" name="tempat_kulakan" value=<?php echo $tempat_kulakan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>