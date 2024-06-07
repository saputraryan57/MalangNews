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
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <section id="content">
        <?php
        // Lakukan koneksi ke database
        include 'connection.php';

        // Query untuk mengambil data dokter dari tabel penulis
        $sql = "SELECT * FROM tb_penulis";
        $result = mysqli_query($koneksi, $sql);

        // Buat tabel HTML untuk menampilkan data dokter
        echo '<table class="data-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>No</th>';
        echo '<th>ID PENULIS</th>';
        echo '<th>NAMA PENULIS</th>';
        echo '<th>EMAIL</th>';
        echo '<th>NO TELP</th>';
        echo '<th>BIO PENULIS</th>';
        echo '<th>ID ADMIN</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Periksa apakah terdapat data dokter
        if (mysqli_num_rows($result) > 0) {
            $counter = 1;
            // Ambil setiap baris data dari hasil query dan tampilkan dalam bentuk baris tabel HTML
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $counter++ . '</td>';
                echo '<td>' . $row['id_penulis'] . '</td>'; // Tampilkan ID penulis
                echo '<td>' . $row['nama_penulis'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['nomor_telepon'] . '</td>';
                echo '<td>' . $row['bio_penulis'] . '</td>';
                echo '<td>' . $row['id_admin'] . '</td>';
                echo '</tr>';
            }
        } else {
            // Jika tidak ada data dokter
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