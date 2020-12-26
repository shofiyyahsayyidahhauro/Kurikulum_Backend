<?php 
include('db_connect.php');
if(isset($_POST['tombol']))
{
    $temp = $_FILES['gambar']['tmp_name'];
    $name = rand(0,9999).$_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];
    $folder = "files/";
    if ($koneksi, "insert into jurnal (id, deskripsi, gambar) values ('$id','$deskripsi','$gambar')");
        header('location:index.php');
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>


<?php 
include('db_connect.php');
if(isset($_POST['tombol']))
{
    $temp = $_FILES['gambar']['tmp_name'];
    $name = rand(0,9999).$_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];
    $folder = "files/";
    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($koneksi, "insert into jurnal (deskripsi, gambar) values ('$deskripsi','$gambar')");
        header('location:index.php');
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><textarea name="deskripsi"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>
    </body>
</html>