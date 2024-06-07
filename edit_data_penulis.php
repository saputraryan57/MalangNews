<?php
include 'connection.php'; // menyertakan file connection.php untuk koneksi ke database

// Mengecek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $id_data_penulis = $_POST ['id_data_penulis'];
    $id_penulis = $_POST ['id_penulis'];
    $judul = $_POST ['judul'];
    $isi = $_POST ['isi'];
    $status_berita = $_POST ['status_berita'];

    // Menyiapkan pernyataan SQL untuk memasukkan data ke dalam tabel 
    $sql = "UPDATE tb_data_penulis SET 
    id_penulis ='$id_penulis', 
    judul = '$judul', 
    isi = '$isi', 
    status_berita = '$status_berita'
    WHERE id_data_penulis = $id_data_penulis";

    // Menjalankan pernyataan SQL
    if (mysqli_query($koneksi, $sql)) {
        // Data berhasil ditambahkan, tampilkan pesan alert
        echo '<script>alert("Data Penulis berhasil ditambahkan.");</script>';
    } else {
        // Jika terjadi kesalahan, tampilkan pesan alert dengan informasi error
        echo '<script>alert("Error: ' . $sql . '<br>' . mysqli_error($koneksi) . '");</script>';
    }

    // Menutup koneksi
    mysqli_close($koneksi);

    // Redirect kembali ke halaman add-dokter.php setelah proses input selesai
    echo '<script>window.location.href = "d_data_penulis.php";</script>';
}
?>
