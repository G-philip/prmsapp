<?= $this->extend("layouts/doctor") ?>

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
    <address>
    <strong>Twitter, Inc.</strong><br />
    1355 Market St, Suite 900<br />
    San Francisco, CA 94103<br />
    <abbr title="Phone">P:</abbr> (123) 456-7890
  </address>

  <address>
    <strong>Full Name</strong><br />
    <a href="mailto:first.last@example.com">first.last@example.com</a>
  </address>


<h3 id="blockquote">Blockquote</h3>
<?php if(current_user()): ?>
  Welcome <?= esc(current_user()->name)  ?>
<p class="text-dark">you are logged in the Doctor Home Page <i class="fa fa-level-down text-"></i></p>
<?php else: ?>
  <p>You are in the admin homepage</p>
  <p>user is not logged in</p>

<?php endif; ?>
<?= $this->endSection() ?>
