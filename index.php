<?php include 'koneksi.php'; ?>
<h2>Form Deposit</h2>
<form action="proses_deposit.php" method="POST">
    Nama: <input type="text" name="nama"><br>
    Jumlah: <input type="number" name="jumlah" step="0.01"><br>
    <button type="submit">Kirim Deposit</button>
</form>

<h3>Riwayat Deposit</h3>
<table border="1">
<tr><th>Nama</th><th>Jumlah</th><th>Status</th><th>Tanggal</th></tr>
<?php
$result = $koneksi->query("SELECT * FROM deposit");
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nama']}</td><td>{$row['jumlah']}</td><td>{$row['status']}</td><td>{$row['tanggal']}</td></tr>";
}
?>
</table>