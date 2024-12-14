<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari form input biodata
    $nik = htmlspecialchars($_POST['nik']);
    $nama = htmlspecialchars($_POST['nama']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $agama = htmlspecialchars($_POST['agama']);

    // Menampilkan data yang telah diproses
    echo "<h3>Data Biodata Anda:</h3>";
    echo "<p><strong>NIK:</strong> $nik</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Tempat Lahir:</strong> $tempat_lahir</p>";
    echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
    echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
    echo "<p><strong>Alamat:</strong> $alamat</p>";
    echo "<p><strong>Agama:</strong> $agama</p>";
    
}
?>