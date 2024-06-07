    <?php 
    include 'connection.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_data_penulis WHERE id_data_penulis = '$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="das.css">
    <title>Edit Data Penulis</title>
</head>
<body>
<?php include 'sidebar.php'; ?>
    <section id="data_penulis" class="form-section">
        <h2>Tambah Data Penulis</h2>
        <form action="edit_data_penulis.php" method="POST">

            <label for="id_data_penulis">ID DATA PENULIS</label>
            <input type="text" id="id_data_penulis" name="id_data_penulis" value="<?= $data['id_data_penulis']?>" required>
            
            <label for="id_penulis">ID DATA PENULIS</label>
            <input type="text" id="id_penulis" name="id_penulis" value="<?= $data['id_penulis'] ?>" required>

            <label for="judul">JUDUL</label>
            <input type="text" id="judul" name="judul" value="<?= $data['judul'] ?>" required>

            <label for="isi">ISI</label>
            <input type="text" id="isi" name="isi" value="<?= $data['isi'] ?>" required>

            <label for="status_berita">STATUS BERITA</label>
            <select id="status_berita" name="status_berita" required>
                <option value="Publish"<?= $data['status_berita'] == 'Publish' ? 'selected' : '' ?>>PUBLISH</option>
                <option value="Pending"<?= $data['status_berita'] == 'Pending' ? 'selected' : '' ?>>PENDING</option>
            </select>
            
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
</body>

</html>