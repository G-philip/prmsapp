<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Prescription Sheet <?= $this->endSection() ?>

<?= $this->section("content") ?>


<div class="main">
  <?php if (session()->has('errors')): ?>
            <ul>
              <?php foreach(session('errors') as $error):?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
          <?php endif ?>

          <?php if (session()->has('info')): ?>
          <div class="alert alert-info alert-dismissible fade show pt-1" role="alert" style="height:2.5rem; ">
            <?= session('info') ?>
            <button type="button" class="close pt-1" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
        <?php endif ?>

        <?php if (session()->has('warning')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?= session('warning') ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <?php endif ?>

      <?php if (session()->has('danger')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session('danger') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <?php endif ?>
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: ; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
      <p class="text-info" style="margin: 7px; font-size:1.2rem;"><i class="fas fa-plus" style="font-size:1.5rem; margin-topp: 2px;"></i> New Prescription <?php //esc($patient->patient_code) ?></p>

    </div>

    <div class="controls-right">
      <button class="report-button text-info">
        <i class="fas fa-pluss fa-fw"></i><a class="report-button" href="<?= site_url("/admin/prescriptions")?>" style="text-decoration: none;">&laquo; Back to index</a>
      </button>

    </div>
  </div>

  <div class="report-content">
    <div class="report-header">
      <h4 class="report-title text-info">Newliferehab </h4>

      <h5 class="report-name  text-info">Hospital Prescription Sheet
        <small class="report-period text-info"></small>
      </h5>
    </div>

    <div class="report-body">
      <?= form_open("/admin/prescription/update/{$patient_prescription->id}")?>
      <?= $this->include('Admin/Prescriptions/editForm'); ?>
      <div  class="form-group">
        <a class="btn btn-link" href="<?= site_url("/admin/prescriptions")?>">&laquo;cancel</a>
        <button type="submit" class="btn btn-primary float-right" style="margin-right: 10px;">Submit</button>
      </div>
     </form>
   </div>
<div class="report-footer">
      <div class="report-timestamp text-center text-info">
        <div class="confedential d-none" id="confedential">
            <span class="help-block"><i class="fa fa-warning text-warning"></i>&nbsp;<em class="text-info">Confedential&nbsp;Information&nbsp;
              <strong class="text-info">Authorized&nbsp;access&nbsp;only&nbsp;</strong></em></span>
        </div>
        <?php //echo 'Report Was generated on: '.date("l, F d, Y ").'<br>'; ?>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 200,
      tabsize: 2,
      placeholder: '<b>Start typing here</b><br>...'
    });
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
  document.getElementById("date").setAttribute('readonly', true);
  document.getElementById("patient_name").setAttribute('readonly', true);
  document.getElementById("patient_code").setAttribute('readonly', true);
  document.getElementById("doctor").setAttribute('readonly', true);
});
</script>

<script type="text/javascript">
    // CREATING BLANK PRESCRIPTION ENTRY
    var blank_doc_entry = '';
        $(document).ready(function(){
        blank_doc_entry = $('#two_doc_entries').html();
    });

    function two_doc_entry(){
        $('#two_doc_entries').append(blank_doc_entry);
    }

    // REMOVING BLANK PRESCRIPTION ENTRY
    function deleteParentElement(n){
        n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
    }
</script>
<?= $this->endSection() ?>
