<?php
$koneksi = new mysqli("localhost", "root", "", "db_gadai");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>