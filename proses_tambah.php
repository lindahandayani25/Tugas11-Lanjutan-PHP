<?php 
include 'koneksi.php';

// get variable from form input
$kode_produk = $_POST["kode_produk"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$satuan = $_POST["satuan"];
$supplier = $_POST["supplier"];

$result = mysqli_query($conn, "INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `harga`, `stok`, `satuan`, `supplier_id`) VALUES (NULL, '$kode_produk', '$nama_produk', '$harga', '$stok', '$satuan', '$supplier');");

header("Location:index.php");

?>
