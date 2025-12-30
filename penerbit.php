<?php include __DIR__ . "/../includes/config.php"; ?>
<link rel="stylesheet" href="../style.css">

<a href="admin.php">ADMIN</a>
<a href="tambah_penerbit.php">+ Tambah Penerbit</a>

<table>
<tr><th>ID</th><th>Nama</th><th>Kota</th><th>Telp</th><th>Aksi</th></tr>

<?php
$q=mysqli_query($koneksi,"SELECT * FROM penerbit");
while($d=mysqli_fetch_array($q)){
?>
<tr>
<td><?= $d['id_penerbit'] ?></td>
<td><?= $d['nama_penerbit'] ?></td>
<td><?= $d['kota'] ?></td>
<td><?= $d['telp'] ?></td>
<td>
<a href="edit_penerbit.php?id=<?= $d['id_penerbit'] ?>">Edit</a> |
<a class="hapus" href="hapus_penerbit.php?id=<?= $d['id_penerbit'] ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
