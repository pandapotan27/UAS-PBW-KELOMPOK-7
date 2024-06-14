<?php
require 'db.php';

$kelas = $_POST['kelas'];
$judul = $_POST['judul_informasi'];
$deskripsi = $_POST['deskripsi_informasi'];

$stmt = $conn->prepare("INSERT INTO information (class, title, description) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $kelas, $judul, $deskripsi);
if ($stmt->execute()) {
    echo json_encode(["message" => "Informasi berhasil dikirim!"]);
} else {
    echo json_encode(["message" => "Gagal mengirim informasi!"]);
}

$stmt->close();
$conn->close();
?>
