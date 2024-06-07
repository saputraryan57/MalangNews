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
    <section id="data_penulis" class="form-section">
        <h2>Tambah Data Penulis</h2>
        <form action="insert_data_penulis.php" method="POST">

            <label for="id_data_penulis">ID DATA PENULIS</label>
            <input type="text" id="id_data_penulis" name="id_data_penulis" required>
            
            <label for="id_penulis">ID DATA PENULIS</label>
            <input type="text" id="id_penulis" name="id_penulis" required>

            <label for="judul">JUDUL</label>
            <input type="text" id="judul" name="judul" required>

            <label for="isi">ISI</label>
            <input type="text" id="isi" name="isi" required>

            <label for="status_berita">STATUS BERITA</label>
            <select id="status_berita" name="status_berita" required>
                <option value="Publish">PUBLISH</option>
                <option value="Pending">PENDING</option>
            </select>
            
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
</body>
<!-- Di dalam tag <script> pada halaman add-data_penulis.php -->
<script>
    // Membersihkan nilai dari input field setelah halaman dimuat kembali
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("id_data_penulis").value = "";
        document.getElementById("id_penulis").value = "";
        document.getElementById("judul").value = "";
        document.getElementById("isi").value = "";
        document.getElementById("status_berita").value = "";
    });
</script>

</html>