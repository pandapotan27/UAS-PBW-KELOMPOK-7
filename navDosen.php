<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Mahasiswa</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', 'sans-serif';
        list-style: none;
        text-decoration: none;
        scroll-behavior: smooth;
    }

    :root {
        --bg-color:#ffffff;
        --text-color:#008000;
        --second-color:#323232;
        --main-coloer:#000000;
        --big-font: 3.8rem;
        --h2-font: 2.6rem;
        --p-font: 1.1rem;
    }

    body {
        background: var(--bg-color);
        color: var(--text-color);
    }

    header {
        position: fixed;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: var(--second-color);
        padding: 23px 13%;
        transition: all .40s ease;
    }

    .logo img {
    height: auto;
    width: 160px;
    max-width: 100%;
    transition: width 0.3s ease; /* Tambahkan efek transisi saat lebar gambar berubah */
    }

    .logo img:hover {
        width: 180px; /* Ubah lebar gambar saat dihover */
    }

    .navbar {
        display: flex;
    }

    .navbar a {
        color: var(--text-color);
        font-weight: 600;
        font-size: var(--bg-color);
        padding: 10px 22px;
        transition: all .40s ease;
    }

    .navbar a:hover {
        color: var(--bg-color);
    }

    .header-icons i {
        margin-left: 10px;
        font-size: 24px;
        color: var(--text-color);
        transition: all .40s ease;
        margin-right: 15px;
    }

    .header-icons i:hover {
        transform: scale(1.2);
        color: var(--text-color);
    }

    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Mengatur jarak dari atas */
    }

    .user-info {
        position: fixed;
        top: 80px;
        right: 20px;
        background: white;
        padding: 10px;
        border-radius: 5px;
        display: none;
    }

    .user-info p {
        margin-bottom: 5px;
    }

    /* Tampilan icon yang lebih menarik */
    .header-icons i {
        font-size: 30px;
        color: #008000;
        cursor: pointer;
        transition: color 0.3s;
    }

    .header-icons i:hover {
        color: #ffffff; /* Warna kuning saat hover */
    }

    /* Tampilan menu dropdown */
    .user-info {
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 10px;
        display: none;
    }

    .user-info p {
        margin-bottom: 10px;
    }

    .logout-btn {
        background-color: #ff0000; /* Warna merah */
        color: #fff;
        border: none;
        padding: 8px 15px;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-weight: 700;
    }

    .logout-btn:hover {
        background-color: #cc0000; /* Warna merah tua saat hover */
    }
    </style>
</head>
<body>

<header>
    <a href="#" class="logo">
        <img src="img/logo.png" alt="logo">
    </a>

    <ul class="navbar">
        <li><a href="homeDosen.php">Masuk Kelas</a></li>
        <li><a href="hasilDosen.php">Lihat Hasil</a></li>
        <li><a href="anggota.php">Anggota</a></li>
        <li><a href="lihatAbsen.php"></a></li>
    </ul>

    
    <div class="header-icons">
        <button class="logout-btn" id="logout-btn">Keluar</button> <!-- Ubah ikon menjadi tombol menu keluar -->
    </div>

</header>

<script>
    // Fungsi untuk logout (mengarahkan kembali ke halaman indeks)
    document.getElementById('logout-btn').addEventListener('click', function() {
        // Munculkan notifikasi konfirmasi
        var confirmation = confirm("Apakah Anda yakin ingin keluar?");

        // Jika pengguna menekan tombol OK dalam notifikasi
        if (confirmation) {
            // Redirect ke halaman indeks
            window.location.href = 'index.php';
        }
    });
</script>

</body>
</html>
