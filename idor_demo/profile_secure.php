<?php
session_start();
include 'db.php';

// Simulasi: hanya user yang sedang login boleh akses datanya sendiri
$user_id = $_SESSION['user_id'] ?? null;
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Validasi: ID di URL harus sesuai dengan sesi login
if ($user_id === null || $id !== $user_id) {
    die("Akses ditolak. Anda tidak berhak melihat data ini.");
}

$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    echo "<h2>Profil Anda (Versi Aman)</h2>";
    echo "Nama: " . htmlspecialchars($user['name']) . "<br>";
    echo "Email: " . htmlspecialchars($user['email']) . "<br>";
    echo "Role: " . htmlspecialchars($user['role']) . "<br>";
} else {
    echo "Data tidak ditemukan.";
}
?>
