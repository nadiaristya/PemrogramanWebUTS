<?php

include ("config.php");

if (isset($_POST['Submit'])){
    $sku = $_POST['sku'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $harga_satuan = $_POST['harga_satuan'];

    $result = mysqli_query($config, "INSERT INTO barang (sku, nama_barang, kategori, jumlah_stok, harga_satuan) VALUES ('$sku', '$nama_barang', '$kategori', '$jumlah_stok', '$harga_satuan')");
    echo "Barang added!.";
}
?>

<html>
    <head>
        <title>Add</title>
    </head>
    <body>
        <a href="index.php"> <button class="btn btn-primary">Back to Home</button> </a>
        
        <form action="add.php" method="post" name='form1'>
            <table>
                <tr>
                    <td>SKU</td>
                    <td><input type="text" name="sku"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><input type="text" name="kategori"></td>
                </tr>
                <tr>
                    <td>Jumlah Stok</td>
                    <td><input type="text" name="jumlah_stok"></td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td><input type="text" name="harga_satuan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
    </body>
</html>