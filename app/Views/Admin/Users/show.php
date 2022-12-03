<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Patients <?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px; ">
    <div class="report-container">
      <div class="report-controls">
        <div class="controls-left">
            <p class="text-info" style="margin: 7px;">User: <?= esc($user->name) ?></p>
          </div>
          <!-- Add new button -->
          <button class="report-button text-info">
            <i class="fas fa-pluss fa-fw"></i><a class="report-button" href="<?= site_url("/admin/users")?>" style="text-decoration: none;">&laquo; Back to index</a>
          </button>
        </div>
  </div>

  <div class="report-header">
    <h4 class="report-title text-info font-weight-bold">Newliferehab </h4>

    <h5 class="report-name  text-info font-weight-bold">HOSPITAL USER/ STAFF DETAILS
      <small class="report-period text-info"></small>
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
                  <h6 class="m-0 font-weight-bold text-info">Staff Details</h6>
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

                 <dl style="margin-left:">
             <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Name</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($user->name) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($user->gender) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Department</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($user->department_id) ?></dd>

              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Phone Number</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($user->contact_number) ?></dd>
              <dt class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Hired</dt>
              <dd class="font-weight-boldd text-secondary"><?= esc($user->created_at) ?></dd>
           </dl>

      </div><!--Card body end tag -->
      </div>

       </div>



              <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="m-0 font-weight-bold text-info">Login Details</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="col-sm-12">
                  </div>
                   <div class="table">

                <table class="table table-bordered" id="dataTable" cellspacing="0">

                  <thead>
                    <tr>
                      <th class="text-centerr">Email</th>
                      <th class="text-centerr">Is Admin</th>
                      <th class="text-centerr">Is Doctor</th>
                      <th class="text-centerr">Status</th>
                      <!-- <td class="text-centerr"><?php //esc($patient->guardian_name) ?></td> -->
                      <!-- <td class="text-centerr">Relationship</td> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class='text-centerr font-weight-bold text-secondary'><?= esc($user->email) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($user->is_admin) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?= esc($user->is_doctor) ?></td>
                      <td class='text-centerr font-weight-bold text-secondary'><?php //esc($patient->patient_source) ?></td>
                    </tr>
                    <!-- <tr>
                <td class='text-centerr'><b>Relationship</b></td>
                  <td class='text-centerr'><?php //esc($patient->relationship) ?></td> -->
                    </tr>
                  </tbody>
                </table>
              </div>




                </div>
              </div>

                 <div id="admission" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-info">Salary Details <!--a style='margin-left: 550px; text-decoration:none;' class='text-secondary' href='http://localhost/patientrecords/admissioncontrol/admit_form/1#admission'> <i class="fa
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
                      <th class="text-centerr">Agreed Salary</th>
                      <th class="text-centerr">Advance</th>
                      <th class="text-centerr">Bonus</th>
                      <th class="text-centerr">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class='text-centerr font-weight-bold text-secondary'><?= esc($user->agreed_salary) ?></td>
                    <td class='text-centerr font-weight-bold text-secondary'><?php //esc($patient->commission_amount) ?></td>
                    <td class='text-centerr font-weight-bold text-secondary'><?php //esc($patient->paid_to) ?></td>
                    <td class='text-centerr font-weight-bold text-secondary'><?php //esc($patient->paid_to) ?></td>
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
<?= $this->endSection() ?>
