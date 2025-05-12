
<?php
require_once './config/db.php';

$action = $_POST['action'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$fullname = $_POST['fullname'] ?? '';

if ($action == 'register') {
    $stmt = $pdo->prepare("INSERT INTO users (username, password, fullname) VALUES (?, ?, ?)");
    $stmt->execute([$username, $password, $fullname]);
    echo "✅ Register sukses. <a href='../../latihanfe/login.html'>Login</a>";
    exit;
}

if ($action == 'login') {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $name = urlencode($user['fullname']);
        header("Location: ../../latihanfe/menu.html?name=$name");
        exit;
    } else {
        echo "❌ Login gagal. <a href='../../latihanfe/login.html'>Coba lagi</a>";
    }
}
?>
