<?php

include ("config.php");

$result = mysqli_query($config, "SELECT * FROM barang ORDER BY sku ASC");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View</title>
    </head>
    <body>
        <a href="index.php"> <button class="btn btn-primary">Back to Home</button> </a>
        <table width='80%' border=1>
            <tr>
                <th>SKU</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah Stok</th>
                <th>Harga Satuan</th>
                <th>Action</th>
            </tr>
            <?php while($data = mysqli_fetch_array($result)): ?>
            <tr>
                <td><?php echo $data['sku']; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['jumlah_stok']; ?></td>
                <td><?php echo $data['harga_satuan']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $data['sku']?>"> Update</a>
                    | 
                    <a href="delete.php?id=<?php echo $data['sku']?>"> Delete</a>
                </td>
            </tr>
            <?php endwhile ?>
        </table>
    </body>
</html>