<?php

$id_jenis = $_POST['id_jenis'];
$nama_jenis= $_POST['nama_jenis'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO jenis VALUES('$id_jenis','$nama_jenis')");

echo "
<script>
alert('Input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";
