<?php 
    include 'config.php';
?>
<a href="index.php"> <button class="btn btn-primary">Back to Home</button> </a><br></br>
<form action="search.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
    }
?>
<table border="1">
<thead>
        <tr>
          <th>SKU.</th>
          <th>Nama Barang</th>
          <th>Kategori</th>
          <th>Jumlah Stok</th>
          <th>Harga Satuan</th>
        </tr>
      </thead>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($config,"select * from barang where sku like '%".$cari."%'"); 
    }
    else{
        return; 
    }
    $no = 1;
    while($d = mysqli_fetch_array($data)){
?>
    <tr>
        <td><?php echo $d['sku']; ?></td>
        <td><?php echo $d['nama_barang']; ?></td>
        <td><?php echo $d['kategori']; ?></td>
        <td><?php echo $d['jumlah_stok']; ?></td>
        <td><?php echo $d['harga_satuan']; ?></td>
    </tr>
<?php 
    } 
?>

</table>