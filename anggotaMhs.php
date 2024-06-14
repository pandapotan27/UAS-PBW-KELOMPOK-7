<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
    <link rel="stylesheet" href="css/anggota.css"> 
</head>
<body>
<!-- navbar -->
<?php require 'navMhs.php'; ?>

<?php
// Panggil file koneksi database
require_once 'db.php';

// Buat query SQL untuk mengambil semua data dari tabel mahasiswa
$query = "SELECT * FROM mahasiswa";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil dieksekusi
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

// Tampilkan data
echo "<h1>Daftar Mahasiswa</h1>";
echo "<table>";
echo "<tr><th>Mahasiswa ID</th><th>User ID</th><th>Nama</th><th>NPM</th><th>Kelas</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['mahasiswa_id'] . "</td>";
    echo "<td>" . $row['user_id'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['npm'] . "</td>";
    echo "<td>" . $row['kelas'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Bebaskan hasil query
mysqli_free_result($result);

// Tutup koneksi database
mysqli_close($conn);
?>
<?php include 'footerAll.php'; ?>
</body>
</html>
