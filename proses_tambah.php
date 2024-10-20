<?php
include 'database.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // Mengambil file foto dan menyimpannya
    $foto = $_FILES['foto']['name'];
    $target = "uploads/" . basename($foto);

    // Pindahkan file foto ke folder 'uploads/'
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        // Tambahkan data ke database
        $db->tambahData($nama, $jenis_kelamin, $nohp, $email, $alamat, $foto);
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah foto!'); window.location='form_tambah.php';</script>";
    }
}
?>
