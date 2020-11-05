<?php
include ("config.php");
if ($_SERVER['REQUEST_METHOD']==='GET'){
    $sku = $_GET['id'];
    $result = mysqli_query($config, "DELETE FROM barang WHERE sku=$sku");
}
header("Location: index.php");
?>
