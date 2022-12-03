<div class="row">
  <div class="form-group col-md-6">
     <label class="col-form-label" for="expense_name">Expense Name:</label>
        <input type="text" class="form-control shadow-none" id="expense_name" name="expense_name" Placeholder="Enter expense name"
          value="<?= old('expense_name', esc($expense->expense_name)) ?>">
  </div>
<div class="form-group col-md-6">
<label class="col-form-label" for="category_id">Expense Category:</label>
<select id="category_id" name="category_id" class="form-control shadow-none">
  <option value="" selected>------------Select Expense------------</option>
      <?php $expenses = $expense->category_id;
          foreach ($category as $value ):?>
    <option value="<?php echo $value->id;?>"<?= set_select('category_id', $value->id); ?><?php if($value->id == $expenses) echo 'selected="selected"';?>><?php echo $value->category_name;?>
    </option>
    <?php endforeach; ?>
</select>
</div>
</div>

<div class="row">
  <div class="form-group col-md-4">
      <label class="col-form-label" for="name">Expense ID:</label>
      <input type="text" name="expense_id" class="form-control shadow-none"  id="name" Placeholder="Enter expense ID"
        value="<?= old('expense_id', esc($expense->expense_id)) ?>">
  </div>

<div class="form-group col-md-4">
<label class="col-form-label" for="payment_method">Payment Method</label>
<select id="payment_method" name="payment_method" class="form-control shadow-none valid">
  <option value="" selected>------------Select Mode Of Payement------------</option>
  <option value="Cash"<?= set_select('payment_method', 'Cash') ?><?php if(esc($expense->payment_method == 'Cash')) echo 'selected="selected"' ;?>>
    <?php echo ('Cash');?>
  </option>
  <option value="Mpesa"<?= set_select('payment_method', 'Mpesa') ?><?php if(esc($expense->payment_method == 'Mpesa')) echo 'selected="selected"' ;?>>
    <?php echo ('Mpesa');?>
  </option>
  <option value="Card"<?= set_select('payment_method', 'Card') ?><?php if(esc($expense->payment_method == 'Card')) echo 'selected="selected"' ;?>>
    <?php echo ('Card');?>
  </option>
</select>
</div>

<div class="form-group col-md-4">
    <label class="col-form-label" for="agreed_salary">Amount Incurred:</label>
    <input type="int" name="amount" class="form-control shadow-none" id="agreed_salary" Placeholder="Enter amount incurred"
      value="<?= old('amount', esc($expense->amount)) ?>">
</div>
</div>

<div class="row">
  <div class="form-group col-md-12">
      <label class="col-form-label" for="annual_increment">Expense Description:</label>
     <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="3" placeholder="Enter expense description" name="expense_description"><?= old('expense_description', esc($expense->expense_description)) ?></textarea>
     </textarea>
  </div>
</div>

<div class="mb-3">
  <label for="formFile" class="col-form-label">Upload Expense Receipt</label>
  <input class="form-control" type="file" id="formFile">
</div>
<!-- <div class="row">
  <div class="form-group col">
      <label for="exampleFormControlFile1">Upload Expense Receipt</label>
      <input type="file" class="form-control-file shadow-none" id="receipt" name="receipt">
    </div>
</div> -->
