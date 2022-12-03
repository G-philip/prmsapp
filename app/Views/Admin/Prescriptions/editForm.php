<!-- <div class="form-row"> -->
<!-- <div class="form-group col-md-12 d-block" id="select_patient">
    <span class="help-block text-info lead">*Select&nbsp;Patient&nbsp;To&nbsp;Proceed<em></em>
  </span>
    <!--select class="form-control passport " id="passport" name="passport"->
      <select class=" custom-select patientPrescription" name="patient" data-style="btn-primary btn-outline">
        <option value="" selected>------------Select Patient------------</option>
      <!--- Displaying fetched cities in options using foreach loop ->

            <?php //foreach ($data as $result): ?>
                <option value="<?php //esc($result->id) ?>"><?php //esc($result->patient_code) ?></option>
              <?php //endforeach; ?>
              <?php //foreach ($data1 as $result1): ?>
                  <option value="<?php //esc($result1->id) ?>"><?php //esc($result1->patient_code) ?></option>
                <?php //endforeach; ?>
            </select>
    </select>
  </div> -->
<!-- </div> -->

<div class="d-nonee" id="pdetails">
      <span class="help-block text-info lead">*Patient&nbsp;Details&nbsp;Autogenerted<em></em>
    </span>
  <div class="form-row">
    <div class="form-group col-md-4">
       <label for="date">Date:</label>
       <input type="date" name="date" class="form-control" id="date" value="<?php echo date('Y-m-d');?>" readonly>
   </div>
    <div class="form-group col-md-4">
       <label for="age">Patient Name:</label>
       <input type="text" name="patient_name" class="form-control" value="<?= esc($patient_prescription->patient_name)?>" id="patient_name" readonly>
   </div>
   <div class="form-group col-md-4">
      <label for="age">Admission No:</label>
      <input type="text" name="patient_code" class="form-control" id="patient_code" value="<?= esc($patient_prescription->patient_code)?>" readonly>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="prescription">Prescribe Medication</label>
      <textarea class="summernote" name="prescription" id="prescription"><?= esc($patient_prescription->prescription)?></textarea>
      <span id="passwordHelpBlock" class="form-text text-muted">
          <!-- <em>Put own words and duration</em> -->
      </span>
    </div>
  </div>

  <div class="row">
    <label class="form-group col-md-12 lead"><?php echo ('Prescription Entries'); ?></label>
  </div>

    <div id="doc_entries">
      <?php $prescription_entries = json_decode($patient_prescription->prescription_entries);
  	  	  foreach($prescription_entries as $key => $prescription_entry) : ?>
  <div class="form-row">
    <!-- <label class="form-group col-md-12"><?php echo ('prescription_entry'); ?></label> -->
  <div class="form-group col-md-3">
    <input name="entry_diagnose[]" type="text" class="form-control" value="<?= esc($prescription_entry->diagnose);?>">
  </div>

  <div class="form-group col-md-2">
   <input name="entry_medicine_name[]" type="text" class="form-control" value="<?= esc($prescription_entry->medicine_name);?>">
  </div>

  <div class="form-group col-md-2">
   <input name="entry_medicine_type[]" type="text" class="form-control" value="<?= esc($prescription_entry->medicine_type);?>">
  </div>

  <div class="form-group col-md-2">
   <input name="entry_prescription[]" type="text" class="form-control" value="<?= esc($prescription_entry->usage_prescription);?>">
  </div>

  <div class="form-group col-md-2">
   <input name="entry_days[]" type="text" class="form-control" value="<?= esc($prescription_entry->usage_days);?>">
  </div>

  <div class="form-group col-md-1">
   <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
  </div>

  </div>
  <?php endforeach;?>
  </div>


  <div id="two_doc_entries">
    <div class="form-row">
      <!-- <label class="form-group col-md-12"><?php echo ('prescription_entry'); ?></label> -->
    <div class="form-group col-md-3">
      <input name="entry_diagnose[]" type="text" class="form-control" placeholder="<?php echo ('diagnose');?>">
    </div>

    <div class="form-group col-md-2">
     <input name="entry_medicine_name[]" type="text" class="form-control" placeholder="<?php echo ('medicine_name');?>">
    </div>

    <div class="form-group col-md-2">
     <input name="entry_medicine_type[]" type="text" class="form-control" placeholder="<?php echo ('medicine_type');?>">
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
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
  <button type="button" class="btn btn-info btn-sm btn-rounded btn-block" onClick="two_doc_entry()"><i class="fa fa-plus"></i>&nbsp;<?php echo ('Add More Prescription Entries');?></button>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
       <label for="doctor">Prescribing Doctor:</label>
       <input type="text" name="doctor" class="form-control" id="doctor" value="<?= esc($patient_prescription->doctor)  ?>" readonlys>
   </div>
 </div>

</div>
