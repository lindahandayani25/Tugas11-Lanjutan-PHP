<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from produk where `id` = '$_GET[id]'");

header("Location:index.php");

?>