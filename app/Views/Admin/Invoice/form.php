<div class="row">
 <div class=" col-md-12 d-block" id="select_patient">
    <span class="help-block text-info lead">*Please select&nbsp;patient&nbsp;to&nbsp;proceed<em></em>
  </span>
  <select class="form-select" aria-label="Default select example">
    <option value="" selected>------------Select Patient------------</option>
  <!--- Displaying fetched cities in options using foreach loop -->

        <?php foreach ($patient_data as $data): ?>
            <option value="<?= esc($data->id) ?>"><?= esc($data->patient_code) ?></option>
          <?php endforeach; ?>
          <?php foreach ($referal_data as $data): ?>
              <option value="<?= esc($data->id) ?>"><?= esc($data->patient_code) ?></option>
            <?php endforeach; ?>
        </select>
  </div>
</div>

<div class="d-nonee" id="pdetails">
      <!-- <span class="help-block text-info lead">*Patient&nbsp;Details&nbsp;Autogenerted<em></em>
    </span> -->

 <div class="row">
    <div class="form-group col-md-12">
       <label for="age" class="lead text-secondary">Patient Name:</label>
       <input type="text" name="patient_name" class="form-control" id="patient_name" disabledd readonlyy>
   </div>
 </div>

 <div class="row">
   <div class="form-group col-md-12">
      <label for="age" class="lead text-secondary">Admission No:</label>
      <input type="text" name="patient_code" class="form-control" id="patient_code" readonlyy>
  </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
       <label for="date" class="lead text-secondary">Invoice Title:</label>
       <input type="text" name="date" class="form-control" id="date" value="" readonlyy>
   </div>
  </div>

  <div class="row">
    <div class="form-group col-md-12">
      <label for="prescription" class="lead text-secondary">Due Date:</label>
      <input type="date" class="form-control" name="" id="prescription"></input>
      <span id="passwordHelpBlock" class="form-text text-muted">
          <!-- <em>Put own words and duration</em> -->
      </span>
    </div>
  </div>

<div class="row">
  <!-- <label class="form-group col-md-12 lead text-secondary"><?php //echo ('Invoice Entries'); ?></label> -->
</div>

  <div id="doc_entries">
    <?php //$prescription_entries = json_decode($patient_prescription->prescription_entries);
	  	  //foreach($prescription_entries as $key => $prescription_entry) : ?>
<div class="row">
  <label class="form-group col-md-12 lead text-secondary"><?php echo ('Invoice Entries'); ?></label>
<div class="form-group col-md-6">
 <input name="entry_medicine_name[]" type="text" class="form-control text-secondary" placeholder="<?php echo ('Invoice Description');?>">
</div>

<div class="form-group col-md-5">
 <input name="entry_medicine_type[]" type="text" class="form-control text-secondary" placeholder="<?php echo ('Invoice Amount');?>">
</div>

<div class="form-group col-md-1">
 <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
</div>

</div>
<?php //endforeach;?>
</div>
</br>

<div class="d-grid">
  <button class="btn btn-info btn-sm shadow-none" type="button" onClick="doc_entry()"><i class="fa fa-plus"></i>&nbsp;<?php echo ('Add More Prescription Entries');?></button>
</div>
</br>

  <div  class="form-group">
    <a class="btn btn-link" href="<?= site_url("/admin/prescriptions")?>">&laquo;cancel</a>
    <button type="submit" class="btn btn-info float-right btn-rounded" style="margin-right: 10px;">Submit</button>
  </div>

 </form>
</div>
