mysql -u root -p
SHOW DATABASES;
CREATE DATABASE santri;
USE santri;
CREATE TABLE data_nilai DOUBLE NOT NULL)
CREATE TABLE data_nilai
    -> (id INT AUTO_INCREMENT PRIMARY KEY,
    -> nama VARCHAR(20),
    -> data_nilai DOUBLE NOT NULL);
INSERT INTO data_nilai (id, nama, data_nilai) values (1, 'shofi', 70), (2, 'sayyidah', 98), (3, 'belle', 90), (4, 'snowwhite',
 97), (5, 'hauro', 76), (6, 'stitch', 45), (7, 'pinokio', 56), (8, 'elsa', 91),
(9, 'anna', 30), (10, 'olaf', '87');

SELECT nama
-> FROM data_nilai;

SELECT AVG(data_nilai) 
-> FROM data_nilai;

SELECT nama
-> FROM data_nilai;

SELECT nilai
-> FROM data_nilai
WHERE data_nilai.data_nilai>=80;

SELECT nama 
-> FROM data_nilai.data_nilai<=65;