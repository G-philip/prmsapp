<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Delete user <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main" style="background-color: white; padding: 20px;">

	<h1>Delete User</h1>
	<p>Are You sure you want to delete user <b><?= $user->name ?></b> </p>
	<?= form_open("admin/users/delete/{$user->id}/{$user->staff_id}")?>

	<button>Yes</button>
	<a href="<?= site_url('/admin/users/')?>">Cancel</a>
</div>
<?= $this->endSection() ?>
