<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<section id="login">
  <div class="row">
    <div class="col-6">
      <img src="<?= base_url(); ?>Img/Login.svg" alt="" height="735px">
    </div>
    <div class="col-4 text-light mt-4 p-5">
      <h1 class="display-4 mt-2 fw-bold"><?= lang('Auth.register') ?></h1>
      <p>Account admin and cassier coffeshop!</p>
      <?= view('Myth\Auth\Views\_message_block') ?>

      <form action="<?= url_to('register') ?>" method="post" class="mt-5">
        <?= csrf_field() ?>
        <div class="form-group">
          <label for="email"><?= lang('Auth.email') ?></label>
          <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>">
          <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
        </div>
        <div class="form-group mb-3">
          <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
          <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>" id="username" aria-describedby="usernameHelp">
        </div>
        <div class="form-group mb-3 ">
          <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
          <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" autocomplete="off" id="password">
        </div>
        <div class="form-group mb-3">
          <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
          <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-lg btn_login fw-bold mt-3 btn-warning"><?= lang('Auth.register') ?></button>
      </form>
      <hr>
      <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>