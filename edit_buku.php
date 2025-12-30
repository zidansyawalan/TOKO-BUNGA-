<?php
include __DIR__ . "/../includes/config.php";
$id=$_GET['id'];
$d=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM buku WHERE id_buku='$id'"));

if(isset($_POST['update'])){
mysqli_query($koneksi,"UPDATE buku SET
kategori='$_POST[kategori]',
nama_buku='$_POST[nama]',
harga='$_POST[harga]',
stok='$_POST[stok]',
id_penerbit='$_POST[penerbit]'
WHERE id_buku='$id'");
header("location:buku.php");
}
?>
<form method="post">
<input name="kategori" value="<?= $d['kategori'] ?>">
<input name="nama" value="<?= $d['nama_buku'] ?>">
<input name="harga" value="<?= $d['harga'] ?>">
<input name="stok" value="<?= $d['stok'] ?>">
<input name="penerbit" value="<?= $d['id_penerbit'] ?>">
<button name="update">Update</button>
</form>
