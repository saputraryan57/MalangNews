<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <header>
        <nav class="menu-container">
            <!-- burger menu -->
            <input type="checkbox" aria-label="Toggle menu" />
            <span></span>
            <span></span>
            <span></span>
          
            <!-- logo -->
            <a href="#" class="menu-logo">
              <img src="Malang News.png" alt="My Awesome Website"/>
            </a>
          
            <!-- menu items -->
            <div class="menu">
              <ul>
              </ul>
              <ul>
                <li>
                  <a href="2218114_Tugas1.php">
                    Home
                  </a>
                </li>
                <li>
                  <a href="login.php">
                    Login
                  </a>
                </li>
                <li>
                  <a href="register.php">
                    Register
                  </a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <section id="login">
    <form action="#" method="POST">
        <label for="username">Masukan Username</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Masukan Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    <?php
    // Pengaturan cookie
    $c_email = "email";
    $c_user = "username";
    $c_pass = "password";
    
    // Mendapatkan nilai dari cookie
    $c_userValue = isset($_COOKIE[$c_user]) ? $_COOKIE[$c_user] : '';
    $c_passValue = isset($_COOKIE[$c_pass]) ? $_COOKIE[$c_pass] : '';
    
    // Cek jika POST data telah dikirimkan
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validasi input pengguna
        $user = isset($_POST['username']) ? $_POST['username'] : '';
        $pass = isset($_POST['password']) ? $_POST['password'] : '';
    
        // Validasi username dan password dari POST terhadap cookie
        if ($user === $c_userValue && $pass === $c_passValue) {
            // Redirect ke halaman dashboard setelah login berhasil
            header('Location: dashboar.php');
            exit(); // Pastikan untuk menghentikan eksekusi skrip setelah redireksi
        } else {
            echo '<script>alert("Login GAGAL, Silahkan Cek Username dan Password Anda")</script>';
        }
    }
    ?>
</section>
    <footer>
        <p> © 2024 Malang News. All Rights Reserved.</p>
    </footer>

</body>
</html>