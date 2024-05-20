<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'pendaftaran_siswa');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kelas = $_POST['kelas'];

    $sql = "INSERT INTO siswa (nama, umur, kelas) VALUES ('$nama', '$umur', '$kelas')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: read.php');
}
?>
