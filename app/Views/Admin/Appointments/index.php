<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Appointment <?= $this->endSection() ?>

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
            <i class="fas fa-plus fa-fw"></i><a class="report-button" href="<?= site_url("admin/appointment/new") ?>" style="text-decoration: none;"> Add New</a>
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

    <h5 class="report-name  text-info">APPOINTMENT SCHEDULE DETAILS
      <small class="report-period text-info"></small>
    </h5>
  </div>
  <div class="report-body">
    <table class="table table-borderedd">
   <thead style="border-top:1px solid #444;">
    <tr style="color: white; background-color: rgb(37, 150, 190);">
      <th class="text-center">Date Created</th>
      <th class="text-centerr">Doctor Schedule</th>
      <th class="text-center">Patient Name</th>
      <th class="text-center">Schedule Date</th>
      <!--th class="text-centerr">Description</th-->
      <!-- <th class="text-center">Age</th> -->

      <th class="text-center">Action</th>
    </tr>
  </thead>
  <?php if (empty($appointment)): ?>
  <td colspan="6" class="text-center font-weight-bold text-muted display-1">No data found.</td>
  <?php else: ?>
  <?php foreach ($appointment as $schedule): ?>
  <tbody>
    <tr class="successs">
      <td class="text-center">
        <a href="<?= site_url("admin/patients/show/") ?>">
          <?= $schedule->created_at ?>
         </a>
        </td>
        <td class="text-xs font-weight-bold text-secondary text-uppercasee mb-1 text-centerr">
          <strong>Doctor Name:&nbsp;</strong>Dr.&nbsp;<?= esc($schedule->name) ?><br>
          <strong>Start Time:&nbsp;</strong><?= esc($schedule->start_at) ?><br>
          <strong>End Time:&nbsp;&nbsp;&nbsp;</strong><?= esc($schedule->end_at) ?><br>
        </td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($schedule->patient_name) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?= esc($schedule->schedule) ?></td>
        <!-- <td class="text-xs font-weight-bold text-secondary text-uuppercase mb-1 text-center"><?php //esc($patient->age) ?></td> -->
      <td class="text-center font-weight-boldd">
        <i class="fas fa-pen text-info"></i>
        <a href="<?= site_url("admin/appointment/edit/{$schedule->appointment_id}") ?>" class="text-sm font-weight-bbold text-info text-uppercase mb-1">Edit</a>
        <i class="fas fa-trash text-danger"></i>
        <a href="#appointmentdelete" class="text-xs font-weight-bbold text-danger text-uppercase mb-1 delete_appointment"
             data-toggle="modal" value="<?= esc($schedule->appointment_id) ?>">Delete</a>
      </td>
    </tr>

  </tbody>
<?php endforeach; ?>
<?php endif ?>
</table>
  </div>
  <!-- <div class="report-footer">
        <div class="report-timestamp text-center text-info">
          <!--Thursday March 7, 2019 6:12pm IST->
          <?php //echo "Report generated on " . date("l, F d, Y "); ?>
        </div>
      </div> -->

      <?= $this->include('Admin/Appointments/delete'); ?>
</div>
  </div>
</div>

<script>
$('.delete_appointment').click(function(){
  var responseID =$(this).attr('value');
  //alert(responseID);

  $.ajax({
    url:"<?php site_url()?> /admin/appointment/deleteData/" + responseID,
    dataType: "JSON",
    success: function(data){
      if(responseID == responseID){
        document.getElementById("appointment_id").value = data.appointment_id;
        document.getElementById("delete_name").innerHTML = data.appointment_code;
        //document.getElementById("department_description").value = data.department_description;
      }
    }
      });
});
</script>
<?= $this->endSection() ?>
