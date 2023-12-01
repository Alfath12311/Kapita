<?php
// Koneksi ke database (sesuaikan dengan konfigurasi database Anda)
$servername = "margaagung";
$username = "username_db";
$password = "password_db";
$dbname = "nama_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Lindungi dari SQL injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Lakukan query ke database untuk mencocokkan username dan password
$sql = "SELECT * FROM accounts WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Periksa apakah akun ditemukan
if ($result->num_rows > 0) {
    // Akun ditemukan, proses login
    echo "Login berhasil!";

    // Selanjutnya, Anda bisa melakukan redirect ke halaman beranda atau halaman lain
    // header("Location: home.html");
} else {
    // Akun tidak ditemukan, beri pesan error atau redirect ke halaman login
    echo "Login gagal. Periksa kembali username dan password.";
}

$conn->close();
?>
