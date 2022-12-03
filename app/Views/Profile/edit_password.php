<?= $this->extend("layouts/default") ?>

  <?= $this->section('title') ?>Edit profile<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="main-left" style="margin-left:250px;padding:1px 16px;height:auto; margin-top:70px;">

<h1>Edit profile</h1>
<div class="error">
<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
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
<?= form_open("/profile/updatepassword") ?>

    <div>
        <label for="current_password">Current password</label>
        <input type="password" name="current_password">
    </div>

    <div>
        <label for="password">New password</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Repeat new password</label>
        <input type="password" name="password_confirmation">
    </div>

    <button>Save</button>
    <a href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>

<?= $this->endSection() ?>
