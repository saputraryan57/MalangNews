<?php
// Mulai session
session_start();

// Periksa apakah pengguna sudah login
header('Location: d_data_penulis.php');

// Lakukan koneksi ke database
include 'connection.php';

// Periksa apakah ID telah diterima melalui URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data penulis berdasarkan ID
    $sql = "DELETE FROM tb_data_penulis WHERE id_data_penulis = ?";
    
    if ($stmt = mysqli_prepare($koneksi, $sql)) {
        mysqli_stmt_bind_param($stmt, "i", $id);

        // Jalankan pernyataan
        if (mysqli_stmt_execute($stmt)) {
            // Berhasil dihapus, alihkan ke halaman data penulis dengan pesan sukses
            echo '<script>alert("Data Berhasil Di Hapus!.");
            window.locate = d_data_penulis.php;
            </script>';
            exit;
        } else {
            // Terjadi kesalahan saat menghapus data
            echo "Terjadi kesalahan saat menghapus data. Silakan coba lagi nanti.";
        }

        // Tutup pernyataan
        mysqli_stmt_close($stmt);
    } else {
        // Terjadi kesalahan saat mempersiapkan pernyataan
        echo "Terjadi kesalahan saat mempersiapkan pernyataan. Silakan coba lagi nanti.";
    }
} else {
    // ID tidak diberikan dalam URL
    echo "ID tidak ditemukan.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>

<script>
function konfirmasiHapus(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = 'hapus_data_penulis.php?id=' + id;
    }
}
</script>

