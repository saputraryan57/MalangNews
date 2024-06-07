<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
              <img src="/Malang News.png" alt="My Awesome Website"/>
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
    <section id="register">
    <form action="" method="POST">
            <label for="Username">Masukan Username</label>
            <input type="text" id="username" name="username" required>

            <label for="Email">Masukan Email</label>
            <input type="email" id="email" name="email" required>
                
            <label for="password">Masukan Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">Masuk</button>

            <?php
            session_start(); 
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Mengambil input pengguna
                $email = $_POST['email'] ?? '';
                $user = $_POST['username'] ?? '';
                $pass = $_POST['password'] ?? '';

                if ($email && $user && $pass) {
                    // Update cookie dengan data baru
                    setcookie('email', $email, time() + (86400 * 30), "/");
                    setcookie('username', $user, time() + (86400 * 30), "/");
                    setcookie('password', $pass, time() + (86400 * 30), "/");
                    
                    // Simpan data ke dalam session
                    $_SESSION['email'] = $email;
                    $_SESSION['username'] = $user;
                    $_SESSION['password'] = password_hash($pass, PASSWORD_DEFAULT);
                }
            }
            ?>

        </form>
        <p>Login ke akun yang sudah ada? <a href="login.php">Masuk di sini</a></p>
        </section>
    <footer>
        <p> © 2024 MALANG NEWS. All Rights Reserved.</p>
    </footer>
</body>
</html>