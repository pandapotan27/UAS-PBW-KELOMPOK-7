<?php
// Panggil file koneksi database
require_once 'db.php';

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id'])) {
    // Tangkap nilai ID dari URL
    $mahasiswa_id = $_GET['id'];

    // Jika ada data yang dikirimkan via form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Tangkap data yang dikirimkan via form
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $kelas = $_POST['kelas'];

        // Buat query SQL untuk mengupdate data mahasiswa
        $query = "UPDATE mahasiswa SET nama='$nama', npm='$npm', kelas='$kelas' WHERE mahasiswa_id='$mahasiswa_id'";

        // Eksekusi query
        $result = mysqli_query($conn, $query);

        // Periksa apakah query berhasil dieksekusi
        if ($result) {
            // Redirect kembali ke halaman anggota.php setelah berhasil update
            header("Location: anggota.php");
            exit();
        } else {
            echo "Gagal melakukan update data.";
        }
    }

    // Buat query SQL untuk mengambil data mahasiswa berdasarkan ID
    $query = "SELECT * FROM mahasiswa WHERE mahasiswa_id='$mahasiswa_id'";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    // Tangkap data mahasiswa
    $row = mysqli_fetch_assoc($result);

    // Bebaskan hasil query
    mysqli_free_result($result);

    // Tutup koneksi database
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="title">Update Anggota</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
<!-- navbar -->
<?php require 'navMhs.php'; ?>
<br><br><br><br>
<h1>Update Anggota</h1>
<br><br>
<div class="form-container">
<form method="POST">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>"><br>
    <label for="npm">NPM:</label><br>
    <input type="text" id="npm" name="npm" value="<?php echo $row['npm']; ?>"><br>
    <label for="kelas">Kelas:</label><br>
    <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>"><br><br>
    <input type="submit" value="Update">
</form>
</div>
<?php include 'footerAll.php'; ?>
</body>
</html>
