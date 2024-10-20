<?php
include 'database.php';
$db = new Database();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP AFINUDIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Menambahkan jarak dan gaya tambahan */
        body {
            background-color: #f8f9fa; /* Warna latar belakang terang */
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .table img {
            border-radius: 5px; /* Menambahkan efek sudut membulat pada gambar */
        }
        .btn-warning {
            background-color: #ffc107; /* Warna kuning untuk Edit */
            border: none;
        }
        .btn-danger {
            background-color: #dc3545; /* Warna merah untuk Hapus */
            border: none;
        }
        .btn-warning:hover {
            background-color: #e0a800; /* Warna kuning lebih gelap saat hover */
        }
        .btn-danger:hover {
            background-color: #c82333; /* Warna merah lebih gelap saat hover */
        }
    </style>
</head>

<body>
<!-- Menambahkan kontainer -->
<div class="container mt-3">
    <!-- Menambahkan teks judul -->
    <h1>OOP PHP CRUD</h1>
     <!-- Tombol Tambah Data -->
     <a href="form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>

<!-- Menambahkan tabel untuk data-->
<table class="table table-striped table-bordered table-hover">
    <!-- Tabel tetap sama seperti sebelumnya -->
</table>
    <hr>
    <!-- Menambahkan tabel untuk data-->
    <table class="table table-hover">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No HP</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach ($db->tampilData() as $dataUser) {
        ?>
            <tr>
                <th scope="row"><?php echo $nomor++; ?></th>
                <!-- Menampilkan gambar dari folder 'uploads/' -->
                <td><img src="uploads/<?php echo $dataUser['Foto']; ?>" alt="Foto" width="70" height="70"></td>
                <td><?php echo $dataUser['Nama']; ?></td>
                <td><?php echo $dataUser['Jenis_kelamin']; ?></td>
                <td><?php echo $dataUser['No_hp']; ?></td>
                <td><?php echo $dataUser['email']; ?></td>
                <td><?php echo $dataUser['Alamat']; ?></td>
                <td>
                    <!-- Tombol Edit berwarna kotak kuning dan Hapus berwarna kotak merah -->
                     
                    <a href="form_edit.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-warning btn-sm">Edit</a> 
                    <a href="hapus.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDz0xhy9GkcIds1K1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
