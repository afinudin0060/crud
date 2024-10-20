<?php
include 'database.php';
$db = new Database();

// Ambil data berdasarkan ID dari query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->ambilDataBerdasarkanId($id);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <h1>Detail Data Pengguna</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Nama:</strong> <?php echo $dataUser['Nama']; ?></p>
            <p><strong>Jenis Kelamin:</strong> <?php echo $dataUser['Jenis_kelamin']; ?></p>
            <p><strong>No HP:</strong> <?php echo $dataUser['No_hp']; ?></p>
            <p><strong>Email:</strong> <?php echo $dataUser['email']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $dataUser['Alamat']; ?></p>
        </div>
        <div class="col-md-6">
            <img src="uploads/<?php echo $dataUser['Foto']; ?>" alt="Foto" width="200">
        </div>
    </div>
    <a href="index.php" class="btn btn-secondary mt-3">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDz0xhy9GkcIds1K1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
