<?php
require './config/db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete_query = "DELETE FROM products WHERE id=$id";
    $result = mysqli_query($db_connect, $delete_query);

    if($result){
        echo "Data Produk Berhasil Dihapus";
    } else {
        echo "Data Produk Gagal Dihapus!";
    }
} else {
    echo "ID Produk Tidak Valid";
}
?>