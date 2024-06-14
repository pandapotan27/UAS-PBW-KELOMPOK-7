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

        .card .btn-group {
            display: flex;
            justify-content: space-between; /* Mengatur jarak antara tombol */
        }

        .card .btn-group .btn {
            flex: 1;
            margin: 5px;
        }

        .card .btn-primary {
            background-color: #008000;
            border-color: #008000;
            padding: 8px 20px;
            font-size: 1em;
        }

        .card .btn-primary:hover {
            background-color: #008000;
            border-color: #008000;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <?php require 'navDosen.php'; ?>

    <br><br><br><br><br>
    <div class="container">
        <h1>Lihat Tugas Mahasiswa</h1>
    </div><br><br><br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hasil Tugas PBW</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat hasil tugas.</p>
                        <div class="btn-group">
                            <a href="https://drive.google.com/drive/folders/1kT8N8Zq8JIqVBNIlDT80bE00EEH9ysCn" class="btn btn-primary" target="_blank">Buka</a>
                            <button class="btn btn-primary" onclick="kirimNilai('https://drive.google.com/drive/folders/1kfGyUD9PD6tuCZVK8ERAs_1Vk-jaWDXA')">Kirim Nilai</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hasil Tugas STATPROB</h5>
                        <p class="card-text">Klik tombol di bawah untuk melihat hasil tugas.</p>
                        <div class="btn-group">
                            <a href="https://drive.google.com/drive/folders/1kV2FclMXq6_45C52KWv-Jher4N8FjQXH" class="btn btn-primary" target="_blank">Buka</a>
                            <button class="btn btn-primary" onclick="kirimNilai('https://drive.google.com/drive/folders/1ksq9HvAGo_mdd0-ebssH1Cv0GABG7iOG')">Kirim Nilai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function kirimNilai(folderLink) {
            // Mengarahkan pengguna ke tautan Google Drive yang diberikan
            window.open(folderLink, '_blank');
        }
    </script>

<?php include 'footerAll.php'; ?>
</body>
</html>
