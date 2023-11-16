<?php

$kode_produk = $_POST["kode_produk"];
$nama_produk = $_POST["nama_produk"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];

include "connection.php";

mysqli_query($connection, "INSERT INTO produk (id,kode_produk, nama_produk, harga, stok) VALUES ('$kode_produk', '$nama_produk', '$harga', '$stok')");


header("location:produk.php");

?>