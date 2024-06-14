<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas 4B Informatika</title>
    <link rel="stylesheet" href="css/kelas.css">
</head>
<body>

    <!-- navbar -->
    <?php require 'navMhs.php'; ?>

    <br><br><br><br><br><br>
    <div class="container">
        <h1>Selamat datang di Kelas 4B Informatika</h1>
        <p>Periksa tugas, materi, atau informasi terkini di kelas ini.</p>

        <div class="menu">
            <div class="card" id="matkul1">
                <div class="card-content">
                    <h2>Pemrograman Berbasis Web</h2>
                    <p>Nama Pengajar: Pandapotan K Sitorus,M.Kom</p>
                    <button onclick="showInfo('info1')">Lihat Kelas</button>
                </div>
                <div class="info" id="info1">
                    <h3>Informasi Terkini</h3>
                    <p>Informasi terkini untuk Matkul 1.</p>
                    <div class="upload">
                        <h3>Upload Tugas</h3>
                        <form action="hasilMhs.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="matkul" value="matkul1">
                            <label for="file1">Upload File:</label>
                            <input type="file" id="file1" name="file1"><br><br>
                            <label for="link1">or Enter Link:</label>
                            <input type="url" id="link1" name="link1" placeholder="http://"><br><br>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="card" id="matkul2">
                <div class="card-content">
                    <h2>Sistem Operasi</h2>
                    <p>Nama Pengajar: Deni Eka Putra, M.Kom</p>
                    <button onclick="showInfo('info2')">Lihat Kelas</button>
                </div>
                <div class="info" id="info2">
                    <h3>Informasi Terkini</h3>
                    <p>Informasi terkini untuk Matkul 2.</p>
                    <div class="upload">
                        <h3>Upload Tugas</h3>
                        <form action="hasilMhs.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="matkul" value="matkul2">
                            <label for="file2">Upload File:</label>
                            <input type="file" id="file2" name="file2"><br><br>
                            <label for="link2">or Enter Link:</label>
                            <input type="url" id="link2" name="link2" placeholder="http://"><br><br>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    function showInfo(infoId) {
        const infoElements = document.querySelectorAll('.info');
        infoElements.forEach(info => {
            if (info.id === infoId) {
                info.style.display = (info.style.display === 'none' || info.style.display === '') ? 'block' : 'none';
            } else {
                info.style.display = 'none';
            }
        });
    }

    // Function to display tasks
    function displayTasks() {
        const tasks = JSON.parse(localStorage.getItem('tasks')) || {};
        Object.keys(tasks).forEach(key => {
            const taskList = document.createElement('ul');
            tasks[key].forEach(task => {
                const listItem = document.createElement('li');
                listItem.textContent = task;
                taskList.appendChild(listItem);
            });
            const infoDiv = document.getElementById(key);
            if (infoDiv) {
                infoDiv.appendChild(taskList);
            }
        });
    }

    // Call function to display tasks when the page loads
    window.onload = function() {
        displayTasks();
    };
    </script>
</body>
</html>
