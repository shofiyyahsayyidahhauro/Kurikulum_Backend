
<?php

//cuma percobaan saja,,saya blm nemu yang menerapkan penggunaan class php di youtube.
  


include 'koneksibonus.php';

?>

<html>
    <head>
        <title>Bonus</title>
    </head>

    <body>
        <h3>santri</h3>
        <table border="1">
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>nilai_siswa</td>
            </tr>
            <?php
                $query = mysqli_query ($conn, "SELECT * FROM santri");
                while($data = mysqli_fetch_array($query)) {

            ?>

            <tr>
                <td><?php echo $data['no']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nilai_siswa']; ?></td>
            </tr>
                <?php } ?>
        </table>

    </body>

 </html>       

