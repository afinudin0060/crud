<?php
include 'database.php';
$db = new Database();

// Hapus data berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db->hapusData($id);
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
}
?>
