<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Delete patient <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main" style="background-color: white; padding: 20px;">

	<h1>Delete Patient</h1>
	<p>Are You sure you want to delete patient <b><?= $patient->patient_code ?></b> </p>
	<?= form_open("admin/patients/delete/{$patient->id}/{$patient->guardian_id}/{$patient->commission_id}")?>

	<button>Yes</button>
	<a href="<?= site_url('/admin/patients/')?>">Cancel</a>
</div>
<?= $this->endSection() ?>
