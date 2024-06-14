<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Kelas</title>
    <link rel="stylesheet" href="css/homeMhs.css">
</head>
<body>
<!-- navbar -->
<?php require 'navMhs.php'; ?>

<!-- konten -->
    <div class="container">
        <div class="left">
            <h3>Selamat datang</h3>
            <p>Masuk ke kelas Anda sekarang</p>
        </div>
        <div class="right">
            <div class="form-container">
                <h3>Masuk Kelas</h3>
                <form id="classForm">
                    <label for="kelas">Pilih Kelas:</label><br>
                    <select id="kelas" name="kelas" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="2">Kelas 2</option>
                        <option value="4">Kelas 4</option>
                    </select><br>

                    <div id="subClassContainer" style="display: none;">
                        <label for="subKelas">Pilih Sub-Kelas:</label><br>
                        <select id="subKelas" name="subKelas" required>
                            <option value="" disabled selected>Pilih Sub-Kelas</option>
                        </select><br>
                    </div>

                    <button type="submit">Masuk Kelas</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('kelas').addEventListener('change', function() {
        const subClassContainer = document.getElementById('subClassContainer');
        const subKelas = document.getElementById('subKelas');
        subKelas.innerHTML = '<option value="" disabled selected>Pilih Sub-Kelas</option>';

        const selectedClass = this.value;
        if (selectedClass === '2' || selectedClass === '4' || selectedClass === '6') {
            subClassContainer.style.display = 'block';
            if (selectedClass === '2') {
                subKelas.innerHTML += '<option value="2a">Kelas 2A</option><option value="2b">Kelas 2B</option>';
            } else if (selectedClass === '4') {
                subKelas.innerHTML += '<option value="4a">Kelas 4A</option><option value="4b">Kelas 4B</option>';
            } 
        } else {
            subClassContainer.style.display = 'none';
        }
    });

    document.getElementById('classForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const kelas = document.getElementById('kelas').value;
        const subKelas = document.getElementById('subKelas').value;
        let alamatKelas = '';

        switch(kelas) {
            case '2':
                alamatKelas = subKelas === '2a' ? 'kelas2a.php' : 'kelas2b.php';
                break;
            case '4':
                alamatKelas = subKelas === '4a' ? 'kelas4a.php' : 'kelas4b.php';
                break;
            default:
                break;
        }

        window.location.href = alamatKelas;
    });
    </script>
</body>
</html>
