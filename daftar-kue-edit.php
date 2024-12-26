<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>

<h2 class="mb-5">Edit Kue</h2>

<form action="<?= base_url('admin/daftar-kue/change/'.$kue['id']); ?>" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="nama_kue" class="form-label">Nama Kue</label>
        <input type="text" class="form-control w-50" id="nama_kue" placeholder="nama_kue" name="nama_kue" value="<?= $kue['nama_kue']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="rasa" class="form-label">Rasa</label>
        <input type="text" class="form-control" id="rasa" name="rasa" value="<?= $kue['rasa']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="ukuran" class="form-label">Ukuran</label>
        <input type="text" class="form-control" id="ukuran" name="ukuran" value="<?= $kue['ukuran']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" value="<?= $kue['harga']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="<?= $kue['stok']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Kue</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="teks" class="form-control" id="deskripsi" name="deskripsi" value="<?= $kue['deskripsi']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="dibuat_pada" class="form-label">Dibuat pada</label>
        <input type="date" class="form-control" id="dibuat_pada" name="dibuat_pada" value="<?= $kue['dibuat_pada']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="diperbarui_pada" class="form-label">Diperbarui pada</label>
        <input type="date" class="form-control" id="diperbarui_pada" name="diperbarui_pada" value="<?= $kue['diperbarui_pada']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <a href="<?= base_url('admin/daftar-kue') ?>" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
</form>

<?= $this->endSection() ?>
