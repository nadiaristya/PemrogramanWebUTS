<?php

include ("config.php");

if (isset($_POST['Update'])){
    $sku = $_POST['sku'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $jumlah_stok = $_POST['jumlah_stok'];
    $harga_satuan = $_POST['harga_satuan'];

    $result = mysqli_query($config, "UPDATE barang SET nama_barang='$nama_barang', kategori = '$kategori', jumlah_stok = '$jumlah_stok', harga_satuan = '$harga_satuan' WHERE sku=$sku");
    header("Location: index.php");
}
?>

<?php

$sku=$_GET['id'];
$result=mysqli_query($config, "SELECT * FROM barang WHERE sku=$sku");

while($data=mysqli_fetch_array($result)){
    $sku = $data['sku'];
    $nama_barang = $data['nama_barang'];
    $kategori = $data['kategori'];
    $jumlah_stok = $data['jumlah_stok'];
    $harga_satuan = $data['harga_satuan'];
}
?>

<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <a href="index.php"> <button class="btn btn-primary">Back to Home</button> </a>
        <form action="update.php" method="post" name='update'>
            <table>
                <tr>
                    <td>SKU</td>
                    <td><input type="text" name="sku" value=<?php echo $sku;?>></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td><input type="text" name="kategori" value=<?php echo $kategori;?>></td>
                </tr>
                <tr>
                    <td>Jumlah Stok</td>
                    <td><input type="text" name="jumlah_stok" value=<?php echo $jumlah_stok;?>></td>
                </tr>
                <tr>
                    <td>Harga Satuan</td>
                    <td><input type="text" name="harga_satuan" value=<?php echo $harga_satuan;?>></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>