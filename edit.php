<!DOCTYPE html>
<html>
<head><?php
$host = "localhost";
$username = "root";
$password = "";
$nama_database = "pos_shop";

$koneksi = new mysqli($host, $username, $password, $nama_database);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
    <title>Edit Produk - AdminLTE</title>
    <!-- Tautan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Tautan AdminLTE CSS -->
    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Header -->
        <header class="main-header">
            <a href="#" class="logo">
                <span class="logo-mini"><b>P</b></span>
                <span class="logo-lg"><b>Produk</b> Admin</span>
            </a>
        </header>

        <!-- Sidebar -->
        <aside class="main-sidebar">
            <!-- Sidebar content -->
            <section class="sidebar">
                <!-- Sidebar menu -->
                <ul class="sidebar-menu">
                    <li class="header">MENU</li>
                    <li class="active"><a href="#"><i class="fa fa-database"></i> <span>Data Produk</span></a></li>
                </ul>
            </section>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Produk</h3>
                    </div>
                    <div class="box-body">
                        <?php
                        // Gantilah ini dengan logika untuk mengambil data produk yang akan diedit dari database berdasarkan id
                        $product = [
                            "id" => 1,
                            "name" => "Produk 1",
                            "description" => "Deskripsi Produk 1",
                            "price" => 100,
                        ];
                        ?>
                         <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Gantilah ini dengan logika untuk mengupdate data produk dalam database
                    $id = $_POST["id"];
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $price = $_POST["price"];

                        <!-- Form untuk mengedit produk -->
                        <form method="post" action="update_product.php">
                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi:</label>
                                <textarea name="description" class="form-control"><?php echo $product['description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga:</label>
                                <input type="number" name="price" class="form-control" step="0.01" value="<?php echo $product['price']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <!-- Tautan Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Tautan AdminLTE JavaScript -->
        <script src="https://adminlte.io/themes/AdminLTE/dist/js/app.min.js"></script>
    </div>
</body>
</html>
