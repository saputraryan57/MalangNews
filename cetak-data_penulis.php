<?php
session_start();
if ($_SESSION['email'] == null) {
    header('location:../dashboard.php');
    exit;
}

require '../dompdf/autoload.inc.php';
require '../connection.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Konfigurasi Dompdf
$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);

// Fetch data transaksi dari database
$sql = "SELECT * FROM tb_data_penulis";
$result = mysqli_query($koneksi, $sql);

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #19376D;
            color: white;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Laporan Transaksi</h2>
    <table>
        <thead>
            <tr>
                <th>ID DATA PENULIS</th>
                <th>ID PENULIS</th>
                <th>JUDUL</th>
                <th>ISI</th>
                <th>STATUS BERITA</th>
            </tr>
        </thead>
        <tbody>';

if (mysqli_num_rows($result) == 0) {
    $html .= '
        <tr>
            <td colspan="5">Data Kosong</td>
        </tr>';
} else {
    while ($data = mysqli_fetch_assoc($result)) {
        $html .= '
            <tr>
                <td>' . $data['id_data_penulis'] . '</td>
                <td>' . $data['id_penulis'] . '</td>
                <td>' . $data['judul'] . '</td>
                <td>' . $data['isi'] . '</td>
                <td>' . $data['status_berita'] . '</td>
            </tr>';
    }
}

$html .= '
        </tbody>
    </table>
</body>
</html>';

// Load HTML ke Dompdf
$dompdf->loadHtml($html);

// Set ukuran kertas dan orientasi
$dompdf->setPaper('A4', 'portrait');

// Render HTML menjadi PDF
$dompdf->render();

// Output PDF ke browser
$dompdf->stream("Laporan_Transaksi.pdf", ["Attachment" => 0]);

// Tutup koneksi database
mysqli_close($koneksi);
?>