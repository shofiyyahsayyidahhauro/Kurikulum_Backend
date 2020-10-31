
NO 1. 
mysql -u root -p
enter password
show databases;
CREATE DATABASE pondokit2;
use pondokit2;
CREATE TABLE santri
(id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20),
age INT,
divisi VARCHAR(20));

NO 2.
INSERT INTO santri (id, name, age, divisi) values (1, 'shofi', 20, 'programmer'), (2, 'sayyidah', 22, 'programmer'), (3, 'hauro', 23, 'programmer'), (4, 'annisa', 19, 'ilmi gizi')(5, 'kartika p', 18, 'psikologi'), (6, 'anggara', 23, 'otomotif'), (7, 'widodo', 24, 'agronomi'), (8, 'sinta', 23, 'bahasa arab'), (9, 'rosmala', 20, 'akuntansi'), (10, 'sarah', 19, 'arsitektur'), (11, 'andini', 20, 'programmer'), (12, 'bima', 20, 'otomotif'), (13, 'putri', 19, 'tata busana'), (14, 'dhika', 21, 'teknik mesin'), (15, 'maya', 24, 'psikologi'), (16, 'amanda', 18, 'biologi murni'), (17, 'andi farah', 20, 'bahasa arab'), (18, 'soleh', 20, 'programmer'), (19, 'widodo', 24, 'agronomi'), (20, 'hanan', 24, 'peternakan');

NO 3.
SELECT id FROM santri;

NO 4.
UPDATE santri
SET name = 'ahsan s', age = 23, divisi = 'programmer'
WHERE id = 17;

NO 5.
DELETE FROM santri WHERE name = 'hanan';
INSERT INTO santri (id, name, age, divisi) values (19, 'anaa', 22, 'programmer'), (21, 'elsa', 22, 'ahli gizi'), (22, 'hannah', 23, 'teknik sipil'), (23, 'viola', 19, 'ilmi gizi'), (24, 'puspa', 18, 'psikologi');

NO 6. (escending)
SELECT * FROM santri
ORDER BY age; 

(descending)
SELECT * FROM santri
ORDER BY age DESC; 

(pembatasan data)
SELECT * FROM santri
LIMIT 15;

NO 7.
SELECT AVG(id)
FROM santri;

NO 8.
SELECT COUNT(id), age
FROM santri 
GROUP BY age;
