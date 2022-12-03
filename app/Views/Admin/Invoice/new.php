<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Invoice <?= $this->endSection() ?>

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
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: ; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
      <p class="text-info" style="margin: 7px; font-size:1.2rem;"><i class="fas fa-plus" style="font-size:1.5rem; margin-topp: 2px;"></i> New Invoice <?php //esc($patient->patient_code) ?></p>

    </div>

    <div class="controls-right">
      <button class="report-button text-info">
        <i class="fas fa-pluss fa-fw"></i><a class="report-button" href="<?= site_url("/admin/invoice")?>" style="text-decoration: none;">&laquo; Back to index</a>
      </button>

    </div>
  </div>

  <div class="report-content">
    <div class="report-header">
      <h4 class="report-title text-info">Newliferehab </h4>

      <h5 class="report-name  text-info">
        <small class="report-period text-info">Hospital Payment Invoice</small>
      </h5>
    </div>

    <div class="report-body">
      <?= form_open("/admin/invoice/create")?>
      <?= $this->include('Admin/Invoice/form'); ?>
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
$('.patientPrescription').change(function(){
  var responseID =$(this).val();
  //alert(responseID);
  $.ajax({
    url:"<?php site_url()?> /admin/prescription/data/" + responseID,
    dataType: "JSON",
    success: function(data){
      if(responseID == responseID){
        $('#select_patient').removeClass("d-block");
        $('#pdetails').removeClass("d-nine");
        $('#pdetails').addClass("d-block").fadeIn(100);

        document.getElementById("patient_name").value = data.patient_name;
        document.getElementById("patient_code").value = data.patient_code;

        //document.getElementById("patient_name").style.backgroundColor="white";
        //document.getElementById("patient_name").setAttribute('readonly', true);

        $('#select_patient').addClass("d-none");
      }else{
        $('#pdetails').removeClass("d-block");
        $('#pdetails').addClass("d-none");
      }
    }
  });
});
</script>

<script type="text/javascript">
    // CREATING BLANK PRESCRIPTION ENTRY
    var blank_doc_entry = '';
        $(document).ready(function(){
        blank_doc_entry = $('#doc_entries').html();
    });

    function doc_entry(){
        $('#doc_entries').append(blank_doc_entry);
    }

    // REMOVING BLANK PRESCRIPTION ENTRY
    function deleteParentElement(n){
        n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
    }
</script>
<?= $this->endSection() ?>
