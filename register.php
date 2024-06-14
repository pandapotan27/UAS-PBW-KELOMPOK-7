<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap'); </style>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<!-- navbar -->
<?php require 'nav.php'; ?>
<br><br>
    <div class="container">
        <h1 class="text-center mt-5">SELAMAT DATANG DI SKILLHIVE</h1>
        <p class="text-center">Daftar sekarang juga sesuai identitas anda di perguruan tinggi</p>
        <br><br>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Mahasiswa</h5>
                        <a href="registerMhs.php" class="btn btn-primary card-button">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card custom-card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Dosen</h5>
                        <a href="registerDosen.php" class="btn btn-primary card-button">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
