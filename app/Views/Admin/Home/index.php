<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Home <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main-left" style="margin-left:250px;padding:1px 16px;height:auto;">
  <div class="container-fluid" style="margin-top: 90px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: 2px solid rgb(37, 150, 190); padding: 20px; background-color: white;">
    <div class="alert">
      <?php if (session()->has('errors')): ?>
                    <ul>
                      <?php foreach(session('errors') as $error):?>
                      <li><?= $error ?></li>
                    <?php endforeach; ?>
                    </ul>
                  <?php endif ?>

                  <?php if (session()->has('warning')): ?>
                  <div class="warning">
                    <?= session('warning') ?>
                  </div>
                  <?php endif ?>
    </div>

<?php if(current_user()): ?>

<!-- <p class="text-dark">user is logged in the admin homepage<i class="fa fa-level-down text-"></i></p> -->
<div class="callout info-callout">Welcome <?= esc(current_user()->name)  ?></div>




<?php else: ?>
  <p>You are in the admin homepage</p>
  <p>user is not logged in</p>

<?php endif; ?>
<?= $this->endSection() ?>
