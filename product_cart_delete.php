<?php
include('koneksi.php');
// sql to delete a record
$id=$_GET['id'];

$sql = "DELETE FROM keranjang WHERE id_keranjang = $id";


if ($conn->query($sql) == TRUE) {
  echo "Record deleted successfully";
  header("location:product_cart.php");  
} else {
  echo "Error deleting record: " . $conn->error;
}
?>