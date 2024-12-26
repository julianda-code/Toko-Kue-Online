<?= $this->extend('admin/template')?>

<?= $this->section('main')?>
<h2 class="mb-5">Tambah kue</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-buku/tambah')?>" method="POST">
        <div class="mb-3">
            <label for="nama_kue">nama_kue</label>
            <input type="text" class="form-control" name="nama_kue" id="nama_kue">
        </div>
        <div class="mb-3">
            <label for="rasa">rasa</label>
            <input type="text" class="form-control" name="rasa" id="rasa">
        </div>
        <div class="mb-3">
            <label for="ukuran">ukuran</label>
            <input type="text" class="form-control" name="ukuran" id="ukuran">
        </div>
        <div class="mb-3">
            <label for="harga">harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="gambar">
        </div>
        <div class="mb-3">
            <label for="stok">stok</label>
            <input type="text" class="form-control" name="stok" id="stok">
        </div>
        </div>
        <div class="mb-3">
            <label for="deskripsi">deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi">
        </div>
        <div class="mb-3">
            <label for="kategori">kategori</label>
            <input type="text" class="form-control" name="kategori" id="kategori">
        </div>
        <div class="mb-3">
            <label for="dibuat pada">dibuat pada</label>
            <input type="file" name="dibuat pada" id="dibuat pada">
        </div>
        <div class="mb-3">
            <label for="diperbarui pada">diperbarui pada</label>
            <input type="text" class="form-control" name="diperbarui pada" id="diperbarui pada">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-kue')?>" class="btn btn-secondary"></a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>