<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Kue</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Kue</h1>

        <?php if (isset($kue)): ?>
            <p>Apakah Anda yakin ingin menghapus kue dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($kue['nama_kue']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($kue['harga'], 2, ',', '.'); ?></li>
                <li><strong>Stok:</strong> <?= htmlspecialchars($kue['stok']); ?></li>
            </ul>

            <form action="/admin/daftar-kue/hapus/<?= $kue['id']; ?>" method="post">
                <?= csrf_field(); ?> 
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-kue" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data Kue tidak ditemukan.</p>
            <a href="/admin/daftar-kue" class="btn btn-secondary">Kembali ke Daftar Kue</a>
        <?php endif; ?>
    </div>
</body>
</html>
