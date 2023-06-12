<?php
include("koneksi.php");
$id = $_POST['id_keranjang'];
$banyak = $_POST['banyak_produk'];

$tampil = mysqli_query($conn, "select * from produk inner join keranjang on produk.id_produk=keranjang.id_produk where keranjang.id_keranjang='$id'");
$data= mysqli_fetch_array($tampil);

$stok=$data['stok'];
if ($stok >= $banyak) {
    mysqli_query($conn,"update keranjang set banyak_produk='$banyak' where id_keranjang='$id'");

    header("location:product_cart.php"); 

}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Pesanan Melebihi dari Stok Yang Tersedia');
    window.location.href='product_cart.php';
    </script>");
}
?>