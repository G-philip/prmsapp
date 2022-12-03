<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Profile <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main-left" style="margin-left:250px;padding:1px 16px;height:auto; margin-top:70px;">
  <h1>Profile</h1>
  <div class="error">
  <?php if (session()->has('errors')): ?>
      <ul>
          <?php foreach(session('errors') as $error): ?>
              <li><?= $error ?></li>
          <?php endforeach; ?>
      </ul>
  <?php endif ?>
  <?php if (session()->has('info')): ?>
  <div class="info">
    <?= session('info') ?>
  </div>
  <?php endif ?>
  </div>

  <?php if ($user->profile_image): ?>

    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">

    <a href="<?= site_url('/profileimage/delete') ?>">Delete profile image</a>

<?php else: ?>

    <img src="<?= site_url('/images/blank-profile-picture.png') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>
<dl>
    <dt>Name</dt>
    <dd><?= esc($user->name) ?></dd>

    <dt>email</dt>
    <dd><?= esc($user->email) ?></dd>
</dl>
<a href="<?= site_url("/profile/edit") ?>">Edit</a>

<a href="<?= site_url("/profile/editpassword") ?>">Change password</a>

<a href="<?= site_url("/profileimage/edit") ?>">Change profile image</a>

</div>
<?= $this->endSection() ?>
