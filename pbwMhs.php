<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBW Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/matkul.css">
</head>
<body>
     <!-- navbar -->
     <?php require 'navMhs.php'; ?>
    <br><br><br><br><br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Selamat datang di kelas Pemrograman Berbasis Web</h1>
                <p>Buka Tugas, materi dan informasimu sekarang, dan jangan lupa kirim tugas mu sekarang.</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Tugas</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat tugas.</p>
                        <a href="https://drive.google.com/drive/folders/1k5PePdrh4OvjKDqLVb7PPrgmeqrllY71" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Materi</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat materi.</p>
                        <a href="https://drive.google.com/drive/folders/1k84Ch9KaGnXtRJ0KQDQby-NNweNRhErk" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Informasi</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat informasi.</p>
                        <a href="https://drive.google.com/drive/folders/1kC2DIkhkgFgkdW1S8mzzTbtnNBRyeROX" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
            <div class="col-md-4 offset-md-4"> <!-- Menambah class offset-md-4 untuk membuat card ini di tengah -->
                <div class="card card-custom"> <!-- Mengubah class card-kirim-tugas menjadi card-custom -->
                    <div class="card-body">
                        <h5 class="card-title">Kirim Tugas</h5>
                        <p class="card-text">Klik tombol di bawah untuk mengirim tugas.</p>
                        <a href="https://drive.google.com/drive/folders/1kT8N8Zq8JIqVBNIlDT80bE00EEH9ysCn" class="btn btn-primary" target="_blank">Kirim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br>
    <?php include 'footerAll.php'; ?>
</body>
</html>
