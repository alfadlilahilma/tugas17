 <?php
$host = "localhost";
$username = "root";
$password = "";
$nama_database = "pos_shop";

$koneksi = new mysqli($host, $username, $password, $nama_database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>