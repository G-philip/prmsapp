<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Show Expense <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main">
  <div class="container-fluid" style="margin-top: px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: 2px solid rgb(37, 150, 190); padding: 20px; background-color: white; border-radius:4px;">
  	<?php if (session()->has('info')): ?>
	<div class="info">
	  <?= session('info') ?>
	</div>
	<?php endif; ?>
<a href="<?= site_url("/admin/expense")?>">&laquo; back to expense</a>
 <h2>STAFF</h2>
 <dl>
 	<dt>ID</dt>
 	<dd><?= esc($expense->id) ?></dd>
 	<dt>NAME</dt>
 	<dd><?= esc($expense->expense_name) ?></dd>
 	<dt>Expense ID</dt>
 	<dd><?= esc($expense->expense_id) ?></dd>
 	<dt>DESCRIPTION</dt>
 	<dd><?= esc($expense->expense_description) ?></dd>
 	<dt>AMOUNT</dt>
 	<dd><?= esc($expense->amount) ?></dd>
 	<dt>CATEGORY</dt>
 	<dd><?= esc($expense->category_id) ?></dd>
 	<dt>Created_at</dt>
 	<dd><?= esc($expense->created_at) ?></dd>
 	<dt>Updated_at</dt>
 	<dd><?= esc($expense->updated_at) ?></dd>
 </dl>
</div>
</div>
<?= $this->endSection() ?>
