<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Kue Online</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-end">
          <a href="<?= base_url() ?>chart" class="btn btn-secondary">Keranjang belanja <span class="badge text-bg-warning">4</span></a>
        </div>
      </div>
      <div class="row bg-primary-subtle mb-5">
        <div class="col-6 p-5">
          <h1>Selamat Datang di Toko Kue Online</h1>
          <p>Kami menyediakan berbagai jenis kue</p>
          <a href="#" class="btn btn-success">Lihat Produk</a>
        </div>
        <div class="col-6 p-5">
          <h1>Temukan kue favorit Anda!</h1>
          <form action="">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Aneka Kue"
              />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Harga" />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Rasa" />
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Cari</button>
            </div>
          </form>
        </div>
      </div>

      <h2>Kue Best Seller</h2>
      <div class="row mb-5 g-3">
        <div class="col-3">
          <div class="card">
            <img src="images/foto1.jpeg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Bento </h5>
              <p class="card-text">
                Rp 50,000-
              </p>
              <a href="#" class="btn btn-primary">Add to chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
            <div class="card">
              <img src="images/foto2.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Cookies</h5>
                <p class="card-text">
                  Rp 70,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="images/foto3.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Pastry</h5>
                <p class="card-text">
                  Rp 60,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="<?= base_url() ?>images/foto4.webp" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Kue Kering</h5>
                <p class="card-text">
                  Rp 80,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="<?= base_url() ?>images/foto5.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Kue Kering</h5>
                <p class="card-text">
                  Rp 80,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="<?= base_url() ?>images/foto6.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Pastry</h5>
                <p class="card-text">
                  Rp 50,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="<?= base_url() ?>images/foto7.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Cake Ulang Tahun</h5>
                <p class="card-text">
                  Rp 100,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <img src="<?= base_url() ?>images/foto8.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Cookies</h5>
                <p class="card-text">
                  Rp 85,000,-
                </p>
                <a href="#" class="btn btn-primary">Add to chart</a>
              </div>
            </div>
          </div>
      </div>
    </div>

    <footer class="bg-danger-subtle py-3">
        <div class="container">
            Copyright 2024. Toko Kue Online . All Rights reserved.
        </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
