<?php
include("koneksi.php");
$nama = $_POST['nama_produk'];
$harga = $_POST['harga_produk'];
$stok = $_POST['stok'];
$status = $_POST['status_produk'];

$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["foto_produk"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// cek image/file gambar
if(isset($_POST["submit"])) {
 $check = getimagesize($_FILES["foto_produk"]["tmp_name"]);
 if($check !== false) {
 echo "File adalah image - " . $check["mime"] . ".";
 $uploadOk = 1;
} else {
 echo "File bukan image.";
 $uploadOk = 0;
 }
}

// Cek error
if ($uploadOk == 0) {
 echo "file gagal di-upload";
// jika ok, try to upload
} else {
 if (move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file)) {
 //echo "File ". basename( $_FILES["foto_produk"]["name"]). " sukses di-upload";
} else {
  echo "Maaf, ada error...";
 }
}



mysqli_query($conn,"insert into produk values('','$nama','$harga','$stok','$target_file','$status')");
echo ("<script LANGUAGE='JavaScript'>
        window.alert('Berhasil menambahkan satu produk');
        window.location.href='produk_read.php';
        </script>");   
?>