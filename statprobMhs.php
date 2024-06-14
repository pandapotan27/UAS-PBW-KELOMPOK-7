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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Tugas</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat tugas.</p>
                        <a href="https://drive.google.com/drive/folders/1kQrSqwukGsZXsNwJ-HJbYBB6SigDYIb6" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Materi</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat materi.</p>
                        <a href="https://drive.google.com/drive/folders/1kRm2wjuewwEEvNqKNeTf_TP9mLQklFNJ" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lihat Informasi</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat informasi.</p>
                        <a href="https://drive.google.com/drive/folders/1kSoVPDxRN5n6IB5isR4sNJY5FdyIeCXC" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4"> <!-- Menambah class offset-md-4 untuk membuat card ini di tengah -->
                <div class="card card-custom"> <!-- Mengubah class card-kirim-tugas menjadi card-custom -->
                    <div class="card-body">
                        <h5 class="card-title">Kirim Tugas</h5>
                        <p class="card-text">Klik tombol di bawah untuk mengirim tugas.</p>
                        <a href="https://drive.google.com/drive/folders/1kV2FclMXq6_45C52KWv-Jher4N8FjQXH" class="btn btn-primary" target="_blank">Kirim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'footerAll.php'; ?>
</body>
</html>
