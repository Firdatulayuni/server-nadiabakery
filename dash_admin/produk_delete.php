<?php
include('koneksi.php');
// sql to delete a record
$id=$_GET['id'];

$sql = "DELETE FROM produk WHERE id_produk=$id";

header("location:produk_read.php");  
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>