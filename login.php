<?php
require 'nav.php';
require 'db.php'; // file untuk koneksi database
session_start();

// Inisialisasi variabel untuk pesan error
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = strtolower($_POST['role']);

    // Cek apakah email ada di tabel users
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND user_type = ?");
    if ($stmt) {
        $stmt->bind_param("ss", $email, $role);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session jika login berhasil
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['email'] = $user['email'];

                // Redirect ke halaman sesuai peran
                if ($role === 'dosen') {
                    header("Location: homeDosen.php");
                    exit();
                } elseif ($role === 'mahasiswa') {
                    header("Location: homeMhs.php");
                    exit();
                }
            } else {
                $error = "Password salah!";
            }
        } else {
            $error = "User tidak terdaftar atau role tidak sesuai!";
        }

        $stmt->close();
    } else {
        $error = "Terjadi kesalahan pada server. Silakan coba lagi nanti.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<!-- navbar -->
<?php require 'nav.php'; ?>
<br><br><br><br><br><br><br><br><br>

<!-- form login -->
<div class="login-container">
    <h2>Login</h2>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <form id="loginForm" action="login.php" method="post" onsubmit="return validateEmail()">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <div class="password-container">
            <input type="password" id="password" name="password" required>
            <span class="toggle-password" id="togglePassword">Show</span><br>
        </div>
        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="dosen">Dosen</option>
            <option value="mahasiswa">Mahasiswa</option>
        </select>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</div>


<script>
    function validateEmail() {
        var emailInput = document.getElementById("email").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@unsika\.ac\.id$/;
        if (!emailPattern.test(emailInput)) {
            alert("Hanya alamat email @unsika.ac.id yang diperbolehkan!");
            return false;
        }
        return true;
    }

    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
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
