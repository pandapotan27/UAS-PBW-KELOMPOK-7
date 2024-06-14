<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillHive</title>

    <!-- link to css -->
    <link rel="stylesheet" href="css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap'); </style>
</head>
<body>

<!-- navbar -->
<?php require 'nav.php'; ?>


<!-- start section -->

<!-- section beranda -->
<section class="home" id="home">
    <div class="home-text">
        <h2>E - LEARNING</h2>
        <p>Selamat datang di Platform E-Learning SkillHive, Mulai sekarang ayo nugas dengan platform ini agar lebih asyik dan mudah untuk anda.</p>
        
        <div class="button-container">
        <a href="login.php"><button class="btn-mulai">Mulai</button>
    </div>
    </div>

    <div class="home-img">
        <img src="/img/home.jpg" alt="">

    </div>
</section>

<!-- section tentang -->
<section class="tentang" id="tentang">
    <div class="tentang-text">
        <h5>Apa Itu SkillHive?</h5>
        <p>Skillhive adalah platform online yang bergerak dibidang e - learning, dimana platform ini dibuat untuk memudahkan mahasiswa dalam mendapatkan informasi tugas, dan materi dari dosen. Platform ini juga dirancang untuk memudahkan mahasiswa dalam mengirim tugas kepada dosen.</p>
    </div>   
    <div class="gambar-container">
        <img src="img/logo.png" alt="Logo">
    </div>
</section>


<!-- section kontak -->
<section class="contact" id="contact">
    <h2>CONTACT ADDRESS</h2>
    <br><br>
    <div class="contact-info">
        <div class="map">
            <!-- Tambahkan peta dari layanan peta pilihan Anda di sini -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.545759899547!2d107.30382347370148!3d-6.323234461871609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977ccb34822e1%3A0x6c4c7c12678610e0!2sUniversitas%20Singaperbangsa%20Karawang%20(UNSIKA)!5e0!3m2!1sid!2sid!4v1716739568530!5m2!1sid!2sid" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

</div>
</body>
<!-- footer index -->
<footer>
        <?php require 'footer.php'; ?>
    </footer>
</html>

