<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Delete Expense <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
        <p class="text-danger" style="margin: 10px;"><i class="fas fa-trash text-danger" style="font-size:20px"></i> Delete Confirmation</p>
    </div>
</div>

  <div class="report-content">
    <div class="report-body">

			<!-- <h1>Delete Expense</h1> -->
			<div class="text-centerr" style="margin-top: 30px;">
				<p>Are you sure you want to delete expense<!--strong-->&nbsp;<?= $expense->expense_id ?>&nbsp;<!--i class="fa fa-question text-danger"></i></strong-->?</p>
				<?= form_open("/admin/expense/delete/{$expense->id}")?>
				<button class="btn btn-danger btn-sm">Yes</button>&nbsp;&nbsp;
				<a href="<?= site_url('/admin/expense/')?>">Cancel</a>
				</form>
		<div class="footer" style="margin-top: 30px;">
			<p class="text-warning" stylee="margin-right:390px;"><i class="fa fa-warning"></i>&nbsp;&nbsp;Note that you cant recover data after deletion</p>
		</div>
		</div>
</div>
</div>
</div>
</div>
</div>

<?= $this->endSection() ?>
