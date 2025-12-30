<?php
include __DIR__ . "/../includes/config.php";
if(isset($_POST['simpan'])){
mysqli_query($koneksi,"INSERT INTO penerbit VALUES(
'$_POST[id]','$_POST[nama]','$_POST[alamat]',
'$_POST[kota]','$_POST[telp]'
)");
header("location:penerbit.php");
}
?>
<form method="post">
<input name="id" placeholder="ID">
<input name="nama" placeholder="Nama">
<input name="alamat" placeholder="Alamat">
<input name="kota" placeholder="Kota">
<input name="telp" placeholder="Telp">
<button name="simpan">Simpan</button>
</form>
