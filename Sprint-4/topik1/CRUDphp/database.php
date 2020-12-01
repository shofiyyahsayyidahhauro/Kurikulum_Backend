<?php

mysql -u root -p

password

show databases;

use database crud;
mysql> use CRUD;

Database changed
mysql> show tables;
+----------------+
| Tables_in_CRUD |
+----------------+
| barang         |
+----------------+

mysql> desc barang;
+------------------+-------------+------+-----+---------+----------------+
| Field            | Type        | Null | Key | Default | Extra          |
+------------------+-------------+------+-----+---------+----------------+
| id               | int         | NO   | PRI | NULL    | auto_increment |
| nama_barang      | varchar(20) | YES  |     | NULL    |                |
| deskripsi_barang | varchar(20) | YES  |     | NULL    |                |
| tempat_kulakan   | varchar(20) | YES  |     | NULL    |                |
+------------------+-------------+------+-----+---------+----------------+

mysql> insert into barang
    -> (id,nama_barang,deskripsi_barang,tempat_kulakan) values (1, 'Bullet Journal', 'Buku', 'Bandung');

mysql> desc barang;
+------------------+-------------+------+-----+---------+----------------+
| Field            | Type        | Null | Key | Default | Extra          |
+------------------+-------------+------+-----+---------+----------------+
| id               | int         | NO   | PRI | NULL    | auto_increment |
| nama_barang      | varchar(20) | YES  |     | NULL    |                |
| deskripsi_barang | varchar(20) | YES  |     | NULL    |                |
| tempat_kulakan   | varchar(20) | YES  |     | NULL    |                |
+------------------+-------------+------+-----+---------+----------------+


mysql> select * from barang;
+----+----------------+------------------+----------------+
| id | nama_barang    | deskripsi_barang | tempat_kulakan |
+----+----------------+------------------+----------------+
|  1 | Bullet Journal | Buku             | Bandung        |
+----+----------------+------------------+----------------+


?>