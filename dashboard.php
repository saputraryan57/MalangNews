<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Malang News</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>
    <header>
        <img src="Malang News.png" alt="logo" width="200" />
        <nav>
            <ul>
                <li><a href="dashboard.php">News</a></li>
                <li><a href="dashboar.php">Admin</a></li>
                <li><a href="2218114_Tugas1.php">log out</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="carousel-container">
        <div class="carousel">
            <div class="carousel-item">
                <img src="1.jpg">
            </div>
            <div class="carousel-item">
                <img src="2.jpg">
            </div>
            <div class="carousel-item">
                <img src="3.jpg">
            </div>
        </div>
        <div class="dots-container"></div>
    </div>
    <section id="overview">
        <h2>Welcome to Malang News</h2>
        <p>Selamat datang di dashboard Malang News. Di sini Anda dapat mengelola berbagai aspek platform berita.</p>
        <div id="myElement" class="hidden">
            <p>Anda bisa membaca berita terbaru setiap harinya dari laman kami, jadi jangan sampai ketinggalan update terbaru dari berita kami</p>
        </div>
        <button onclick="toggleVisibility()" class="tombol"> Baca Selengkapnya &#9660;</button>
    </section>
    <section id="latest-news">
        <h2>Berita Terbaru</h2>
        <ul>
            <li>
                <h3>Waspadai Peredaran Uang Palsu saat Tukar Uang Baru di Tepi Jalan.</h3>
                <button id="open-popup-btn"> AYO MEMBACA BERITA INI </button>
            </li>
            <li>
                <h3>Pemkot Malang Usul Rp 1 Miliar untuk Renovasi Gedung Kesenian Gajayana</h3>
                <a href="Berita 2"> Sign Up </a>
            </li>
        </ul>
    </section>
    <footer>
        <p>© 2024 Malang News. All Rights Reserved.</p>
    </footer>
    <div id="popup" class="popup">
        <div class="popup-content">
            <article>
                <h2>Waspadai Peredaran Uang Palsu saat Tukar Uang Baru di Tepi Jalan.</h2>
                <img src="berita1.jpg" alt="logo" width="350" />
                <p>MALANG - Menjelang Idul Fitri 1445 Hijriyah, Polres Malang mengimbau masyarakat untuk lebih berhati-hati terhadap uang palsu. Peredaran uang palsu perlu diwaspadai terutama ketika akan melakukan penukaran uang.
                Sebagaimana diketahui, jasa penukaran uang resmi yang minim terjadinya pertukaran uang palsu bisa dilakukan di Bank Indonesia (BI). Namun, masih banyak masyarakat yang memanfaatkan jasa penukaran uang tak resmi seperti di pinggir jalan yang saat ini mulai menjamur.
                Kasihumas Polres Malang Ipda Dicka Ermantara mengatakan, untuk mencegah terjadinya peredaran uang palsu, pihaknya telah melakukan imbauan secara preventif maupun preemtif.
                “Kepada masyarakat Kabupaten Malang untuk menukarkan uangnya di bank yang sudah terafiliasi dengan BI. <b>Baca selengkapnya untuk melanjutkan membaca.</b> </p>
            </article>
            <span><button id="close-popup-btn" class="popup-close">Tutup</button></span><a href="Berita1.php"><button class="popup-close">Baca Selengkapnya</button></a>
        </div>
    </div>
    <script src="script.js"></script>

    <?php include 'dashboar.php'; ?>

</body>
</html>