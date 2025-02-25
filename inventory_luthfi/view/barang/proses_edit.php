<?php
$id_barang=$_GET['id_barang'];
$id_jenis=$_POST['id_jenis'];
$nama_barang=$_POST['nama_barang'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

include '../../config/koneksi.php';

$query=mysqli_query($conn, "UPDATE barang SET id_jenis='$id_jenis', nama_barang = '$nama_barang', harga = '$harga',
stok = '$stok' WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('Data gagal diedit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>