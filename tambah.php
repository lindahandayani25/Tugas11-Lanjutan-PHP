<!DOCTYPE html>
<html>
<head>
    <title>Halaman Tambah Produk</title>
</head>
<body>
<?php
include 'koneksi.php';
?>
FORM TAMBAH PRODUK 
<?php echo "<br>================================<br>"; ?>
<form name="formEditData" action="proses_tambah.php" method="post" onsubmit="return validateForm()">
    <table>
        <tr>
            <td>Kode Produk</td>
            <td>:</td>
            <td><input type="text" name="kode_produk"></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text"  name="nama_produk"></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td>:</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="number"  name="stok"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td>:</td>
            <td><input type="text"  name="satuan"></td>
        </tr>
        <tr>
            <td>Nama Supplier</td>
            <td>:</td>
            <td>
                <select name="supplier" id="supplier">
                    <option value="">Pilihan</option>
                    <?php
                        // Fetch data from the "items" table
                        $query = mysqli_query($conn, "SELECT * FROM supplier");
                        if(mysqli_num_rows($query)>0){
                            while($data = mysqli_fetch_array($query)){
                                echo "<option value='" . $data["id_supplier"] . "'>" . $data["nama"] . "</option>";
                            }
                        } else {
                            echo "<option value=''>No items available</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>  
    </table>
    <input type="submit" name="Submit" value="Simpan">
</form>
<!-- Validasi menggunakan javascript-->
<script>
    function validateForm(){
        if(document.forms["formEditData"]["kode_produk"].value == ""){
            alert("Kode produk tidak boleh kosong");
            document.forms["formEditData"]["kode_produk"].focus();
            return false;
        }else if(document.forms["formEditData"]["nama_produk"].value == ""){
            alert("Nama produk tidak boleh kosong");
            document.forms["formEditData"]["nama_produk"].focus();
            return false;
        }else if(document.forms["formEditData"]["harga"].value == ""){
            alert("Harga produk tidak boleh kosong");
            document.forms["formEditData"]["harga"].focus();
            return false;
        }else if(document.forms["formEditData"]["stok"].value == ""){
            alert("Stok produk tidak boleh kosong");
            document.forms["formEditData"]["stok"].focus();
            return false;
        }else if(document.forms["formEditData"]["satuan"].value == ""){
            alert("Satuan produk tidak boleh kosong");
            document.forms["formEditData"]["satuan"].focus();
            return false;
        }else if(document.forms["formEditData"]["supplier"].value == ""){
            alert("Nama supplier tidak boleh kosong");
            document.forms["formEditData"]["supplier"].focus();
            return false;
        }
        else{
            alert("Data berhasil ditambahkan");
        }
    }
</script>
</body>
</html>