<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran</title>
  
  <style>
    /* Reset default margin and padding */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Style container */
    .container {
      max-width: 600px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      background-color: #f9f9f9;
      animation: fadeInAnimation 1s ease-in-out;
    }

    @keyframes fadeInAnimation {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Style form heading */
    .container h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* Style form label */
    form label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #666;
    }

    /* Style form input */
    form input[type="text"],
    form input[type="number"] {
      width: calc(100% - 22px);
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
    }

    /* Style form button */
    form button {
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

    form button:hover {
      background-color: #45a049;
    }

    /* Responsive design */
    @media (max-width: 600px) {
      .container {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Formulir Pendaftaran Siswa</h1>
    <form action="proses_pendaftaran.php" method="POST">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required><br>

      <label for="umur">Umur:</label>
      <input type="number" id="umur" name="umur" required><br>

      <label for="kelas">Kelas:</label>
      <input type="text" id="kelas" name="kelas" required><br>

      <button type="submit">Daftar</button>
    </form>
  </div>
</body>
</html>
