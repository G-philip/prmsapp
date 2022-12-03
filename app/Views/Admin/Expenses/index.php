<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Expense <?= $this->endSection() ?>

<?= $this->section("content") ?>


<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: ; background-color: white; border-radius:4px;  ">
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
        <i class="fas fa-plus fa-fw"></i><a class="report-button" href="<?= site_url("admin/expense/new") ?>" style="text-decoration: none;"> Add New</a>
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

  <div class="report-content">
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

      <h5 class="report-name  text-info">HOSPITAL EXPENDITURE DETAILS
        <small class="report-period text-info">Grouped By Month</small>
      </h5>
    </div>

    <div class="report-body">
      <table class="table table-borderedd">
     <thead style="border-top:1px solid #444;">
      <tr style="color: white; background-color: rgb(37, 150, 190);">
        <th class="text-center">Date Created</th>
        <th class="text-centerr">Transaction ID</th>
        <th class="text-centerr">Expense</th>
        <th class="text-centerr">Category</th>
        <!--th class="text-centerr">Description</th-->
        <th class="text-center">Amount</th>

        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php if (empty($expenses)): ?>
    <td colspan="6" class="text-center text-muted display-1">No data found.</td>
    <?php else: ?>

    <?php $previous_month = $expenses[0]->{"month"};  // init ?>

    <?php foreach ($expenses as $expense): ?>

        <?php if ($previous_month != $expense->{"month"}): ?>

            <tr class="tr-total">
              <td class="text-end text-secondary font-weight-bold display-1" colspan="4">Month Total </td>
              <td class="text-start text-secondary font-weight-bold display-1" colspan="2">
                <strong><?php echo number_to_currency($month_totals->{$previous_month}, 'Ksh', 'en_US', 2);?></td></strong>
            </tr>

        <?php endif; ?>
      <tr>
        <td class="text-centerr">
          <!-- <a href="<?php //site_url("admin/expense/show/" . $expense->id) ?>"> -->
          <?= $expense->created_at ?>
           <!-- </a> -->
          </td>
        <td class="text-centerr text-secondary font-weight-bold display-1"><?= $expense->expense_id ?></td>
        <td class="text-centerr text-secondary font-weight-bold display-1"><?= $expense->expense_name ?></td>
        <td class="text-centerr text-secondary font-weight-bold display-1"><?= $expense->category_id ?></td>
        <!--td class="text-centerr"><?PHP //$expense["expense_description"] ?></td-->
        <td class="text-center text-secondary"><!--strong-->&nbsp;&nbsp;<?=  number_to_currency($expense->amount, 'Ksh', 'en_US', 2) ?><!--/strong--></td>
        <td class="text-center">
          <i class="fas fa-pen text-info"></i>
          <a href="<?= site_url("admin/expense/edit/{$expense->id}") ?>" class="text-sm font-weight-bbold text-info text-uppercase mb-1">Edit</a>
           &nbsp;&nbsp;
          <i class="fas fa-trash text-danger"></i>
          <!-- <a href="<?php //site_url("admin/expense/delete/{$expense->id}") ?>" class="text-xs font-weight-bbold text-danger text-uppercase mb-1">Delete</a> -->
          <a href="<?php //site_url("admin/expense/delete/{$expense->id}") ?>" class="text-sm font-weight-bbold text-danger text-uppercase mb-1 delete"
            data-toggle="modal"  data-target="#staticBackdrop" value="<?= esc($expense->id) ?>">Delete</a>

        </td>
      </tr>

    <?php $previous_month = $expense->{"month"}; ?>
    <?php endforeach; ?>
    <!-- </tbody> -->
   <tr class="tr-total">
    <td class="text-end text-secondary font-weight-bold display-1" colspan="4">Month Total</td>
    <td class="text-left text-secondary font-weight-bold display-1" colspan="2">
      <strong><?php echo number_to_currency($month_totals->{$previous_month}, 'Ksh', 'en_US', 2);?></td></strong>
    <!--td>&nbsp;</td-->
  </tr>
  <tfoot>
          <tr>
            <?php foreach ($total_expenses as $total):?>
            <td class="text-end text-secondary font-weight-bold " colspan="4">TOTAL EXPENSES INCURRED</td>
            <td class="text-left text-secondary font-weight-bold" colspan="2">
              <strong><?php echo number_to_currency($total->amount, 'Ksh', 'en_US', 2);?><?php //$total->amount ?></td></strong>
            <!--td>&nbsp;</td-->
          </tr>
          <?php endforeach; ?>
          <?php endif; ?>
    </tfoot>
  </tbody>
  </table>
</div>
<!-- <div class="report-footer">
      <div class="report-timestamp text-center text-info">
        <?php //echo 'Report Was generated on: '.date("l, F d, Y ").'<br>'; ?>
      </div>
    </div> -->
  </div>
</div>

</div>
</div>

<!-- delete modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centeredd">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete Expense</h5>
        <p class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </p>
      </div>
      <div class="modal-body">
        <?php if (empty($expenses)): ?>

          <?php else: ?>
            <?php //form_open("/admin/expense/delete/{$expense->id}")?>
            <input type="hidden" readonly class="form-control-plaintext delete-id" name="id" id="id" value="<?php //esc($expense->id)?>">
            <input type="hidden" readonly class="form-control-plaintext" name="expense_id" id="expense_id" value="<?php //esc($expense->id)?>">
            <p>Are you sure you want to delete expense<strong>&nbsp;<?php //$expense->expense_id ?><i class="fa fa-question-circle"></i></strong>
        <button class="btn btn-danger btn-sm delete-button" data-dismiss="modal">Yes</button>
      <!-- </form> -->
        <!-- <button class="btn btn-danger btn-sm">Yes</button> -->
        </p>
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <span class="help-block text-warning text-left mb-0 " style="margin-right:65px;"><i class="fa fa-warning"></i>&nbsp;&nbsp;Note that you cant recover record after deletion</q></em>
      </span>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('.delete').click(function(){
  var responseID =$(this).attr('value');
  //alert(responseID);

  $.ajax({
    url:"<?php site_url()?> /admin/expense/data/" + responseID,
    dataType: "JSON",
    success: function(data){
      if(responseID == responseID){
        document.getElementById("id").value = data.id;
        document.getElementById("expense_id").value = data.expense_id;
      }
    }
      });
});
</script>

<script type="text/javascript">
$('.delete-button').click(function(){
  var responseID =$('.delete-id').val();
  //alert(responseID);

  $.ajax({
    //method: 'post',
    url:"<?php site_url()?> /admin/expense/delete/" + responseID,
    //dataType: "JSON",
    success: function(data){
      if(responseID == responseID){
        // document.getElementById("id").value = data.id;
        // document.getElementById("expense_id").value = data.expense_id;
        alert("expense deleted successfully");
      }
    }
      });
});
</script>


<?= $this->endSection() ?>
