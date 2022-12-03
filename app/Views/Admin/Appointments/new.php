<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> New Appointment <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
        <p class="text-info" style="margin: 10px;"><i class="fas fa-plus fa-fw"></i> New Appointment </p>
    </div>
</div>

  <div class="report-content">

<?php if (session()->has('errors')): ?>

              <ul>
                <?php foreach(session('errors') as $error):?>
                <li><?= $error ?></li>
              <?php endforeach; ?>
              </ul>
            <?php endif ?>

            <?php if (session()->has('warning')): ?>
            <div class="warning">
              <?= session('warning') ?>
            </div>
            <?php endif ?>
    <div class="report-body">

      <?php echo form_open('/admin/appointment/create', 'class="formm" id="formm"'); ?>

                  <?= $this->include('Admin/Appointments/form'); ?>

                    <div  class="my-3">
                      <a class="btn btn-link" href="<?= site_url("/admin/appointment")?>">&laquo;cancel</a>
                      <button type="submit" class="btn btn-primary float-end">Submit</button>
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
      height: 200,
      tabsize: 2,
      placeholder: '<b>Start typing here</b><br>...'
    });
  });
</script>

<script type="text/javascript">
  $('.assigned_doctor_id').change(function (){
    var responseID =$(this).val();
    //alert(responseID);

    $.ajax({
      url:"<?php site_url()?> /admin/appointment/patientData/" + responseID,
      dataType: "JSON",
      success: function(patient){
        if(responseID !== " "){
          //$('#select_patient').empty();
          $('#select_patient').find('option').not(':first').remove();
          for(var count = 0; count < patient.length; count++){
            $('#select_patient').append('<option value="'+patient[count].id+'">'+patient[count].patient_name+'</option>');
          }
        }
      }
        });
  });
</script>
<?= $this->endSection() ?>
