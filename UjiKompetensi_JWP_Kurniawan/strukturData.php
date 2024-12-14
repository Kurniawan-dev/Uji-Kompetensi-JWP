<!-- Struktur Data menggunakan Array -->
<<?php 
// Array Untuk Menyimpan Data Mahasiswa
$daftar_Mahasiswa = array();

// Fungsi tambah data mahasiswa 
function tambahMahasiswa(&$daftar_Mahasiswa, $npm, $nama, $tempat_lahir, $tanggal_lahir, $prodi){
    $mahasiswa_baru = array (
        "npm"           => $npm,
        "nama"          => $nama,
        "tempat_lahir"  => $tempat_lahir,
        "tanggal_lahir" => $tanggal_lahir,
        "prodi"         => $prodi
    );

    array_push($daftar_Mahasiswa, $mahasiswa_baru);
    echo "Data mahasiswa telah ditambahkan<br>";
}

// Fungsi menampilkan data mahasiswa
function tampilMahasiswa($daftar_Mahasiswa){
    if (count($daftar_Mahasiswa) > 0) {
        foreach ($daftar_Mahasiswa as $mahasiswa) {
            echo "NPM :" . $mahasiswa["npm"] . "<br>";
            echo "Nama :" . $mahasiswa["nama"] . "<br>";
            echo "Tempat Lahir :" . $mahasiswa["tempat_lahir"] . "<br>";
            echo "Tanggal Lahir :" . $mahasiswa["tanggal_lahir"] . "<br>";
            echo "Prodi :" . $mahasiswa["prodi"] . "<br><br>";
        }
    } else {
        echo "Tidak ada data mahasiswa<br>";
    }
}

// Fungsi menghapus data mahasiswa menggunakan NPM
function hapusMahasiswa(&$daftar_Mahasiswa, $npm) {
    foreach ($daftar_Mahasiswa as $index => $mahasiswa) {
        if ($mahasiswa['npm'] == $npm) {
            unset($daftar_Mahasiswa[$index]);
            // Mengubah index array
            $daftar_Mahasiswa = array_values($daftar_Mahasiswa);
            echo "Data Mahasiswa dengan NPM " . $npm . " telah dihapus<br>";
            return;
        }
    }
    echo "Mahasiswa dengan NPM " . $npm . "Tidak ditemukan.<br>";
}

// Schema Tambah data mahasiswa
tambahMahasiswa($daftar_Mahasiswa, "0620104001", "Kurniawan", "Bandung", "27 September 2002", "Teknik Informatika");
tambahMahasiswa($daftar_Mahasiswa, "12345678", "Udin", "Jakarta", "14 Desember 2000", "Manajemen");

// Menampilkan data mahasiswa
echo "<h2>Data Mahasiswa:</h2>";
tampilMahasiswa($daftar_Mahasiswa);

// Menghapus data mahasiswa berdasarkan NPM
hapusMahasiswa($daftar_Mahasiswa, "12345678");

// Menampilkan data mahasiswa terbaru atau refresh
echo "<h2>Data Mahasiswa Terbaru</h2>";
tampilMahasiswa($daftar_Mahasiswa);
?>