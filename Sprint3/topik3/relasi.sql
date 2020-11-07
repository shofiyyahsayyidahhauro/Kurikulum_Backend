 mysql -u root -p
 enter password 
 show databases;
 create database universitas;
 create table kuliah(kd_kuliah char(20) primary key,
 nama_kuliah varchar(100), sks int(2), kelas varchar(20));

 desc universitas

 create table dosen(nidn varchar(50) primary key,
 nama_dosen varchar(100), telp varchar(20), kd_kuliah varchar(20));

 desc dosen;

create table mhs(nim varchar(20), nama_mhs varchar(100),
prodi varchar(40), kd_kuliah varchar(20));

desc mhs;

insert into kuliah values('k002', 'algoritma', 4, 'sore'),
('k003', 'psikologi', 2, 'pagi'),
('k004', 'study kasus', 2, 'pagi');

select * from kuliah;

desc dosen;

insert into dosen values ('01222119001', 'shofi', '071134342', 'k002');
insert into dosen values ('02221119003', 'sayyidah', '0171134356', 'k005'),
('0222119002', 'hauro', '071137756', 'k003');

desc mhs;

insert into mhs values('2017010911', 'yusma', 'sistem informasi', 'k003');
insert into mhs values('2017010913', 'wati', 'agronomi', 'k001'),
('2017010913', 'sarah', 'ilmu gizi', 'k007'),
('2017010814', 'astri', 'teknik sipil', 'k002');

-JOIN-
-> And
select kuliah.nama_kuliah, kuliah.sks,dosen.nama_dosen,
mhs.nama_mhs, mhs.prodi FROM kuliah, dosen, mhs
WHERE kuliah.kd_kuliah = dosen.kd_kuliah AND 
kuliah.kd_kuliah = mhs.kd_kuliah;

-JOIN-
->Or
select kuliah.nama_kuliah, kuliah.sks,dosen.nama_dosen,
mhs.nama_mhs, mhs.prodi FROM kuliah, dosen, mhs
WHERE kuliah.kd_kuliah = dosen.kd_kuliah OR 
kuliah.kd_kuliah = mhs.kd_kuliah;




