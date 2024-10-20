<?php
include 'database.php';
$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    // Periksa apakah ada foto baru yang diunggah
    if ($_FILES['foto']['name']) {
        $foto = $_FILES['foto']['name'];
        $target = "uploads/" . basename($foto);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target);
    } else {
        // Jika tidak ada foto baru, gunakan foto lama
        $foto = $_POST['foto_lama'];
    }

    // Update data ke database
    $db->updateData($id, $nama, $jenis_kelamin, $nohp, $email, $alamat, $foto);
    echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
}
?>
