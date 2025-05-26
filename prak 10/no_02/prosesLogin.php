<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (strtolower($username) === 'admin' && $password === 'admin') {
    echo "<h2 style='color:purple;'>Login berhasil!</h2>";
    echo "<h3>Selamat datang, <span style='color:blue; font-weight:bold;'>$username</span>.</h3>";
    echo "<a href='index.html' style='color:purple;'>kembali ke halaman login</a>";
} else {
    echo "<h2 style='color:red;'>Username : $username Tidak Terdaftar!</h2>";
    echo "<a href='index.html' style='color:blue;'>kembali ke halaman login</a>";
}
?>
