<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit Referal Patient <?= $this->endSection() ?>

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
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <?= session('info') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
        <p class="text-info" style="margin: 10px;"><i class="fa fa-edit " style="font-size:1.5rem"></i> Edit Referal Patient</p>
    </div>
</div>
  <div class="report-content">
    <div class="report-body">

      <?php echo form_open("/admin/appointment/update/{$appointment->appointment_id}", 'class="form" id="form" ' ); ?>

                  <?= $this->include('Admin/Appointments/form'); ?>

                    <div  class="form-group">
                      <a class="btn btn-link" href="<?= site_url("/admin/appointment")?>">&laquo;cancel</a>
                      <button type="submit" class="btn btn-primary float-right" style="margin-right: 10px;">Submit</button>
                    </div>
                    </form>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 100,
      tabsize: 2,
      placeholder: '<b>Start typing here</b><br>...'
    });
  });
</script>
<?= $this->endSection() ?>
