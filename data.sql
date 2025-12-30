CREATE DATABASE IF NOT EXISTS toko_buku;
USE toko_buku;

CREATE TABLE penerbit (
    id_penerbit VARCHAR(5) PRIMARY KEY,
    nama_penerbit VARCHAR(50),
    alamat_penerbit VARCHAR(100),
    kota VARCHAR(30),
    telp VARCHAR(20)
);

INSERT INTO penerbit VALUES
('SP01','Penerbit Informatika','Jl. Buah Batu No.121','Bandung','0813-2220-1946'),
('SP02','Andi Offset','Jl. Suryalaya IX No.3','Bandung','0878-3903-0688'),
('SP03','Danendra','Jl. Moch. Toha 44','Bandung','022-5201215');

CREATE TABLE buku (
    id_buku VARCHAR(5) PRIMARY KEY,
    kategori VARCHAR(30),
    nama_buku VARCHAR(100),
    harga INT,
    stok INT,
    id_penerbit VARCHAR(5),
    FOREIGN KEY (id_penerbit) REFERENCES penerbit(id_penerbit)
);

INSERT INTO buku VALUES
('K1001','Keilmuan','Analisis & Perancangan Sistem Informasi',50000,60,'SP01'),
('K1002','Keilmuan','Artificial Intelligence',45000,60,'SP01'),
('K2003','Keilmuan','Autocad 3 Dimensi',40000,25,'SP01'),
('B1001','Bisnis','Bisnis Online',75000,9,'SP01'),
('K3004','Keilmuan','Cloud Computing Technology',85000,15,'SP01'),
('B1002','Bisnis','Etika Bisnis dan Tanggung Jawab Sosial',67500,20,'SP01'),
('N1001','Novel','Cahaya Di Penjuru Hati',68000,10,'SP02'),
('N1002','Novel','Aku Ingin Cerita',48000,12,'SP03');
