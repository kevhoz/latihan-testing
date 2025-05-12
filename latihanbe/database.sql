-- Gunakan atau buat database
CREATE DATABASE IF NOT EXISTS simple_inventory;
USE simple_inventory;

-- Tabel users (untuk login/register)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    fullname VARCHAR(100)
);

-- Tabel penjualan (mengandung celah SQL Injection di backend)
CREATE TABLE penjualan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barang VARCHAR(100) NOT NULL,
    jumlah INT NOT NULL,
    keterangan TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel pembelian
CREATE TABLE pembelian (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barang VARCHAR(100) NOT NULL,
    jumlah INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel stok
CREATE TABLE stok (
    id INT AUTO_INCREMENT PRIMARY KEY,
    barang VARCHAR(100) NOT NULL UNIQUE,
    jumlah INT NOT NULL DEFAULT 0
);
