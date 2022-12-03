<div class="row">
<div class="col-md-12 visible" id="select_patient">
    <span class="help-block text-info lead">*Please select&nbsp;patient&nbsp;to&nbsp;proceed<em></em>
  </span>
    <!--select class="form-control passport " id="passport" name="passport"-->
      <select class=" custom-select patientPrescription" name="patient" data-style="btn-primary btn-outline">
        <option value="" selected>------------Select Patient------------</option>
      <!--- Displaying fetched cities in options using foreach loop ---->

            <?php foreach ($patient_data as $data): ?>
                <option value="<?= esc($data->id) ?>"><?= esc($data->patient_code) ?></option>
              <?php endforeach; ?>
              <?php foreach ($referal_data as $data): ?>
                  <option value="<?= esc($data->id) ?>"><?= esc($data->patient_code) ?></option>
                <?php endforeach; ?>
            </select>
    </select>
  </div>
</div>

<div class="invisible" id="pdetails">
      <span class="help-block text-info lead">*Patient&nbsp;Details&nbsp;Autogenerted<em></em>
    </span>
  <div class="form-row">
    <div class="form-group col-md-4">
       <label for="date" class="lead">Date:</label>
       <input type="date" name="date" class="form-control" id="date" value="<?php echo date('Y-m-d');?>" readonly>
   </div>
    <div class="form-group col-md-4">
       <label for="age" class="lead">Patient Name:</label>
       <input type="text" name="patient_name" class="form-control" id="patient_name" readonly>
   </div>
   <div class="form-group col-md-4">
      <label for="age" class="lead">Admission No:</label>
      <input type="text" name="patient_code" class="form-control" id="patient_code" readonly>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="prescription" class="lead">Case History:</label>
      <textarea class="summernote" name="prescription" id="prescription"></textarea>
      <span id="passwordHelpBlock" class="form-text text-muted">
          <!-- <em>Put own words and duration</em> -->
      </span>
    </div>
  </div>

<div class="row">
  <label class="form-group col-md-12 lead"><?php echo ('Prescription Entries'); ?></label>
</div>

  <div id="doc_entries">
    <?php //$prescription_entries = json_decode($patient_prescription->prescription_entries);
	  	  //foreach($prescription_entries as $key => $prescription_entry) : ?>
<div class="form-row">
  <!-- <label class="form-group col-md-12"><?php echo ('prescription_entry'); ?></label> -->
<div class="form-group col-md-3">
  <input name="entry_diagnose[]" type="text" class="form-control" value="<?php //esc($prescription_entries->entry_diagnose)?>" placeholder="<?php echo('Diagnose');?>">
</div>

<div class="form-group col-md-2">
 <input name="entry_medicine_name[]" type="text" class="form-control" placeholder="<?php echo ('Medicine Name');?>">
</div>

<div class="form-group col-md-2">
 <input name="entry_medicine_type[]" type="text" class="form-control" placeholder="<?php echo ('Medicine Type');?>">
</div>

<div class="form-group col-md-2">
 <input name="entry_prescription[]" type="text" class="form-control" placeholder="<?php echo ('Usage Prescription');?>">
</div>

<div class="form-group col-md-2">
 <input name="entry_days[]" type="text" class="form-control" placeholder="<?php echo ('Usage Days');?>">
</div>

<div class="form-group col-md-1">
 <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
</div>

</div>
<?php //endforeach;?>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
<button type="button" class="btn btn-info btn-sm btn-rounded btn-block" onClick="doc_entry()"><i class="fa fa-plus"></i>&nbsp;<?php echo ('Add More Prescription Entries');?></button>
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
    <label for="doctor" class="lead">Prescribing Doctor:</label>
    <input type="text" name="doctor" class="form-control" id="doctor" value="<?= esc(current_user()->name)  ?>" readonly>
 </div>
</div>

  <div  class="form-group">
    <a class="btn btn-link" href="<?= site_url("/admin/prescriptions")?>">&laquo;cancel</a>
    <button type="submit" class="btn btn-info float-right btn-rounded" style="margin-right: 10px;">Submit</button>
  </div>

 </form>
</div>
