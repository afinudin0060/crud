<?php
class Database
{
    // Properti
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_php";
    public $connect;

    // Konstruksi koneksi database
    public function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }

    // Fungsi untuk menampilkan data
    public function tampilData()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }

    // Fungsi untuk menambahkan data baru
    public function tambahData($nama, $jenis_kelamin, $nohp, $email, $alamat, $foto)
    {
        $query = "INSERT INTO tb_users (Nama, Jenis_kelamin, No_hp, email, Alamat, Foto) 
                  VALUES ('$nama', '$jenis_kelamin', '$nohp', '$email', '$alamat', '$foto')";
        mysqli_query($this->connect, $query);
    }
}
?>
