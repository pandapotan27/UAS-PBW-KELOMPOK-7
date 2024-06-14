<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas PBW - Dosen</title>
    <link rel="stylesheet" href="css/kelasDosen.css">
</head>
<body>

<?php require 'navDosen.php'; ?>
<br><br><br><br><br><br><br><br>
<div class="container">
    <h1>Statistika dan Probabilitas </h1>
    <br><br>
    <div class="form-container">
        <div class="form-section">
            <h2>Kirim Tugas</h2>
            <form id="formTugas" action="https://drive.google.com/drive/folders/1kQrSqwukGsZXsNwJ-HJbYBB6SigDYIb6" method="GET" target="_blank" class="form green">
                <input type="hidden" name="jenis" value="tugas">
                <input type="hidden" name="kelas" value="2A">
                <button type="submit">Upload Tugas</button>
            </form>
        </div>
        <div class="form-section">
            <h2>Kirim Materi</h2>
            <form id="formTugas" action="https://drive.google.com/drive/folders/1kRm2wjuewwEEvNqKNeTf_TP9mLQklFNJ" method="GET" target="_blank" class="form green">
                <input type="hidden" name="jenis" value="materi">
                <input type="hidden" name="kelas" value="2A">
                <button type="submit">Upload Tugas</button>
            </form>
        </div>
        <div class="form-section">
            <h2>Informasi</h2>
            <form id="formTugas" action="https://drive.google.com/drive/folders/1kSoVPDxRN5n6IB5isR4sNJY5FdyIeCXC" method="GET" target="_blank" class="form green">
                <input type="hidden" name="jenis" value="informasi">
                <input type="hidden" name="kelas" value="2A">
                <button type="submit">Upload Tugas</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footerAll.php'; ?>
</body>
</html>
