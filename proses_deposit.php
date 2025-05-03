<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

$koneksi->query("INSERT INTO deposit (nama, jumlah) VALUES ('$nama', '$jumlah')");
header("Location: index.php");
?>