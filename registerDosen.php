<?php
require 'nav.php';
require 'db.php'; // file untuk koneksi database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['namaDosen'];
    $nip = $_POST['nip'];
    $email = $_POST['emailDosen'];
    $password = password_hash($_POST['passwordDosen'], PASSWORD_BCRYPT);

    // Cek apakah email sudah terdaftar
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Email sudah terdaftar!";
    } else {
        // Insert into users table
        $user_type = 'dosen';
        $stmt = $conn->prepare("INSERT INTO users (username, password, email, user_type) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nip, $password, $email, $user_type);
        if ($stmt->execute()) {
            $user_id = $stmt->insert_id;
            // Insert into dosen table
            $stmt = $conn->prepare("INSERT INTO dosen (user_id, nama, nip) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $user_id, $nama, $nip);
            if ($stmt->execute()) {
                header("Location: index.php?type=dosen");
                exit();
            } else {
                echo "Gagal mendaftarkan dosen!";
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
    <title>Register Dosen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/registerDosen.css">
</head>
<body>

<!-- navbar -->
<?php require 'nav.php'; ?>
<br><br><br><br><br><br><br><br><br>
<!-- konten -->
<div class="form-container">
    <h2>Register Dosen</h2>
    <form id="registerDosenForm" action="registerdosen.php" method="post" onsubmit="return validateDosenEmail()">
        <label for="namaDosen">Nama:</label>
        <input type="text" id="namaDosen" name="namaDosen" required>
        <label for="nip">NIP:</label>
        <input type="text" id="nip" name="nip" required>
        <label for="emailDosen">Email:</label>
        <input type="email" id="emailDosen" name="emailDosen" required>
        <label for="passwordDosen">Password:</label>
        <div class="password-container">
            <input type="password" id="passwordDosen" name="passwordDosen" required>
            <span class="toggle-password" id="togglePasswordDosen">Show</span>
        </div><br>
        <button type="submit">Daftar</button>
    </form>
</div>

<script>
    function validateDosenEmail() {
        var emailInput = document.getElementById("emailDosen").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@unsika\.ac\.id$/;
        if (!emailPattern.test(emailInput)) {
            alert("Hanya alamat email @unsika.ac.id yang diperbolehkan!");
            return false;
        }
        return true;
    }

    document.getElementById('togglePasswordDosen').addEventListener('click', function() {
        var passwordInput = document.getElementById('passwordDosen');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            this.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            this.textContent = 'Show';
        }
    });
</script>


<!-- footer -->

</html>
