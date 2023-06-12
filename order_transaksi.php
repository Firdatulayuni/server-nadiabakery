<?php
include('koneksi.php');
session_start();

$user = $_SESSION['username'];
$read = mysqli_query($conn,"SELECT * FROM produk, keranjang 
WHERE username_pel = '$user' AND produk.id_produk = keranjang.id_produk");
echo mysqli_num_rows($read);
while($data = mysqli_fetch_array($read)){
    $date = date("Y/m/d");
    $id_keranjang = $data['id_keranjang'];
    $banyak =  $data['banyak_produk'];
    $bayar = $banyak * $data['harga_produk'];
    
    // Periksa apakah keranjang sudah ada dalam pesanan sebelumnya
    $checkExistingOrder = mysqli_query($conn, "SELECT * FROM pesanan WHERE id_keranjang = '$id_keranjang'");
    $existingOrder = mysqli_fetch_assoc($checkExistingOrder);
    
    if (!$existingOrder) {
        $in = mysqli_query($conn,"INSERT INTO pesanan VALUES('', '$id_keranjang', 'admin', '$banyak', '$bayar', '$date', '0')");
        $idproo = $data['id_produk'];
        $stok = $data['stok'] - $data['banyak_produk'];
        $out = mysqli_query($conn,"UPDATE produk SET stok = '$stok' WHERE id_produk = $idproo");
    }
}
header("location: order.php");
?>
