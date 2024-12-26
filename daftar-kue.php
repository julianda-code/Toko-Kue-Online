<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 15px;
            display: flex;
            flex-direction: column;
        }
        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fca652;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
        }
        .header h1 {
            font-size: 20px;
        }
        .header .logout {
            background-color:rgb(220, 53, 137);
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .header .logout:hover {
            background-color:rgb(200, 35, 106);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color:rgb(242, 242, 242);
        }
        img {
            width: 50px;
            height: auto;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
        }
        .btn-edit {
            background-color: #28a745;
        }
        .btn-edit:hover {
            background-color: #218838;
        }
        .btn-hapus {
            background-color: #dc3545;
        }
        .btn-hapus:hover {
            background-color: #c82333;
        }
        .btn-tambah {
            background-color:rgb(0, 136, 255);
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .btn-tambah:hover {
            background-color: #0056b3;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">Daftar Kue</a>
        <a href="#">Transaksi</a>
        <a href="#">Pelanggan</a>
    </div>
    <div class="content">
        <div class="header">
            <button class="logout">Logout</button>
        </div>

        <h2>Daftar Kue</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Kue</th>
                    <th>Rasa</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Dibuat Pada</th>
                    <th>Diperbarui Pada</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bakerys as $kue): ?>
                    <tr>
                        <td><?= htmlspecialchars($kue['nama_kue']) ?></td>
                        <td><?= htmlspecialchars($kue['rasa']) ?></td>
                        <td><?= htmlspecialchars($kue['ukuran']) ?></td>
                        <td><?= htmlspecialchars($kue['harga']) ?></td>
                        <td><?= htmlspecialchars($kue['stok']) ?></td>
                        <td>
                        <img src="/public/images/foto<?= $kue['id'] ?>.jpeg" alt="<?= htmlspecialchars($kue['nama_kue']) ?>">
                        </td>
                        <td><?= htmlspecialchars($kue['deskripsi']) ?></td>
                        <td><?= htmlspecialchars($kue['kategori']) ?></td>
                        <td><?= date('d-m-Y H:i:s', strtotime($kue['dibuat_pada'])) ?></td>
                        <td><?= date('d-m-Y H:i:s', strtotime($kue['diperbarui_pada'])) ?></td>
                        <td>
                            <div class="action-buttons">
                                <button class="btn btn-edit" onclick="location.href='<?= base_url('admin/daftar-kue/edit/' . $kue['id']) ?>'">Edit</button>
                                <button class="btn btn-hapus" onclick="if(confirm('Apakah Anda yakin ingin menghapus data ini?')) location.href='<?= base_url('admin/daftar-kue/hapus/' . $kue['id']) ?>';">Hapus</button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="<?= base_url('admin/daftar-kue/tambah') ?>" class="btn-tambah">Tambah Kue</a>
    </div>
</body>
</html>
