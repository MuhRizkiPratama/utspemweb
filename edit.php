<?php
require './config/db.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);
    
}
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $update_query = "UPDATE products SET name ='$name', price='$price', image='$image' WHERE id='$id'";
    $result = mysqli_query($db_connect, $update_query);

    if ($result) {
        echo "Data Produk Berhasi DiUpdate.";
    } else {
        echo "Gagal Mengupdate Data Produk!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data Produk</h1>
    <form action="" method="post">
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" id="name" value="<?=$row['name'];?>">
        <br>

        <label for="price">Harga:</label>
        <input type="text" name="price" id="price" value="<?=$row['price'];?>">
        <br>

        <label for="image">Gambar Produk:</label>
        <input type="text" name="image" id="image" value="<?=$row['image'];?>">
        <br>

        <input type="submit" name="submit" value="Simpan">
</body>
</html>