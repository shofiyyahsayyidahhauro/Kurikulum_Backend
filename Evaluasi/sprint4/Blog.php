<?php
require_once('Config.php');  
session_start(); 
class Blog extends Config{ 

    public function blog_index(){ 

        $data =  "SELECT * FROM blog INNER JOIN tb_kategori ON blog.category_id = tb_kategori.id";
       
        $blogs = $this->connect()->query($data); 
        ?>
       
        <center><h1><i>Artikel Saya</i></h1></center>

        
        


        <?php
        
        if ($blogs->num_rows > 0){
            while($blog = $blogs->fetch_assoc()){ 
                ?>
                <div style="border: 1px solid #000; padding: 5%; margin-top: 3%">
                    <h3><?php echo $blog['title'] ?></h3> 
                    <hr>
                    <p><?php echo $blog['content'] ?></p> 
                    <br>
                    <small>
                    <h3><?php echo $blog['kategori']?></h3>
                        penulis : <i><?php echo $blog['author'] ?></i> || <i><?php echo $blog['date'] ?></i> 
                        <?php 
                        if(isset($_SESSION['status'])){ 
                            ?>
                            || <a style="color:red;" href="blog_delete.php?id=<?php echo $blog['id']; ?>">Delete</a> 
                            || <a href="blog_edit.php?id=<?php echo $blog['id'];?>" style="color:green;" href="">Edit</a>
                            <?php
                        }
                        ?>                      
                    </small>
                    
                </div>
                <?php
            }
        }else{ 
            echo '<h2>Tidak ada Artikel</h2>';
        }
    }

    public function blog_create() 
    {
        if( isset($_SESSION['status']) ){ 
            ?>
            <h1>Buat Artikel</h1>
            <br>
            <hr>
            <form action="#" method="post">
                <label for="">Judul</label>
                <input type="text" name="title">
                <br>
                <label for="">Artikel</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" name="submit" value="submit">
                <select name="kategori" required>
                    <option value="">--Pilih Kategori--</option>
                    <option value="5">Pendidikan</option>
                    <option value="6">Olahraga</option>
                    <option value="7">Agama</option>
                </select>
            </form>
            <?php
        
            if (isset($_POST['submit'])) { 
                $title = $_POST['title']; 
                $content = $_POST['content']; 
                $author = $_SESSION['name'];
                $date = date('Y-m-d'); 
                $kategori = $_POST['kategori'];
        
                $insert = "INSERT INTO blog (title, content, author, date, category_id) VALUES ('$title', '$content', '$author', '$date', '$kategori') "; 
                if($this->connect()->query($insert) === TRUE ){ 
                    echo 'Berhasil Menambah Artikel';
                }else{ 
                    echo "Error: " , $insert . "<br>" . $this->connect()->error;
                }
                $this->connect()->close(); 
            }
        }else{ 
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index.php">Login</a>';
        }
    }

    public function blog_delete($id){
        $sql = "DELETE FROM blog WHERE id=$id"; 

        if (mysqli_query($this->connect(), $sql)) { 
            return header('Location: index.php'); 
        } else { 
            echo "Error deleting record: " . mysqli_error($this->connect()); 
        }
        
    }

    

    public function blog_edit($id){
        if(isset($_POST['simpan'])){ 
            
            $title = $_POST['title']; 
            $content = $_POST['content']; 
            $sql = "UPDATE blog SET title='$title', content='$content' WHERE id='$id'"; 

            if(mysqli_query($this->connect(),$sql)){ 
                header('Location: index.php'); 
            }else{ 
                echo "Error Edit record: " . mysqli_error($this->connect());
            }
        }
    }
}

