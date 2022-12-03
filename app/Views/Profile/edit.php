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
<?= form_open("/profile/update") ?>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>
</br>
    <button>Save</button>
    <a href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>
<?= $this->endSection() ?>
