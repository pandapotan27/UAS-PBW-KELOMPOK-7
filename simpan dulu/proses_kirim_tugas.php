<?php
// Sertakan file koneksi ke database
require_once 'db.php';

// Tangkap data dari formulir
$jenis = $_POST['jenis'];
$kelas = $_POST['kelas'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$batas_pengumpulan = isset($_POST['batas_pengumpulan']) ? $_POST['batas_pengumpulan'] : NULL;
$file_tugas = NULL;

// Jika jenisnya adalah 'tugas' atau 'materi', tangkap file yang diunggah
if ($jenis === 'tugas' || $jenis === 'materi') {
    // Tentukan direktori tempat menyimpan file (sesuaikan dengan kebutuhan Anda)
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file_tugas"]["name"]);

    // Pindahkan file yang diunggah ke direktori yang ditentukan
    if (move_uploaded_file($_FILES["file_tugas"]["tmp_name"], $target_file)) {
        $file_tugas = $target_file;
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file.";
    }
}

// Masukkan data ke dalam tabel kirimDosen
$sql = "INSERT INTO kirimDosen (jenis, kelas, judul, deskripsi, batas_pengumpulan, file_tugas)
        VALUES ('$jenis', '$kelas', '$judul', '$deskripsi', '$batas_pengumpulan', '$file_tugas')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Terjadi kesalahan: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi ke database (jika tidak menggunakan koneksi persistent)
mysqli_close($koneksi);
?>
