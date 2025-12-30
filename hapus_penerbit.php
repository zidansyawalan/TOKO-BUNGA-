<?php
include __DIR__ . "/../includes/config.php";
mysqli_query($koneksi,"DELETE FROM penerbit WHERE id_penerbit='$_GET[id]'");
header("location:penerbit.php");
?>
