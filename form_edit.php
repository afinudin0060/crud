<?php
include 'database.php';
$db = new Database();

// Ambil data berdasarkan ID dari query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->ambilDataBerdasarkanId($id); // Ambil data dari database berdasarkan ID
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <h1>Edit Data Pengguna</h1>
    <hr>
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $dataUser['id']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $dataUser['Nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" required>
                <option value="Laki-Laki" <?php if ($dataUser['Jenis_kelamin'] == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($dataUser['Jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" name="nohp" class="form-control" id="nohp" value="<?php echo $dataUser['No_hp']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo $dataUser['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" rows="3" required><?php echo $dataUser['Alamat']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control" id="foto" accept="image/*">
            <img src="uploads/<?php echo $dataUser['Foto']; ?>" alt="Foto" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDz0xhy9GkcIds1K1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
