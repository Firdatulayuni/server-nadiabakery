<?php
include("koneksi.php");
$id = $_POST['id_produk'];
$user = $_POST['nama_pel'];
$banyak = $_POST['banyak_produk'];
$tampil = mysqli_query($conn, "select * from produk where id_produk='$id'");
$data= mysqli_fetch_array($tampil);

$stok=$data['stok'];
if ($stok >= $banyak) {
    mysqli_query($conn,"insert into keranjang values('','$id','$user','$banyak')");

    header("location:product_cart.php"); 

}else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Pesanan Melebihi dari Stok Yang Tersedia');
    window.location.href='product.php';
    </script>");
}

// menginput data ke database
  
?>