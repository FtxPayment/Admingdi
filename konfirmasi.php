<?php
include 'koneksi.php';
$id = $_GET['id'];
$koneksi->query("UPDATE deposit SET status='Dikonfirmasi' WHERE id=$id");
header("Location: admin.php");
?>