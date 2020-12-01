mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| CRUD               |
| Session            |
| crudPHP            |
| information_schema |
| login              |
| mydatabase         |
| mysql              |
| percobaan          |
| performance_schema |
| phpmyadmin         |
| pondokit           |
| pondokit2          |
| profesi            |
| relasi             |
| relasi1            |
| remedi             |
| santri             |
| sekolah            |
| session            |
| siswa              |
| sys                |
| toko               |
| universitas        |
+--------------------+
23 rows in set (0.15 sec)

mysql> CREATE DATABASE app_pondok;
Query OK, 1 row affected (0.30 sec)

mysql> CREATE TABLE IF NOT AXISTS login(
    -> id int(10) NOT NULL AUTO_INCREMENT,
    -> name VARCHAR(225) NOT NULL,
    -> password VARCHAR(225) NOT NULL,
    -> PRIMARY KEY(id));
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AXISTS login(
id int(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(225) NOT NULL, 
p' at line 1
mysql> CREATE TABLE IF NOT AXISTS login(
    -> ;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AXISTS login(' at line 1
mysql> CREATE TABLE IF NOT EXISTS login(
    -> id int(10) NOT NULL AUTO_INCREMENT,
    -> name VARCHAR(225) NOT NULL,
    -> password VARCHAR(225) NOT NULL,
    ->  PRIMARY KEY(id));
ERROR 1046 (3D000): No database selected
mysql> CREATE TABLE IF NOT EXISTS login(
    -> id int(10) NOT NULL AUTO_INCREMENT,
    -> name VARCHAR(225) NOT NULL,
    -> password VARCHAR(225) NOT NULL,
    -> PRIMARY KEY(id));
ERROR 1046 (3D000): No database selected
mysql> use app_pondok;
Database changed
mysql> CREATE TABLE IF NOT EXISTS login(
    -> name VARCHAR(225) NOT NULL,
    -> username VARCHAR(225) NOT NULL,;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 3
mysql> CREATE TABLE IF NOT EXISTS `login` (
    ->   `id` int(10) NOT NULL AUTO_INCREMENT,
    ->   `name` varchar(255) NOT NULL,
    ->   `password` varchar(255) NOT NULL,
    ->   PRIMARY KEY (`id`)
    -> );
Query OK, 0 rows affected, 1 warning (1.01 sec)

mysql> INSERT INTO `login` (`id`, `name`, `password`) VALUES
    -> (1, 'shofi', '12345'),
    -> (2, 'sayyidah', '12345'),
    -> (3, 'hauro', '12345');
