<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeShop</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('css_native/style.css'); ?>" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="<?= base_url(); ?>Img/Logo Cafe.svg" alt="Logo" width="150px" height="50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-semibold fs-5">
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <?php if( in_groups('kasir')) : ?><li class="nav-item">
            <a class="nav-link" href="#">Transaksi</a>
          </li>
          <?php endif;?>
          <?php if( in_groups('admin')) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>userlist">User management</a>
          </li>
          <?php endif;?>
          <li class="nav-item">
            <a class="nav-link" href=" <?= base_url('logout'); ?> ">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?= $this->renderSection('page-content'); ?>

<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>