
<?php
mysql -u root -p
show databases;
mysql> create table siswa
    -> (id INT AUTO_INCREMENT PRIMARY KEY,
    -> nama VARCHAR(20),
    -> mata_pelajaran VARCHAR(20),
    -> nilai_siswa DOUBLE NOT NULL);
    mysql> INSERT INTO siswa (id, nama, mata_pelajaran, nilai_siswa) values (
1, 'shofi', 'matematika', 70), (2, 'sayyidah', 'matematika', 98), (3, 'belle
, 'matematika', 76), (6, 'stitch', 'matematika', 45), (7, 'pinokio', 'matematika', 56), (8, 'elsa', 'matematika', 91), (9, 'anna
0), (10, 'olaf', 'matematika', '87');

mysql> desc siswa;
+----------------+-------------+------+-----+---------+----------------+
| Field          | Type        | Null | Key | Default | Extra          |
+----------------+-------------+------+-----+---------+----------------+
| id             | int         | NO   | PRI | NULL    | auto_increment |
| nama           | varchar(20) | YES  |     | NULL    |                |
| mata_pelajaran | varchar(20) | YES  |     | NULL    |                |
| nilai_siswa    | double      | NO   |     | NULL    |                |
+----------------+-------------+------+-----+---------+----------------+
4 rows in set (0.01 sec)


mysql> desc siswa;
mysql> ALTER TABLE  siswa  DROP  mata_pelajaran;
mysql> ALTER TABLE  siswa  DROP  nilai_siswa;
mysql> desc siswa;
// saya salah mnambahkan kolom dsini,,jadi saya hapus.
+-------+-------------+------+-----+---------+----------------+
| Field | Type        | Null | Key | Default | Extra          |
+-------+-------------+------+-----+---------+----------------+
| id    | int         | NO   | PRI | NULL    | auto_increment |
| nama  | varchar(20) | YES  |     | NULL    |                |
+-------+-------------+------+-----+---------+----------------+

mysql> desc siswa;
+-------+-------------+------+-----+---------+----------------+
| Field | Type        | Null | Key | Default | Extra          |
+-------+-------------+------+-----+---------+----------------+
| id    | int         | NO   | PRI | NULL    | auto_increment |
| nama  | varchar(20) | YES  |     | NULL    |                |
+-------+-------------+------+-----+---------+----------------+

select count(nama) from siswa;


+-------------+
| count(nama) |
+-------------+
|          10 |
+-------------+

mysql> select nama
    -> from siswa
    -> inner join nilai
    -> on siswa.id=nilai.id
    -> where nilai.nilai_siswa >=75;


+-----------+
| nama      |
+-----------+
| sayyidah  |
| belle     |
| snowwhite |
| hauro     |
| stitch    |
| elsa      |
| anna      |
+-----------+


mysql> select nama from siswa inner join nilai on siswa.id=nilai.id where nilai.nilai_siswa <60;
+---------+
| nama    |
+---------+
| shofi   |
| pinokio |
| olaf    |
+---------+

?>