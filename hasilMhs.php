<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Tugas Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
                /* CSS untuk mengatur teks h1 di tengah halaman */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh; /* Sesuaikan dengan kebutuhan Anda */
            flex-direction: column;
        }
        h1{
            color:#323232;
        }
        h5{
            color:#323232;
        }

        /* CSS untuk card */
        /* CSS untuk card */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card .card-body {
            text-align: center;
        }

        .card .card-title {
            font-size: 1.2em;
            font-weight: bold;
        }

        .card .card-text {
            color: #666;
        }

        .card .btn-primary {
            background-color: #008000;
            border-color: #008000;
            padding: 8px 20px;
            font-size: 1em;
        }

        .card .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

    
    </style>
</head>
<body>
    <!-- navbar -->
    <?php require 'navMhs.php'; ?>

    <br><br><br><br><br><br><br><br>
    <div class="container">
        <h1>Lihat Nilai Mahasiswa</h1>
    </div>
    <br><br><br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pemrograman Berbasis Web</h5>
                        <a href="https://drive.google.com/drive/folders/1kT8N8Zq8JIqVBNIlDT80bE00EEH9ysCn" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Statistika dan Probabilitas</h5>
                        <a href="https://drive.google.com/drive/folders/1kV2FclMXq6_45C52KWv-Jher4N8FjQXH" class="btn btn-primary" target="_blank">Buka</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br><br>
<?php include 'footerAll.php'; ?>
</body>
</html>
