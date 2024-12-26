<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>
<h2 class="mb-5">Tambah Kue</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-kue/create') ?>" enctype="multipart/form-data" method="post">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="nama_kue">Nama Kue</label>
            <input type="text" class="form-control" name="nama_kue" id="nama_kue" required>
        </div>
        <div class="mb-3">
            <label for="rasa">Rasa</label>
            <input type="text" class="form-control" name="rasa" id="rasa" required>
        </div>
        <div class="mb-3">
            <label for="ukuran">Ukuran</label>
            <input type="text" class="form-control" name="ukuran" id="ukuran" required>
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" id="harga" required>
        </div>
        <div class="mb-3">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" name="stok" id="stok" required>
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori" required>
        </div>
        <div class="mb-3">
            <label for="dibuat_pada">Dibuat Pada</label>
            <input type="date" class="form-control" name="dibuat_pada" id="dibuat_pada" required>
        </div>
        <div class="mb-3">
            <label for="diperbarui_pada">Diperbarui Pada</label>
            <input type="date" class="form-control" name="diperbarui_pada" id="diperbarui_pada" required>
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-kue') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
