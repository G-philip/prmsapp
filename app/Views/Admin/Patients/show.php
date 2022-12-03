<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Patients <?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px; ">
    <div class="report-container">
      <div class="report-controls">
        <div class="controls-left">
            <p class="text-info" style="margin: 7px;">PATIENT: <?= esc($patient->patient_code) ?></p>
          </div>
          <!-- Add new button -->
          <button class="report-button" title="Print Report" name="b_print" onClick="printdiv('div_print');">
            <i class="fas fa-print fa-fw"></i>
          </button>
          <button class="report-button text-info">
            <i class="fas fa-pluss fa-fw"></i><a class="report-button" href="<?= site_url("/admin/patients")?>" style="text-decoration: none;">&laquo; Back to index</a>
          </button>
        </div>
  </div>

<div id="div_print">
  <div class="report-header">
    <h4 class="report-title text-info font-weight-bold">Newliferehab </h4>

    <h5 class="report-name  text-info font-weight-bold">PATIENT BIODATA/GUARDIAN DETAILS
      <small class="report-period text-info">Active Patient</small>
    </h5>
  </div>
  <div class="report-body">


    <!-- Begin Page Content -->
        <!-- <div class="container-fluid"> -->



    <div class="row"> <!-- Begin of Row -->




    </div><!-- End of Row -->


    <div class="row"><!-- Begin Row -->

    <!-- First Column -->
            <div class="col-lg-4">

              <!-- Details -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Patient Details</h6>
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

                 <dl style="margin-left:">
             <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Name</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->patient_name) ?></dd>

             <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->age) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->gender) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">County</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->county) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->religion) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Marital Status</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->marital_status) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Languages Spoken</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->language) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->occupation) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Assigned Doctor</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($patient->assigned_doctor_id) ?></dd>

              <!-- <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Contact Name</dt>
              <dd><?php esc($patient->guardian_name) ?></dd>
              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Contact number</dt>
              <dd><?php esc($patient->contact_number) ?></dd>
              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Commission </dt>
              <dd><?php esc($patient->commission_status) ?></dd> -->
            <!-- <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date record was created</dt>
            <dd><?php esc($patient->created_at) ?></dd>
            <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date record was updated</dt>
            <dd><?php esc($patient->updated_at) ?></dd> -->
           </dl>

      </div><!--Card body end tag -->
      </div>

       </div>



              <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-info">Guardian Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="col-sm-12">
                  </div>
                   <div class="table">

                <table class="table table-bordered" id="dataTable" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-centerr">Guardian</th>
                      <th class="text-centerr">Contact</th>
                      <th class="text-centerr">Relationship</th>
                      <th class="text-centerr">Patient Source</th>
                      <!-- <td class="text-centerr"><?php esc($patient->guardian_name) ?></td> -->
                      <!-- <td class="text-centerr">Relationship</td> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->guardian_name) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->contact_number) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->relationship) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->patient_source) ?></td>
                    </tr>
                    <!-- <tr>
                <td class='text-centerr'><b>Relationship</b></td>
                  <td class='text-centerr'><?php esc($patient->relationship) ?></td> -->
                    </tr>
                  </tbody>
                </table>
              </div>




                </div>
              </div>

                 <div id="admission" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Commission Details <!--a style='margin-left: 550px; text-decoration:none;' class='text-secondary' href='http://localhost/patientrecords/admissioncontrol/admit_form/1#admission'> <i class="fa
                   fa-plus"></i></a--></h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="col-sm-12">
        </div>
                  <div class="table">

                <table class="table table-bordered" id="dataTable" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-centerr">Commission Status</th>
                      <th class="text-centerr">Amount Paid</th>
                      <th class="text-centerr">Paid To</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->commission_status) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->commission_amount) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($patient->paid_to) ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
           </div>







    </div><!-- End of Row -->

    <!-- ganun din dito ito naman scripts para sa isang bahagi ng website -->

        </div>


      <!-- End of Main Content -->
    <!-- </div> -->









  </div>
  <!-- <div class="report-footer">
        <div class="report-timestamp text-center text-info">
          <!--Thursday March 7, 2019 6:12pm IST->
          <?php //echo "Report generated on " . date("l, F d, Y "); ?>
        </div>
      </div> -->
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
