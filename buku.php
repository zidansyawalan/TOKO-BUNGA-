<?php include __DIR__ . "/../includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../style.css"></head>
<body>

<div class="navbar">
<a href="admin.php">ADMIN</a>
<a href="../index.php">HOME</a>
</div>

<a href="tambah_buku.php">+ Tambah Buku</a>

<table>
<tr>
<th>ID</th><th>Kategori</th><th>Nama Buku</th>
<th>Harga</th><th>Stok</th><th>Penerbit</th><th>Aksi</th>
</tr>

<?php
$q=mysqli_query($koneksi,"
SELECT buku.*, penerbit.nama_penerbit
FROM buku JOIN penerbit
ON buku.id_penerbit=penerbit.id_penerbit
");
while($d=mysqli_fetch_array($q)){
?>
<tr>
<td><?= $d['id_buku'] ?></td>
<td><?= $d['kategori'] ?></td>
<td><?= $d['nama_buku'] ?></td>
<td><?= $d['harga'] ?></td>
<td><?= $d['stok'] ?></td>
<td><?= $d['nama_penerbit'] ?></td>
<td>
<a href="edit_buku.php?id=<?= $d['id_buku'] ?>">Edit</a> |
<a class="hapus" href="hapus_buku.php?id=<?= $d['id_buku'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>

</body>
</html>
