<?php include __DIR__ . "/includes/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>HOME TOKO BUKU</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
<a href="index.php">HOME</a>
<a href="admin/admin.php">ADMIN</a>
</div>

<h2>DAFTAR BUKU</h2>

<form method="get">
<input type="text" name="cari" placeholder="Cari Nama Buku">
<button>Cari</button>
</form>

<table>
<tr>
<th>ID</th><th>Kategori</th><th>Nama Buku</th>
<th>Harga</th><th>Stok</th><th>Penerbit</th>
</tr>

<?php
$cari = $_GET['cari'] ?? '';
$q = mysqli_query($koneksi,"
SELECT buku.*, penerbit.nama_penerbit
FROM buku JOIN penerbit
ON buku.id_penerbit=penerbit.id_penerbit
WHERE nama_buku LIKE '%$cari%'
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
</tr>
<?php } ?>
</table>

</body>
</html>
