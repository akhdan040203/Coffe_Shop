<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<section id="menu">
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <h2 class="menu fw-reguler display-5 text-center mb-3">Menu Coffee Premium</h2>
      </div>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="ms-3 mt-3 plusbuttons">
          <a href="form_addmenu.html"><img src="<?= base_url(); ?>Img/Plus button.svg" alt=""></a>
        </div>
      </div>
      <div class="col-md-3 offset-3">
        <form class="d-flex pt-5" role="search">
          <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
    <div class="row gy-4 justify-content-evenly">
      <?php foreach ($menuadmin as $menu) { ?>
        <div class="col-md-3">
          <div class="card shadow" style="width: 19rem;">
            <img src="<?= base_url(); ?>Img/Menu_Gallery/<?= $menu['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h2 class="card-title text-light fw-semibold"><?= $menu['kode_menu']; ?></h2>
              <p class="card-text textcard fw-medium mt-3"><?= $menu['nama_menu']; ?></p>
              <p class="card-text textcard fw-medium mt-3"><?= $menu['nama_jenis']; ?></p>
              <p class="card-text textcard fw-medium mt-3"><?= $menu['harga']; ?></p>
              <p class="card-text textcard fw-medium mt-3"><?= $menu['stok']; ?></p>
              <h3 class="text-secondary">stok : <?= $menu['stok']; ?></h3>
              <a href="<?= base_url('menu/edit/' . $menu['kode_menu']); ?>" class="btn btn-success mx-3 px-4 mt-2 fw-semibold fs-5">Update</a>
              <a href="<?= base_url('menu/delete/' . $menu['kode_menu']); ?>" class="btn btn-danger mx-3 px-4 mt-2 fw-semibold fs-5">Delete</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>