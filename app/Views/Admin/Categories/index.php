<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Expense|Category <?= $this->endSection() ?>

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
            <i class="fas fa-plus fa-fw"></i><a class="report-button" href="#" style="text-decoration: none;"
                data-bs-toggle="modal" data-bs-target="#addcategory" > Add New</a>
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

    <h5 class="report-name  text-info">HOSPITAL EXPENSE CATEGORIES
      <small class="report-period text-info"></small>
    </h5>
  </div>
  <div class="report-body">
    <table class="table table-borderedd">
   <thead style="border-top:1px solid #444;">
    <tr style="color: white; background-color: rgb(37, 150, 190);">
      <!-- <th class="text-center">#</th> -->
      <th class="text-center">Date Created</th>
      <th class="text-centerr">Expense Category</th>
      <th class="text-centerr">Description</th>
      <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if (empty($data)): ?>
  <td colspan="6" class="text-center font-weight-bold text-muted display-1">No data found.</td>
  <?php else: ?>
  <?php $i=1; foreach ($data as $category): ?>
    <tr class="successs">
      <!-- <td><?php //echo ($i++);?><?php //esc($i++) ?></td> -->
      <td class="text-center"><?= esc($category->created_at) ?></td>
        <td class="text-centerr font-weight-bold text-secondary"><?= esc($category->category_name) ?></td>
        <td class="text-centerr font-weight-bold text-secondary"><?= esc($category->category_description) ?></td>
      <td class="text-center">
        <i class="fas fa-pen text-info"></i>
        <a href="#" class="text-sm font-weight-bbold text-info text-uppercase mb-1 edit_category"
            data-bs-toggle="modal" data-bs-target="#editcategory"  value="<?= esc($category->id)?>">Edit</a>
        <i class="fas fa-trash text-danger"></i>
        <a href="#" class="text-xs font-weight-bbold text-danger text-uppercase mb-1 delete_category"
             data-bs-toggle="modal" data-bs-target="#deleteCategory" value="<?= esc($category->id)?>">Delete</a>
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

      <!-- modal(new and edit) -->
      <?= $this->include('Admin/Categories/new'); ?>
      <?= $this->include('Admin/Categories/edit'); ?>
      <?= $this->include('Admin/Categories/delete'); ?>

      <script>
      $('.edit_category').click(function(){
        var responseID =$(this).attr('value');
        //alert(responseID);

        $.ajax({
          url:"<?php site_url()?> /admin/expense/category/data/" + responseID,
          dataType: "JSON",
          success: function(data){
            if(responseID == responseID){
              document.getElementById("edit_id").value = data.id;
              document.getElementById("name").value = data.category_name;
              document.getElementById("description").value = data.category_description;
            }
          }
            });
      });
      </script>

      <script>
      $('.delete_category').click(function(){
        var responseID =$(this).attr('value');
        //alert(responseID);

        $.ajax({
          url:"<?php site_url()?> /admin/expense/category/data/" + responseID,
          dataType: "JSON",
          success: function(data){
            if(responseID == responseID){
              document.getElementById("category_id").value = data.id;
              document.getElementById("delete_name").innerHTML = data.category_name;
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
