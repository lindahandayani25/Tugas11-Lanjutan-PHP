<!DOCTYPE html>
<html>

<head>
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#data-penjualan').DataTable();
        });
    </script>
</head>

<body>
    
    <table id="data-penjualan" class="display" style="width:100%">
        <?php
            include 'koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM `produk` as p JOIN supplier as s ON p.supplier_id=s.id_supplier ORDER BY id ASC;");
        ?>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Nama Suplier</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
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
                    <button><a href="proses_hapus.php?id=<?php echo $data["id"] ?>" onclick="alert('Apakah anda ingin menghapus <?php echo $data['nama_produk']?>')">Delete</a></button> &nbsp; 
                    <button><a href="edit.php?id=<?php echo $data["id"] ?>" onclick="alert('Apakah anda ingin mengubah <?php echo $data['nama_produk']?>')"> Ubah </a></button>
                </td>
            </tr>
            <?php } ?>
            <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Satuan</th>
                <th>Nama Suplier</th>
                <th>Aksir</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>