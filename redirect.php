<?php
// Mendapatkan data yang dikirimkan dari formulir login
$name = $_POST['name'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$role = $_POST['role'];

// Mengarahkan ke halaman yang sesuai berdasarkan peran (role)
if ($role == 'Dosen') {
    header('Location: homeDosen.php'); // Mengarahkan ke homeDosen.php jika login sebagai Dosen
    exit(); // Penting untuk keluar dari skrip setelah pengalihan header
} elseif ($role == 'Mahasiswa') {
    // Mengarahkan ke halaman kelas2a.php jika login sebagai Mahasiswa
    header("Location: homeMhs.php");
    exit(); // Penting untuk keluar dari skrip setelah pengalihan header
} else {
    // Jika peran tidak valid, arahkan kembali ke halaman login
    header('Location: login.php');
    exit(); // Penting untuk keluar dari skrip setelah pengalihan header
}
?>
