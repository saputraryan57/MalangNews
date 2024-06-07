<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Berita</title>
  <link rel="stylesheet" href="das.css">
  <style>
    /* CSS untuk widget */
    .widget {
    margin-top: 40px;
    
}

.widget h2 {
    font-size: 30px;
    margin-bottom: 20px;
    border-bottom: 2px solid #ccc;
    padding-bottom: 10px;
    text-align: center;
    margin-top: 20px; /* Memberi jarak atas */
}

.widget li {
    width: 200px; /* Mengatur lebar setiap kotak */
    height: 100px; /* Mengatur tinggi setiap kotak */
    margin: 40px; /* Memberi jarak antar kotak */
    padding: 30px; /* Menambah ruang padding untuk isi */
    border-radius: 10px; /* Memberi sudut border */
    background-color: antiquewhite; /* Warna latar belakang item */
    text-align: center; /* Mengatur teks ke tengah */
    font-size: 20px; /* Ukuran font */
    color: #333; /* Warna teks */
    font-family: Arial, sans-serif; /* Jenis font */
    line-height: 4; /* Tinggi baris */
    
}


.widget ul {
    list-style-type: none;
    padding: 0;
    text-align: center;
    margin-top: 30px; /* Memberi jarak atas */
    display: flex; /* Menggunakan flexbox */
    flex-wrap: wrap; /* Mengatur agar kotak-kotak data dapat melingkar jika tidak cukup ruang */
    justify-content: center; /* Mengatur agar kotak-kotak data berada di tengah */
}

.widget li:last-child {
    margin-bottom: 0;
}

.content {
    text-align: center; /* Mengatur teks ke tengah */
    margin-top: 50px; /* Memberi jarak atas */
}

  </style>
</head>
<body>

<?php 
// Koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db_malangnews';

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if(!$koneksi) {
    die('Koneksi Gagal:' . mysqli_connect_error());
}

// Query untuk mendapatkan jumlah data pada tabel tb_data_penulis
$sql_tb_data_penulis = "SELECT COUNT(*) as total_tb_data_penulis FROM tb_data_penulis";
$result_tb_data_penulis = mysqli_query($koneksi, $sql_tb_data_penulis);
$row_tb_data_penulis = mysqli_fetch_assoc($result_tb_data_penulis);
$total_tb_data_penulis = $row_tb_data_penulis['total_tb_data_penulis'];

// Query untuk mendapatkan jumlah data pada tabel tb_penulis
$sql_tb_penulis = "SELECT COUNT(*) as total_tb_penulis FROM tb_penulis";
$result_tb_penulis = mysqli_query($koneksi, $sql_tb_penulis);
$row_tb_penulis = mysqli_fetch_assoc($result_tb_penulis);
$total_tb_penulis = $row_tb_penulis['total_tb_penulis'];

// Menutup koneksi
mysqli_close($koneksi);
?>

<?php include 'sidebar.php'; ?>

<section class="content">
    <h1>Selamat Datang Di Admin Malang News</h1>
</section>
<!-- Widget untuk menampilkan jumlah data -->
<div class="widget">
    <ul>
        <li>Data Penulis: <?php echo $total_tb_data_penulis; ?></li>
        <li>Penulis: <?php echo $total_tb_penulis; ?></li>
    </ul>
</div>

</body>
</html>
