<?php 
require_once('Blog.php');  // include Blog.php fil
$blog = new Blog(); 

$id = $_GET['id']; 
$show = mysqli_query($blog->connect(),"SELECT * FROM blog WHERE id='$id'"); //Mencari query 

if(mysqli_num_rows($show) == 0){ //jika tidak di temukan maka
    echo 'Data tidak di temukan'; // tampilkan 
}else{ // jika di temukan maka
    $data = mysqli_fetch_assoc($show); //buat variable untuk menampilkan data
}
?>
<h1>Edit Artikel</h1>
<form action="#" method="post">
    <label for="">Judul</label>
    <input type="text" name="title" value="<?php echo $data['title'];?>"> 
    <br>
    <label for="">Artikel</label>
    <textarea name="content" id="" cols="30" rows="10"><?php echo $data['content'];?></textarea> 
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>
<?php 
$blog->blog_edit($id);
?>