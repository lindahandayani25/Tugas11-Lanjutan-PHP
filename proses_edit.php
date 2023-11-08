<?php 
include 'koneksi.php';

// get variable from form input
$kode_produk = $_POST["kode_produk"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$satuan = $_POST["satuan"];
$supplier = $_POST["supplier"];


$result = mysqli_query($conn, "UPDATE `produk` set `kode_produk` = '$kode_produk', `nama_produk` = '$nama_produk', `harga` = '$harga', `stok` = '$stok', `satuan` = '$satuan', `supplier_id` = '$supplier' where `id` = '$_GET[id]'");

header("Location:index.php");

?>
