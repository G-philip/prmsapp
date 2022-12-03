<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Users <?= $this->endSection() ?>

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
            <i class="fas fa-plus fa-fw"></i><a class="report-button" href="<?= site_url("admin/users/new") ?>" style="text-decoration: none;"> Add New</a>
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
  <?php if (session()->has('errors')): ?>

            <ul>
              <?php foreach(session('errors') as $error):?>
              <li><?= $error ?></li>
            <?php endforeach; ?>
            </ul>
          <?php endif ?>

          <?php if (session()->has('info')): ?>
          <div class="info">
            <?= session('info') ?>
          </div>
          <?php endif ?>
  <div class="report-header">
    <h4 class="report-title text-info">Newliferehab </h4>

    <h5 class="report-name  text-info">Hospital System Users Details
      <small class="report-period text-info"></small>
    </h5>
  </div>
  <div class="report-body">
    <table class="table table-borderedd">
   <thead style="border-top:1px solid #444;">
    <tr style="color: white; background-color: rgb(37, 150, 190);">
      <th class="text-center">Date Created</th>
      <th class="text-centerr">Name</th>
      <th class="text-centerr">Email</th>
      <th class="text-center">Administrator</th>
      <th class="text-center">Doctor</th>
      <th class="text-center">Active</th>
      <!-- <th class="text-center">Contact</th> -->

      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($data): ?>
  <?php foreach ($data as $user): ?>
    <tr class="successs">
      <td class="text-center">
        <a href="<?= site_url("admin/users/show/{$user->id}/{$user->staff_id}") ?>">
          <?= $user->created_at ?>
         </a>
        </td>
        <td class="text-xs font-weight-bold text-secondary "><?= esc($user->name) ?></td>
        <td class="text-xs font-weight-bold text-secondary"><?= esc($user->email) ?></td>
        <td class="text-xs font-weight-bold text-secondary text-center"><?= $user->is_admin ? 'yes' : 'no' ?></td>
        <td class="text-xs font-weight-bold text-secondary text-center"><?= $user->is_doctor ? 'yes' : 'no' ?></td>
        <td class="text-xs font-weight-bold text-secondary text-center"><?= $user->is_active ? 'yes' : 'no' ?></td>

        <!-- ACTION -->
        <td class="text-center">
        <i class="fas fa-pen text-info"></i>
        <a href="<?= site_url("admin/users/edit/{$user->id}") ?>" class="text-sm font-weight-bbold text-info text-uppercase mb-1">Edit</a>
        <?php if ($user->id != current_user()->id): ?>
        <i class="fas fa-trash text-danger"></i>
        <a href="<?= site_url("admin/users/delete/{$user->id}") ?>" class="text-xs font-weight-bbold text-danger text-uppercase mb-1" disabl>Delete</a>
      <?php else: ?>
        <i class="fas fa-trash text-danger"></i>
        <a href="<?php //site_url("admin/users/delete/{$user->id}/{$user->staff_id}") ?>" class="text-xs font-weight-bbold text-danger text-uppercase mb-1 admindisabled">Delete</a>
      <?php endif ?>
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
