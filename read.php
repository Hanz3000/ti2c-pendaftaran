<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Siswa</title>
  <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      line-height: 1.6;
      padding: 20px;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      padding: 10px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      margin-bottom: 10px;
      border-radius: 4px;
      position: relative;
    }

    li:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transform: translateY(-2px);
    }

    li a {
      text-decoration: none;
      color: #333;
      margin-left: 10px;
      font-size: 14px;
    }

    li a:hover {
      color: #4CAF50;
    }

    .add-new {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .add-new:hover {
      background-color: #45a049;
    }

    @media (max-width: 600px) {
      .container {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Daftar Siswa</h1>
    <ul>
      <?php
      // Koneksi ke database
      $conn = new mysqli('localhost', 'root', '', 'pendaftaran_siswa');

      if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
      }

      $sql = "SELECT id, nama, umur, kelas FROM siswa";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo "<li>" . $row["nama"] . " - " . $row["umur"] . " - " . $row["kelas"];
              echo " <a href='edit.php?id=" . $row["id"] . "'>Edit</a>";
              echo " <a href='delete.php?id=" . $row["id"] . "'>Delete</a></li>";
          }
      } else {
          echo "<li>0 results</li>";
      }
      $conn->close();
      ?>
      <a href="create.php" class="add-new">[+] Tambah Baru</a>
    </ul>
  </div>
</body>
</html>
