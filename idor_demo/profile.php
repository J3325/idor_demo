<?php
include 'db.php';

// Ambil ID dari URL dan cast ke integer agar sedikit lebih aman
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    echo "<h2>Profil Pengguna (Versi Rentan)</h2>";
    echo "Nama: " . htmlspecialchars($user['name']) . "<br>";
    echo "Email: " . htmlspecialchars($user['email']) . "<br>";
    echo "Role: " . htmlspecialchars($user['role']) . "<br>";
} else {
    echo "User tidak ditemukan.";
}
?>
