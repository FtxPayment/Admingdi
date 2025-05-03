Database Setup:
1. Buat database MySQL dengan nama: db_gadai
2. Jalankan SQL berikut:
CREATE TABLE deposit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    jumlah DECIMAL(15,2),
    status ENUM('Pending', 'Dikonfirmasi') DEFAULT 'Pending',
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
3. Upload semua file ke hosting/server PHP
4. Akses index.php untuk customer, admin.php untuk admin