<?php
include __DIR__ . "/../includes/config.php";
mysqli_query($koneksi,"DELETE FROM buku WHERE id_buku='$_GET[id]'");
header("location:buku.php");
?>
