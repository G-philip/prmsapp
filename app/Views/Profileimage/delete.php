<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Delete profile image<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="main-left" style="margin-left:250px;padding:1px 16px;height:auto; margin-top:70px;">

<h1>Delete profile image</h1>

<p>Are you sure?</p>

<?= form_open("/profileimage/delete") ?>

    <button>Yes</button>
    <a href="<?= site_url("/profile/show") ?>">Cancel</a>

</form>

</div>

<?= $this->endSection() ?>
