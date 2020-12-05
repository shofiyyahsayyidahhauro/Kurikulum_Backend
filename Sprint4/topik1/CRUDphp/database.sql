mysql -u root -p
password
show databases;
use database crud;
use CRUD;
show tables;
+----------------+
| Tables_in_CRUD |
+----------------+
| barang         |
+----------------+
desc barang;
+------------------+-------------+------+-----+---------+----------------+
| Field            | Type        | Null | Key | Default | Extra          |
+------------------+-------------+------+-----+---------+----------------+
| id               | int         | NO   | PRI | NULL    | auto_increment |
| nama_barang      | varchar(20) | YES  |     | NULL    |                |
| deskripsi_barang | varchar(20) | YES  |     | NULL    |                |
| tempat_kulakan   | varchar(20) | YES  |     | NULL    |                |
+------------------+-------------+------+-----+---------+----------------+
insert into barang
    -> (id,nama_barang,deskripsi_barang,tempat_kulakan) values (1, 'Bullet Journal', 'Buku', 'Bandung');

desc barang;
+------------------+-------------+------+-----+---------+----------------+
| Field            | Type        | Null | Key | Default | Extra          |
+------------------+-------------+------+-----+---------+----------------+
| id               | int         | NO   | PRI | NULL    | auto_increment |
| nama_barang      | varchar(20) | YES  |     | NULL    |                |
| deskripsi_barang | varchar(20) | YES  |     | NULL    |                |
| tempat_kulakan   | varchar(20) | YES  |     | NULL    |                |
+------------------+-------------+------+-----+---------+----------------+


select * from barang;
+----+----------------+------------------+----------------+
| id | nama_barang    | deskripsi_barang | tempat_kulakan |
+----+----------------+------------------+----------------+
|  1 | Bullet Journal | Buku             | Bandung        |
+----+----------------+------------------+----------------+
<<<<<<< HEAD:Sprint-4/topik1/crudphp/database.sql


=======
>>>>>>> ed01b7df67ae4a3d21aa53f55804806169d86eed:Sprint-4/topik1/CRUDphp/database.sql
