<?php
require 'nav.php';
require 'db.php'; // file untuk koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $email = $_POST['emailMahasiswa'];
    $password = password_hash($_POST['passwordMahasiswa'], PASSWORD_BCRYPT);

    // Cek apakah email sudah terdaftar
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Email sudah terdaftar!";
    } else {
        // Insert into users table
        $user_type = 'mahasiswa';
        $stmt = $conn->prepare("INSERT INTO users (username, password, email, user_type) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $npm, $password, $email, $user_type);
        if ($stmt->execute()) {
            $user_id = $stmt->insert_id;
            // Insert into mahasiswa table
            $stmt = $conn->prepare("INSERT INTO mahasiswa (user_id, nama, npm) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $user_id, $nama, $npm);
            if ($stmt->execute()) {
                header("Location: index.php?type=mahasiswa");
                exit();
            } else {
                echo "Gagal mendaftarkan mahasiswa!";
            }
        } else {
            echo "Gagal mendaftarkan pengguna!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/registerMhs.css">
</head>
<body>
    <!-- navbar -->
    <?php require 'nav.php'; ?>

    <!-- form register -->
    <br><br><br>
    <div class="register-container">
        <div class="form-container">
            <h2>Register Mahasiswa</h2>
            <form id="registerMahasiswaForm" action="registermhs.php" method="post" onsubmit="return validateMahasiswaEmail()">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" required>
                <label for="emailMahasiswa">Email:</label>
                <input type="email" id="emailMahasiswa" name="emailMahasiswa" required>
                <label for="passwordMahasiswa">Password:</label>
                <div class="password-container">
                    <input type="password" id="passwordMahasiswa" name="passwordMahasiswa" required>
                    <span class="toggle-password" id="togglePasswordMahasiswa">Show</span>
                </div> <br>
                <button type="submit">Daftar</button>
            </form>
        </div>
    </div>

    <script>
        function validateMahasiswaEmail() {
            var emailInput = document.getElementById("emailMahasiswa").value;
            var emailPattern = /^[a-zA-Z0-9._-]+@unsika\.ac\.id$/;
            if (!emailPattern.test(emailInput)) {
                alert("Hanya alamat email @unsika.ac.id yang diperbolehkan!");
                return false;
            }
            return true;
        }

        document.getElementById('togglePasswordMahasiswa').addEventListener('click', function() {
            var passwordInput = document.getElementById('passwordMahasiswa');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                this.textContent = 'Show';
            }
        });
    </script>
    
</body>
</html>
