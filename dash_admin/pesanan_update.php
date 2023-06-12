<?php
include("koneksi.php");
$id = $_POST['id_pesanan'];
$status = $_POST['status_pesanan'];

mysqli_query($conn,"update pesanan set status_pesanan='$status' where id_pesanan='$id'");

echo ("<script LANGUAGE='JavaScript'>
        window.alert('Berhasil melakukan update satu pesanan');
        window.location.href='pesanan_read.php';
        </script>");   
?>