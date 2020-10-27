mysql -u root -p
(enter password)
show databases;
CREATE DATABASE pondokit;
use pondokit;
CREATE TABLE santri
    ->(id INT AUTO_INCREMENT PRIMARY KEY,
    ->name VARCHAR(20),
    ->age INT,
    ->birth_place VARCHAR (20),
    ->birth_date DATE'
    hobby VARCHAR(20)); 

show tables;
describe santri;    