<?php
require_once './config/db.php';
header("Content-Type: application/json");

$barang = $_POST['barang'] ?? '';
$jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
$keterangan = $_POST['keterangan'] ?? '';

// Validasi input kosong
if (empty($barang) || $jumlah <= 0) {
    echo json_encode(["success" => false, "message" => "Nama barang dan jumlah wajib diisi."]);
    exit;
}

// Cek stok
$stmt = $pdo->prepare("SELECT jumlah FROM stok WHERE barang = ?");
$stmt->execute([$barang]);
$stok = $stmt->fetchColumn();

if ($stok === false) {
    echo json_encode(["success" => false, "message" => "Barang tidak ditemukan di stok."]);
    exit;
}

if ($jumlah > $stok) {
    echo json_encode(["success" => false, "message" => "Stok tidak mencukupi. Maksimal: $stok"]);
    exit;
}

// Simpan penjualan (raw SQL - untuk simulasi SQL injection)
$sql = "INSERT INTO penjualan (barang, jumlah, keterangan) VALUES ('$barang', $jumlah, '$keterangan')";
$pdo->exec($sql);

// Kurangi stok
$stmt = $pdo->prepare("UPDATE stok SET jumlah = jumlah - ? WHERE barang = ?");
$stmt->execute([$jumlah, $barang]);

echo json_encode(["success" => true, "message" => "Penjualan berhasil dan stok dikurangi."]);
?>
