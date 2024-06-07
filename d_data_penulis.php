<?php
// Mulai session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="das.css">
    <title>Data Penulis</title>
    <style>
        /* Gaya untuk tombol cetak */
.btn-cetak {
    background-color: #007bff; /* Warna latar belakang */
    color: #fff; /* Warna teks */
    border: none; /* Tanpa border */
    padding: 10px 20px; /* Padding */
    text-align: center; /* Teks ditengah */
    text-decoration: none; /* Tanpa garis bawah */
    display: inline-block;
    font-size: 16px; /* Ukuran font */
    cursor: pointer; /* Kursor berubah menjadi tangan saat dihover */
    border-radius: 5px; /* Membuat sudut yang melengkung */
    margin-left: 240px;
    margin-top: 10px;
}

/* Efek hover untuk tombol cetak */
.btn-cetak:hover {
    background-color: #0056b3; /* Warna latar belakang saat dihover */
}
    </style>
</head>

<body>
    
    <?php include 'sidebar.php'; ?>
    <section id="content">
        <?php
        // Lakukan koneksi ke database
        include 'connection.php';
        
        // Query untuk mengambil data dokter dari tabel penulis
        $sql = "SELECT * FROM tb_data_penulis";
        $result = mysqli_query($koneksi, $sql);

        // Tombol "Cetak" di atas tabel
        echo '<div style="margin-bottom: 10px;">';
        echo '<button onclick="window.print()" class="btn-cetak">Cetak</button>';
        echo '</div>';

        // Buat tabel HTML untuk menampilkan data penulis
        echo '<table class="data-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>No</th>';
        echo '<th>ID DATA PENULIS</th>';
        echo '<th>ID PENULIS</th>';
        echo '<th>JUDUL</th>';
        echo '<th>ISI</th>';
        echo '<th>STATUS BERITA</th>';
        echo '<th>AKSI</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Periksa apakah terdapat data penulis
        if (mysqli_num_rows($result) > 0) {
            $counter = 1;
            // Ambil setiap baris data dari hasil query dan tampilkan dalam bentuk baris tabel HTML
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $counter++ . '</td>';
                echo '<td>' . $row['id_data_penulis'] . '</td>'; // Tampilkan ID data penulis
                echo '<td>' . $row['id_penulis'] . '</td>';
                echo '<td>' . $row['judul'] . '</td>';
                echo '<td>' . $row['isi'] . '</td>';
                echo '<td>' . $row['status_berita'] . '</td>';
                echo '<td>
                <a class="btn-edit" href="data_penulis_edit.php?id='.$row['id_data_penulis'].'">Edit</a> 
                <a class="btn-hapus" href="data_penulis_hapus.php?id='.$row['id_data_penulis'].'">Hapus</a>
                
                </td>';
                
                echo '</tr>';
            }
        } else {
            // Jika tidak ada data penulis
            echo '<tr><td colspan="7">Tidak ada data penulis.</td></tr>';
        }

        echo '</tbody>';
        echo '</table>';
        
        // Tutup koneksi
        mysqli_close($koneksi);
        ?>
    </section>
</body>
</html>
