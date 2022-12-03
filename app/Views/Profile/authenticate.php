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

<!-- <h1>Edit profile</h1> -->

<p>Please enter your password to continue</p>

<?= form_open("/profile/processauthenticate") ?>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>

    <button>Send</button>
    <a href="<?= site_url('/profile/show') ?>">Cancel</a>

</form>

<?= $this->endSection() ?>
