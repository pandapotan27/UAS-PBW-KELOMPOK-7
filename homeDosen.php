<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Dosen</title>
    <link rel="stylesheet" href="css/homeDosen.css">
</head>
<body>
<!-- navbar -->
<?php require 'navDosen.php'; ?>
<br>

<!-- konten -->
<div class="container">
    <div class="card-container">
        <div class="card">
            <h2>Pemrograman Berbasis Web</h2>
            <p class="teacher">Pengajar: Pandapotan K Sitorus, M.Kom</p>
            <a href="pbwDosen.php" class="btn">Masuk Kelas</a>
        </div>
        <div class="card">
            <h2>Statistika dan Probabilitas</h2>
            <p class="teacher">Pengajar: Deni Eka Putri, M.Kom</p>
            <a href="statprobDosen.php" class="btn">Masuk Kelas</a>
        </div>
    </div>
</div> 
<?php include 'footerAll.php'; ?>
</body>
</html>
