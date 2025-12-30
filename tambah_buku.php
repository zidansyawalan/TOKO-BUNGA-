<?php
include __DIR__ . "/../includes/config.php";
if(isset($_POST['simpan'])){
mysqli_query($koneksi,"INSERT INTO buku VALUES(
'$_POST[id]','$_POST[kategori]','$_POST[nama]',
'$_POST[harga]','$_POST[stok]','$_POST[penerbit]'
)");
header("location:buku.php");
}
?>
<form method="post">
<input name="id" placeholder="ID Buku" required>
<input name="kategori" placeholder="Kategori">
<input name="nama" placeholder="Nama Buku">
<input name="harga">
<input name="stok">
<select name="penerbit">
<?php
$p=mysqli_query($koneksi,"SELECT * FROM penerbit");
while($x=mysqli_fetch_array($p)){
echo "<option value='$x[id_penerbit]'>$x[nama_penerbit]</option>";
}
?>
</select>
<button name="simpan">Simpan</button>
</form>
