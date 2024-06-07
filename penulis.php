<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Berita</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <div class="bars">
        <h1>Malang News</h1>
        <ul>
          <li><a href="dashboar.php">Dashboard</a></li>
          <li><a href="utama.php">List Berita</a></li>
          <li><a href="penulis.php">Penulis</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
    </div>
  </nav>
  
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>Nama Penulis</th>
        <th>Jumlah Berita</th>
        <th>Gaji</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Fiky</td>
        <td>20</td>
        <td>1.000.000</td>
        <td class="p">Paid</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Rian</td>
        <td>10</td>
        <td>500.000</td>
        <td class="n">Not Paid</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Munet</td>
        <td>5</td>
        <td>100.000</td>
        <td class="n">Not Paid</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
