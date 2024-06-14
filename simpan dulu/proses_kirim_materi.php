<?php
require 'db.php';

$kelas = $_POST['kelas'];
$judul = $_POST['judul_materi'];
$deskripsi = $_POST['deskripsi_materi'];
$target_dir = "uploads/materi/";
$target_file = $target_dir . basename($_FILES["file_materi"]["name"]);

// Upload file
if (move_uploaded_file($_FILES["file_materi"]["tmp_name"], $target_file)) {
    $stmt = $conn->prepare("INSERT INTO materials (class, title, description, file_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $kelas, $judul, $deskripsi, $target_file);
    if ($stmt->execute()) {
        echo json_encode(["message" => "Materi berhasil dikirim!"]);
    } else {
        echo json_encode(["message" => "Gagal mengirim materi!"]);
    }
    $stmt->close();
} else {
    echo json_encode(["message" => "Gagal mengupload file!"]);
}

$conn->close();
?>
