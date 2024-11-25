CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE catalog (
    kode_barang INT PRIMARY KEY AUTO_INCREMENT,
    nama_barang VARCHAR(100),
    deskripsi TEXT,
    harga_barang DECIMAL(10,2),
    stock_barang INT
);

INSERT INTO catalog (nama_barang, deskripsi, harga_barang, stock_barang)
VALUES 
('Laptop A', 'Laptop dengan spesifikasi tinggi', 15000000, 10),
('Mouse B', 'Mouse gaming RGB', 200000, 50),
('Keyboard C', 'Keyboard mekanikal', 750000, 20);
