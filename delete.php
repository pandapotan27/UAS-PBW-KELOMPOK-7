<?php
// Panggil file koneksi database
require_once 'db.php';

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id'])) {
    // Tangkap nilai ID dari URL
    $mahasiswa_id = $_GET['id'];

    // Buat query SQL untuk menghapus data mahasiswa
    $query = "DELETE FROM mahasiswa WHERE mahasiswa_id='$mahasiswa_id'";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Redirect kembali ke halaman anggota.php
        header("Location: anggota.php");
        exit();
    } else {
        echo "Gagal menghapus data.";
    }

    // Tutup koneksi database
    mysqli_close($conn);
}
?>
