<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran Mahasiswa Baru</title>
  <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .container {
      margin-top: 50px;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

    h1, h2 {
      text-align: center;
      color: #343a40;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      text-align: center;
    }

    nav ul li {
      display: inline;
      margin: 0 15px;
    }

    nav ul li a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
    }

    nav ul li a:hover {
      color: #0056b3;
    }

    button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    form {
      padding: 20px;
    }

    @media (max-width: 768px) {
      .container {
        margin-top: 20px;
      }

      nav ul li {
        display: block;
        margin: 10px 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>PENDAFTARAN CALON MAHASISWA BARU</h1>
    <h2>POLITEKNIK NEGERI MADIUN</h2>
    <nav>
      <ul>
        <li><a href="create.php">Daftar Baru</a></li>
        <li><a href="read.php">Pendaftar</a></li>
      </ul>
    </nav>
  </div>
</body>
</html>
