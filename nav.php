<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Utama</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
<header>
    <a href="#" class="logo">
        <img src="img/logo.png" alt="logo">
    </a>

    <ul class="navbar">
    <li><a href="index.php#home">Beranda</a></li>
    <li><a href="index.php#tentang">Tentang</a></li>
    <li><a href="index.php#contact">Kontak</a></li>
</ul>

    <div class="header-icons">
    <a id="user-icon" href="#"><i class='bx bx-user'></i></a>
</div>

<script>
    document.getElementById('user-icon').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default link
        window.location.href = 'login.php'; // Mengarahkan ke halaman login.php
    });
</script>

</header>
</body>
</html>