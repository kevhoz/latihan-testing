<?php
require_once './config/db.php';
header("Content-Type: application/json");

$barang = $_POST['barang'] ?? '';
$jumlah = $_POST['jumlah'] ?? null;

// Validasi nama barang wajib
if (empty($barang)) {
    echo json_encode(["success" => false, "message" => "Nama barang wajib diisi."]);
    exit;
}

// Validasi jumlah wajib angka dan lebih dari 0
if (!is_numeric($jumlah) || (int)$jumlah <= 0) {
    echo json_encode(["success" => false, "message" => "Jumlah harus berupa angka dan lebih dari 0."]);
    exit;
}

// Validasi 100
if ($jumlah > 100) {
    echo json_encode(["success" => false, "message" => "Jumlah pembelian harus dibawah 100"]);
    exit;
}

$jumlah = (int)$jumlah;

$stmt = $pdo->prepare("INSERT INTO pembelian (barang, jumlah) VALUES (?, ?)");
$stmt->execute([$barang, $jumlah]);

// Tambahkan ke stok (buat baru jika belum ada)
$stmt = $pdo->prepare("INSERT INTO stok (barang, jumlah) VALUES (?, ?) 
    ON DUPLICATE KEY UPDATE jumlah = jumlah + VALUES(jumlah)");
$stmt->execute([$barang, $jumlah]);

echo json_encode(["success" => true, "message" => "Pembelian berhasil dan stok bertambah."]);
?>
