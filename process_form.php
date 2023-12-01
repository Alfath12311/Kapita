<?php
$servername = "margaagung";
$username = "username_db";
$password = "password_db";
$dbname = "nama_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];

// Upload file lampiran
$target_dir = "uploads/";
$file_lampiran = $target_dir . basename($_FILES["file_lampiran"]["name"]);

if (move_uploaded_file($_FILES["file_lampiran"]["tmp_name"], $file_lampiran)) {
  echo "File berhasil diunggah.";
} else {
  echo "Gagal mengunggah file.";
}

// Simpan data ke database
$sql = "INSERT INTO warga (nik, nama, tempat_tanggal_lahir, jenis_kelamin, alamat, agama, pekerjaan, file_lampiran) VALUES ('$nik', '$nama', '$tempat_tanggal_lahir', '$jenis_kelamin', '$alamat', '$agama', '$pekerjaan', '$file_lampiran')";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
