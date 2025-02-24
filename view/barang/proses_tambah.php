<?php

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$nama_barang= $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO barang VALUES('$id_barang','$id_jenis','$nama_barang','$harga','$stok')");

echo "
<script>
alert('Input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";
