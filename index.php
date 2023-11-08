<!DOCTYPE html>
<html>
<head>
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT * FROM `produk` as p JOIN supplier as s ON p.supplier_id=s.id_supplier ORDER BY id ASC;");
                ?>
               <center><h1>DATA PRODUK:</h1> </center>
               <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php?nama_halaman=NAMA HALAMAN NYA"> Tambah Produk </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Nama Supplier</th>
                        <th>Aksi</th>
                    </tr>
                        <?php 
                            if(mysqli_num_rows($query)>0){
                            while($data = mysqli_fetch_array($query)){
                        ?>
                    <tr>
                        <td> <?php echo $data["id"] ?> </td>
                        <td> <?php echo $data["kode_produk"] ?> </td>
                        <td> <?php echo $data["nama_produk"] ?> </td>
                        <td> <?php echo $data["harga"] ?></td>
                        <td> <?php echo $data["stok"] ?></td>
                        <td> <?php echo $data["satuan"] ?></td>
                        <td> <?php echo $data["nama"] ?></td>
                        <td>
                            <!-- Menampilkan pop up untuk menghapus dan mengubah data menggunakan javascript-->
                            <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger" onclick="alert('Apakah anda ingin menghapus <?php echo $data['nama_produk']?> ?')">Delete</a> &nbsp; 
                            <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning" onclick="alert('Apakah anda ingin mengubah <?php echo $data['nama_produk']?>')"> Ubah </a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>