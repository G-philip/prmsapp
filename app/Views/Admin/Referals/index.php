<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Referal Patients <?= $this->endSection() ?>

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
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px; ">
    <div class="report-container">
      <div class="report-controls">
        <div class="controls-left">

          <div class="report-dropdown">
            <button class="report-button">
              Sort <i class="fas fa-caret-down fa-fw"></i>
            </button>
            <div class="report-dropdown-menu">
              <a class="report-dropdown-item" href="#">Date</a>
              <a class="report-dropdown-item" href="#">Transaction type</a>
              <a class="report-dropdown-item" href="#">Vendor</a>
              <a class="report-dropdown-item" href="#">Memo</a>
            </div>
          </div>
          <!-- Add new button -->
          <button class="report-button">
            <i class="fas fa-plus fa-fw"></i><a class="report-button" href="<?= site_url("admin/referal/new") ?>" style="text-decoration: none;"> Add New</a>
          </button>
        </div>

        <div class="controls-right">
          <button class="report-button" title="Mail this Report">
            <i class="far fa-envelope fa-fw"></i>
          </button>
          <button class="report-button" title="Print Report">
            <i class="fas fa-print fa-fw"></i>
          </button>

          <div class="report-dropdown">
            <button class="report-button" title="Export">
            <i class="fas fa-file-export fa-fw"></i>
          </button>
            <div class="report-dropdown-menu">
              <a class="report-dropdown-item" href="#">PDF
                <i class="fas fa-file-pdf color-red f-right"></i>
              </a>
              <a class="report-dropdown-item" href="#">Excel
              <i class="fas fa-file-excel color-green f-right"></i></a>
              <a class="report-dropdown-item" href="#">
                <i class="fas fa-file-csv color-orange f-right"></i>CSV</a>
            </div>
          </div>
    </div>
  </div>
  <div class="report-header">
    <h4 class="report-title text-info">Newliferehab </h4>

    <h5 class="report-name  text-info">REFERAL /TRANSFER SUMMARY DETAILS
      <small class="report-period text-info"></small>
    </h5>
  </div>
  <div class="report-body">
    <table class="table table-borderedd">
   <thead style="border-top:1px solid #444;">
    <tr style="color: white; background-color: rgb(37, 150, 190);">
      <th class="text-center">Admission Date</th>
      <th class="text-center">OP/IP NO</th>
      <th class="text-center">Name</th>
      <th class="text-center">Gender</th>
      <!--th class="text-centerr">Description</th-->
      <th class="text-center">Age</th>

      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if (empty($referal_patient)): ?>
  <td colspan="6" class="text-center font-weight-bold text-muted display-1">No data found.</td>
  <?php else: ?>
  <?php foreach ($referal_patient as $patient): ?>
    <tr class="successs">
      <td class="text-center">
        <a href="<?= site_url("admin/patients/show/") ?>">
          <?= $patient->created_at ?>
         </a>
        </td>
        <td class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center"><?= esc($patient->patient_code) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($patient->patient_name) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($patient->gender) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($patient->age) ?></td>
      <td class="text-center font-weight-boldd">
        <i class="fas fa-pen text-info"></i>
        <a href="<?= site_url("admin/referal/edit/{$patient->id}") ?>" class="text-sm font-weight-bbold text-info text-uppercase mb-1">Edit</a>
        <i class="fas fa-trash text-danger"></i>
        <a href="#" class="text-xs font-weight-bbold text-danger text-uppercase mb-1 delete_referal"
             data-bs-toggle="modal" data-bs-target="#deletereferal" value="<?= esc($patient->id) ?>">Delete</a>
      </td>
    </tr>

<?php endforeach; ?>
<?php endif ?>
</tbody>
</table>
  </div>
  <!-- <div class="report-footer">
        <div class="report-timestamp text-center text-info">
          <!--Thursday March 7, 2019 6:12pm IST->
          <?php //echo "Report generated on " . date("l, F d, Y "); ?>
        </div>
      </div> -->

      <?= $this->include('Admin/Referals/delete'); ?>
</div>
  </div>
</div>

<script>
$('.delete_referal').click(function(){
  var responseID =$(this).attr('value');
  //alert(responseID);

  $.ajax({
    url:"<?php site_url()?> /admin/referal/deleteData/" + responseID,
    dataType: "JSON",
    success: function(data){
      if(responseID == responseID){
        document.getElementById("referal_id").value = data.id;
        document.getElementById("patient_name").innerHTML = data.patient_name;
        //document.getElementById("department_description").value = data.department_description;
      }
    }
      });
});
</script>
<?= $this->endSection() ?>
