<?php
include 'koneksi.php';
$Kode_Mahasiswa = $_GET['id'];
mysqli_query($koneksi, "DELETE from maha WHERE Kode_Mahasiswa='$Kode_Mahasiswa'");
header("location:index.php");
?>