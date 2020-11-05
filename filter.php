<?php  
  include ('config.php'); 
        if (isset($_POST['filter'])) { 
          $max = $_POST['max']; 
          $min = $_POST['min']; 
 
          $query = "SELECT * FROM barang WHERE harga_satuan BETWEEN '$min' AND '$max' "; 
          $result =mysqli_query($config,$query);  
        } 
        else { 
          $result = mysqli_query($config,"SELECT * FROM barang"); 
        } 
?> 
<!DOCTYPE html> 
<html> 
    <head> 
        <title>Filter</title>  
    </head> 
    <body> 
        <a href="index.php"> <button class="btn btn-primary">Back to Home</button> </a>
        <div class="filter"> 
            <form action="filter.php" method="POST"> 
                <label>Range Harga</label> 
                <input type="text" name="min" placeholder="Minimal Harga" required="required"> 
                <label>Sampai</label> 
                <input type="text" name="max" placeholder="Maximal Harga" required="required"> 
                <input type="submit" name="filter" value="FILTER"> 
            </form> 
        </div> 
        <br><br> 
        <div class="tabel"> 
        <table border="1" width="100%"> 
            <tr> 
                <th>SKU</th> 
                <th>NAMA BARANG</th> 
                <th>KATEGORI</th> 
                <th>JUMLAH STOK</th> 
                <th>HARGA SATUAN</th> 
            </tr> 
 
            <?php while($data = mysqli_fetch_array($result)): ?> 
                <tr> 
                    <td><?php echo $data['sku'];  ?></td> 
                    <td><?php echo $data['nama_barang'];  ?></td> 
                    <td><?php echo $data['kategori'];  ?></td> 
                    <td><?php echo $data['jumlah_stok'];  ?></td> 
                    <td><?php echo $data['harga_satuan'];  ?></td> 
                </tr> 
            <?php endwhile ?> 
        </table> 
        </div> 
    </body> 
</html>