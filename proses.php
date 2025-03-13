<?php
require 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    $mahasiswa = new Mahasiswa();
    $mahasiswa->setData($nim, $nama);

    echo "<h2>Data Mahasiswa</h2>";
    echo $mahasiswa->getData();
} else {
    echo "Akses ditolak!";
}
?>
