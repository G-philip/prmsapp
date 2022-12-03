<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Department <?= $this->endSection() ?>

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

  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; bbackground-color: white; border-radius:4px; ">
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
            <i class="fas fa-plus fa-fw"></i><a class="report-button" href="#" style="text-decoration: none;"
               data-bs-toggle="modal" data-bs-target="#adddepartment"> Add New</a>
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

  <h5 class="report-name  text-info">
      <small class="report-period text-info">Hospital Departments Details</small>
    </h5>
  </div>
  <div class="report-body">
  <table class="table table-stripedd">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">Date Created</th>
      <th scope="col">Department</th>
      <th scope="col">Description</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($data): ?>
    <?php $i=1; foreach ($data as $department): ?>
    <tr>
      <!-- <td><?php //echo $i++; ?></td> -->
      <td class="font-weight-bold text-muted display-1"><?= esc($department->created_at) ?></td>
      <td class="font-weight-bold text-muted display-1"><?= esc($department->department_name) ?></td>
      <td class="font-weight-bold text-muted display-1"><?= esc($department->department_description) ?></td>
      <td class="text-center">
        <i class="fas fa-pen text-info"></i>
        <a href="#" class="text-sm font-weight-bbold text-info text-uppercase mb-1 edit_department"
            data-bs-toggle="modal" data-bs-target="#editdepartment" value="<?= esc($department->id)?>">Edit</a>
        <i class="fas fa-trash text-danger"></i>
        <a href="" class="text-xs font-weight-bbold text-danger text-uppercase mb-1 delete_department"
            data-bs-toggle="modal" data-bs-target="#deleteDepartment" value="<?= esc($department->id)?>">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>

  <?php else: ?>
    <td colspan="6" class="text-center font-weight-bold text-secondary display-1">No data found.</td>
  <?php endif ?>
  </tbody>

</table>
  </div>
  <?= $pager->simplelinks() ?>
<!-- <br> -->
<!-- <hr>
  <div class="report-footer">
        <div class="report-timestamp text-info text-center">
          <!--Thursday March 7, 2019 6:12pm IST->
          <?php //echo "Report generated on " . date("l, F d, Y"); ?>&nbsp;at&nbsp<?php //echo  date("H:i:a"); ?>
        </div>
      </div> -->

      <!-- modal(new and edit) -->
      <?= $this->include('Admin/Departments/new'); ?>
      <?= $this->include('Admin/Departments/edit'); ?>
      <?= $this->include('Admin/Departments/delete'); ?>


      <script type="text/javascript">
      $('.edit_department').click(function(){
        var responseID =$(this).attr('value');
        //alert(responseID);

        $.ajax({
          url:"<?php site_url()?> /admin/department/data/" + responseID,
          dataType: "JSON",
          success: function(data){
            if(responseID == responseID){
              document.getElementById("department_id").value = data.id;
              document.getElementById("department_name").value = data.department_name;
              document.getElementById("department_description").value = data.department_description;
            }
          }
            });
      });


      </script>

      <script>
      $('.delete_department').click(function(){
        var responseID =$(this).attr('value');
        //alert(responseID);

        $.ajax({
          url:"<?php site_url()?> /admin/department/deleteData/" + responseID,
          dataType: "JSON",
          success: function(data){
            if(responseID == responseID){
              document.getElementById("delete_id").value = data.id;
              document.getElementById("delete_name").innerHTML = data.department_name;
              //document.getElementById("department_description").value = data.department_description;
            }
          }
            });
      });
      </script>

</div>
  </div>
</div>
<?= $this->endSection() ?>
