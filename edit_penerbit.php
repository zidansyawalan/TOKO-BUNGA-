<?php
include __DIR__ . "/../includes/config.php";
$id=$_GET['id'];
$d=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM penerbit WHERE id_penerbit='$id'"));

if(isset($_POST['update'])){
mysqli_query($koneksi,"UPDATE penerbit SET
nama_penerbit='$_POST[nama]',
alamat='$_POST[alamat]',
kota='$_POST[kota]',
telp='$_POST[telp]'
WHERE id_penerbit='$id'");
header("location:penerbit.php");
}
?>
<form method="post">
<input name="nama" value="<?= $d['nama_penerbit'] ?>">
<input name="alamat" value="<?= $d['alamat'] ?>">
<input name="kota" value="<?= $d['kota'] ?>">
<input name="telp" value="<?= $d['telp'] ?>">
<button name="update">Update</button>
</form>
