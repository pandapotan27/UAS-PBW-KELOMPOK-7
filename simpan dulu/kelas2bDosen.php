<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas 2A Struktur Data</title>
    <link rel="stylesheet" href="css/kelasDosen.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('form').submit(function(event){
                event.preventDefault();
                var form = $(this);
                var formData = new FormData(this);

                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response){
                        alert('Success: ' + JSON.stringify(response));
                        // Optionally, update the page content here based on the response
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        alert('Error: ' + textStatus + ' ' + errorThrown);
                    }
                });
            });
        });
    </script>
</head>
<body>

<?php require 'navDosen.php'; ?>
<br><br><br><br><br><br><br><br>
<div class="container">
    <h1>Kelas 2A Struktur Data</h1>
    <div class="form-container">
        <div class="form-section">
            <h2>Kirim Tugas</h2>
            <form id="formTugas" action="proses_kirim_tugas.php" method="POST" class="form green">
                <input type="hidden" name="kelas" value="2A">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" required><br><br>
                <label for="deskripsi">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea><br><br>
                <label for="batas_pengumpulan">Batas Pengumpulan:</label>
                <input type="datetime-local" id="batas_pengumpulan" name="batas_pengumpulan" required><br><br>
                <label for="file_tugas">Upload File:</label>
                <input type="file" id="file_tugas" name="file_tugas" required><br><br>
                <button type="submit">Kirim Tugas</button>
            </form>
        </div>
        <div class="form-section">
            <h2>Kirim Materi</h2>
            <form id="formMateri" action="proses_kirim_materi.php" method="POST" class="form green">
                <input type="hidden" name="kelas" value="2A">
                <label for="judul_materi">Judul:</label>
                <input type="text" id="judul_materi" name="judul_materi" required><br><br>
                <label for="deskripsi_materi">Deskripsi:</label>
                <textarea id="deskripsi_materi" name="deskripsi_materi" rows="4" required></textarea><br><br>
                <label for="file_materi">Upload File:</label>
                <input type="file" id="file_materi" name="file_materi" required><br><br>
                <button type="submit">Kirim Materi</button>
            </form>
        </div>
        <div class="form-section">
            <h2>Informasi</h2>
            <form id="formInformasi" action="proses_tambah_informasi.php" method="POST" class="form green">
                <input type="hidden" name="kelas" value="2A">
                <label for="judul_informasi">Judul:</label>
                <input type="text" id="judul_informasi" name="judul_informasi" required><br><br>
                <label for="deskripsi_informasi">Deskripsi:</label>
                <textarea id="deskripsi_informasi" name="deskripsi_informasi" rows="4" required></textarea><br><br>
                <button type="submit">Kirim Informasi</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
