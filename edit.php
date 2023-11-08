<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Produk</title>
</head>
<body>
  FORM EDIT PRODUK
  <?php echo "<br>================================<br>"; ?>
  <?php
    include 'koneksi.php';

    $produk = mysqli_query($conn,"SELECT * from produk where id='$_GET[id]'");

    while($p = mysqli_fetch_array($produk)){
        $id = $p["id"];
        $kode_produk = $p["kode_produk"];
        $nama_produk = $p["nama_produk"];
        $harga = $p["harga"];
        $stok = $p["stok"];
        $satuan = $p["satuan"];
        $supplier = $p["supplier_id"];
    }
  ?>
  <form action="proses_edit.php?id=<?php echo $id ?>" method="post" onsubmit="return validateForm()">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td><input type="number"  name="id" disabled value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td>Kode Produk</td>
            <td>:</td>
            <td><input type="text" id="kode_produk" name="kode_produk" value="<?php echo $kode_produk ?>"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" id="nama_produk" name="nama_produk" value="<?php echo $nama_produk ?>"></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td>:</td>
            <td><input type="number" id="harga" name="harga" value="<?php echo $harga ?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="number" id="stok" name="stok" value="<?php echo $stok ?>"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td>:</td>
            <td><input type="text" id="satuan" name="satuan" value="<?php echo $satuan ?>"></td>
        </tr>
        <tr>
            <td>Supplier</td>
            <td>:</td>
            <td><input type="text" id="supplier" name="supplier" value="<?php echo $supplier ?>"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">
  </form>
</body>
<!-- Validasi menggunakan javascript-->
<script>
    function validateForm(){
        var kode_produk = document.getElementById('kode_produk').value;
        var nama_produk = document.getElementById('nama_produk').value;
        var harga = document.getElementById('harga').value;
        var stok = document.getElementById('stok').value;
        var satuan = document.getElementById('satuan').value;
        var supplier = document.getElementById('supplier').value;

        if(kode_produk == "" || nama_produk == "" || harga == "" || stok == "" || satuan == "" || supplier== ""){
            alert('Silahkan isi data dengan lengkap!');
            return false;
        }
        return true;
    }
</script>
</html>