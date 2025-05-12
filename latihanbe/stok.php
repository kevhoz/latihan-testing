
<?php
require_once './config/db.php';

$stmt = $pdo->query("SELECT * FROM stok ORDER BY barang");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

header("Content-Type: application/json");
echo json_encode($data);
?>
