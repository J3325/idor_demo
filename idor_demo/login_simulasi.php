<?php
session_start();

// Simulasi login: user dengan ID 2 (asep)
$_SESSION['user_id'] = 2;

echo "Login berhasil sebagai user ID: " . $_SESSION['user_id'];
echo "<br><a href='profile.php?id=2'>[Lihat Profil - Versi Rentan]</a>";
echo "<br><a href='profile_secure.php?id=2'>[Lihat Profil - Versi Aman]</a>";
echo "<br><a href='logout.php'>Logout</a>";
?>
