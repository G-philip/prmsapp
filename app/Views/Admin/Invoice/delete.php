<!-- Modal -->
<div class="modal " id="delete-prescription" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f1f6fb;">
        <h5 class="modal-title text-danger" id="staticBackdropLabel"><i class="fa fa-trash " style="font-size:1.5rem"></i>&nbsp;Delete Prescription</h5>
        <button type="button" class="close btn-danger" data-dismiss="modal" aria-label="Close" style="text-color:white;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open("/admin/prescription/delete") ?>
        <input type="text" id="prescription_id" readonly class="prescription_id" name="prescription_id" hidden>
        <!-- <input type="text" id="delete_name" class="form-control-plaintext" readonly> -->
        <p><span>Are you sure you want to delete&nbsp;patient prescription permanently&nbsp;<i class="fa fa-question-circle"></i></span></p>
        <!-- </form> -->

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </form>
      </div>
    </div>
  </div>
</div>






<!-- <?php //$this->extend("layouts/default") ?>

<?php //$this->section("title") ?> Delete Department <?php //$this->endSection() ?>

<?php //$this->section("content") ?>

<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
        <p class="text-dangerr lead" style="margin: 10px;"><i class="fas fa-trash text-dangerr" style="font-size:20px"></i> Delete Department</p>
    </div>
</div>

  <div class="report-content">
    <div class="report-body">

			<!-- <h1>Delete Expense</h1> ->
			<div class="text-centerr" style="margin-top: 30px;">
				<p>Are you sure you want to delete <strong>&nbsp;<?php //$department->department_name ?></strong>&nbsp;department&nbsp;<i class="fa fa-question text-dangerr"></i></p>
				<?php //form_open("/admin/department/delete/{$department->id}")?>
				<button class="btn btn-danger btn-sm">Yes</button>&nbsp;&nbsp;
				<a href="<?php //site_url('/admin/department/')?>">Cancel</a>
				</form>
		<div class="footer" style="margin-top: 30px;">
			<p class="text-warning lead" stylee="margin-right:390px;"><i class="fa fa-warning"></i>&nbsp;&nbsp;<u>Note</u> that you cant recover data after deletion.</p>
		</div>
		</div>
</div>
</div>
</div>
</div>
</div>

<?php //$this->endSection() ?> -->
