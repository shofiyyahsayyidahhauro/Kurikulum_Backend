<?php
require_once('Blog.php'); // include Blog.php file

$blog = new Blog();  
$blog->blog_delete($_GET['id']); 
?>