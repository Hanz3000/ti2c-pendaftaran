<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Siswa</title>
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
      max-width: 600px;
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

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 10px;
      color: #666;
    }

    input[type="text"],
    input[type="number"] {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
    }

    button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: white;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
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
    <h1>Edit Siswa</h1>
    <?php
    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'pendaftaran_siswa');

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM siswa WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Data tidak ditemukan";
        }
    }

    $conn->close();
    ?>
    <form action="proses_edit.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>

      <label for="umur">Umur:</label>
      <input type="number" id="umur" name="umur" value="<?php echo $row['umur']; ?>" required><br>

      <label for="kelas">Kelas:</label>
      <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>" required><br>

      <button type="submit">Update</button>

    </form>
  </div>
</body>
</html>
