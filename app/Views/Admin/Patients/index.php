<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Patients <?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="main">
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
            <i class="fas fa-plus fa-fw"></i><a class="report-button" href="<?= site_url("admin/patients/new") ?>" style="text-decoration: none;"> Add New</a>
          </button>
        </div>

        <div class="controls-right">
          <button class="report-button" title="Mail this Report">
            <i class="far fa-envelope fa-fw"></i>
          </button>
          <button class="report-button" title="Print Report" name="b_print" onClick="printdiv('div_print');">
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
  <?php if (session()->has('errors')): ?>

            <ul>
              <?php foreach(session('errors') as $error):?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
          <?php endif ?>

          <?php if (session()->has('info')): ?>
          <div class="info p-0">
            <?= session('info') ?>
          </div>
          <?php endif ?>
<div class="" id="div_print">
  <div class="report-header">
    <h4 class="report-title text-info">Newliferehab </h4>

    <h5 class="report-name  text-info">PATIENT BIODATA/GUARDIAN DETAILS
      <small class="report-period text-info">Active Patients</small>
    </h5>
  </div>
  <div class="report-body">
    <table class="table table-borderedd">
   <thead style="border-top:1px solid #444;">
    <tr style="color: white; background-color: rgb(37, 150, 190);">
      <th class="text-center">Admission Date</th>
      <th class="text-center">Patient ID</th>
      <th class="text-center">Name</th>
      <th class="text-center">Guardian</th>
      <th class="text-center">Contact</th>

      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if (empty($patients)): ?>
  <td colspan="6" class="text-center font-weight-bold text-muted display-1">No data found.</td>
  <?php else: ?>
  <?php foreach ($patients as $patient): ?>
    <tr class="successs">
      <td class="text-center">
        <a href="<?= site_url("admin/patients/show/{$patient->id}/{$patient->guardian_id}/{$patient->commission_id}") ?>">
          <?= $patient->created_at ?>
         </a>
        </td>
        <td class="text-xs font-weight-bold text-secondary text-uppercase mb-1 text-center"><?= esc($patient->patient_code) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($patient->patient_name) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($patient->guardian_name) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($patient->contact_number) ?></td>
      <td class="text-center font-weight-boldd">
        <i class="fas fa-pen text-info"></i>
        <a href="<?= site_url("admin/patients/edit/{$patient->id}/{$patient->guardian_id}/{$patient->commission_id}") ?>" class="text-sm font-weight-bbold text-info text-uppercase mb-1">Edit</a>
        <i class="fas fa-trash text-danger"></i>
        <a href="<?= site_url("admin/patients/delete/{$patient->id}/{$patient->guardian_id}/{$patient->commission_id}") ?>" class="text-xs font-weight-bbold text-danger text-uppercase mb-1">Delete</a>
      </td>
    </tr>

<?php endforeach; ?>
<?php endif ?>
</tbody>
</table>
  </div>
  <div class="report-footer">
        <div class="report-timestamp text-center text-info">
          <!--Thursday March 7, 2019 6:12pm IST-->
          <?php echo "Report generated on " . date("l, F d, Y "); ?>
        </div>
      </div>
    </div>
</div>
  </div>
</div>
<script language="javascript">
  function printdiv(printpage){
  var headstr = "<html><head><title></title></head><body>";
  var footstr = "</body>";
  var newstr = document.all.item(printpage).innerHTML;
  var oldstr = document.body.innerHTML;
  document.body.innerHTML = headstr+newstr+footstr;
  window.print();
  document.body.innerHTML = oldstr;
  return false;
}
</script>
<?= $this->endSection() ?>
