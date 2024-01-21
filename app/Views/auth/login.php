
<?= $this->extend('layout/index'); ?>
<?= $this->section('page-content'); ?>
<section id="login">
<div class="row">
    <div class="col-6">
        <img src="<?= base_url(); ?>Img/Login.svg" alt="" height="735px">
    </div>
    <div class="col-4 text-light mt-5 p-5">
        <h1 class="display-4 mt-5 fw-bold"><?=lang('Auth.loginTitle')?></h1>
        <p>Account admin and cassier coffeshop!</p>

        <?= view('Myth\Auth\Views\_message_block') ?>

        <form action="<?= url_to('login') ?>" method="post" class="mt-5">
						<?= csrf_field() ?>
            <div class="mb-3">
              
						<div class="form-group mb-3">
							<label for="login"><?=lang('Auth.username')?></label>
							<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
            
            </div>
            <div class="form-group mb-3">
							<label for="password"><?=lang('Auth.password')?></label>
							<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

            <?php if ($config->allowRemembering): ?>
              <div class="form-check">
							<label class="form-check-label">
								<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
								<?=lang('Auth.rememberMe')?>
							</label>
						</div>
<?php endif; ?>

            <button type="submit" class="btn btn-lg btn_login fw-bold mt-3 btn-warning"><?=lang('Auth.loginAction')?></button>
          </form>

          <?php if ($config->allowRegistration) : ?>
					<p class="mt-5"><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>
    </div>
</div>
</section>
<?= $this->endSection(); ?>

