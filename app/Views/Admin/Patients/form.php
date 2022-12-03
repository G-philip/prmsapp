<div class="form-container" style="margin-top: ; padding: 10px;">
          <!-- <div class="form-group">
              <label class="col-form-label" for="exampleInputEmail1">Filename</label>
              <input type="text" class="form-control" id="patient_file" name="patient_file" readonly
                     value="<?php //echo $file ?>">
              <small id="emailHelp" class="form-text text-muted"> Use this to search for patient file.</small>
            </div> -->

                <div class="row">
                  <div class="form-group col">
                        <label class="col-form-label text-secondary" for="patient_name">Patient Name:</label>
                        <input type="text" class="form-control text-secondary" id="patient_name" name="patient_name" Placeholder="Enter patient fullname"
                               value="<?= old('patient_name', esc($patient->patient_name)) ?>">

                    </div>

                     <div class="form-group col">
                      <label class="col-form-label text-secondary" for="patient_code">Patient Code:</label>
                     <input type="text" name="patient_code" class="form-control text-secondary" placeholder="Enter patient registration number" id="patient_code"
                            value="<?= old('patient_code', esc($patient->patient_code)) ?>">
                       </div>
                  </div>

                     <div class="row">
                     <div class="form-group col">
                        <label class="col-form-label text-secondary" for="age">Age:</label>
                        <input type="int" name="age" class="form-control text-secondary" placeholder="How old is the patient" id="age"
                               value="<?= old('age', esc($patient->age)) ?>">
                    </div>

                     <div class="form-group col">
                      <label class="col-form-label text-secondary" for="county">County:</label>
                     <input type="text" name="county" class="form-control text-secondary" placeholder="County of origin" id="county"
                            value="<?= old('county', esc($patient->county)) ?>">
                       </div>

                       <div class="form-group col">
                        <label class="col-form-label text-secondary" for="gender">Gender:</label>
                        <select id="gender" name="gender" class="form-control text-secondary">
                          <option value="" selected>------------Select patient gender------------</option>
                          <option value="Male"<?= set_select('gender', 'Male') ?><?php if(esc($patient->gender == 'Male')) echo 'selected="selected "' ;?>>
                            <?php echo ('Male');?></option><i class="fa fa-male"></i>
                          <option value="Female"<?= set_select('gender', 'Female') ?><?php if(esc($patient->gender == 'Female')) echo 'selected="selected"' ;?>>
                            <?php echo ('Female');?></option>
                        </select>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-md-5">
                   <label class="col-form-label text-secondary" for="gender">Marital Status:</label>
                   <select id="marital_status" name="marital_status" class="form-control text-secondary">
                     <option value="" selected>------------Select patient marital status------------</option>
                     <option value="Single"<?= set_select('marital_status', 'Single') ?><?php if(esc($patient->marital_status == 'Single')) echo 'selected="selected "' ;?>>
                       <?php echo ('Single');?></option><i class="fa fa-male"></i>
                     <option value="Married"<?= set_select('marital_status', 'Married') ?><?php if(esc($patient->marital_status == 'Married')) echo 'selected="selected"' ;?>>
                       <?php echo ('Married');?></option>
                       <option value="Divorced"<?= set_select('marital_status', 'Divorced') ?><?php if(esc($patient->marital_status == 'Divorced')) echo 'selected="selected"' ;?>>
                         <?php echo ('Divorced');?></option>
                   </select>
                 </div>

                 <div class="form-group col-md-7">
                       <label class="col-form-label text-secondary text-secondary" for="occupation">Occupation:</label>
                       <input type="text" name="occupation" class="form-control text-secondary" placeholder="Place of work" id="occupation"
                              value="<?= old('occupation', esc($patient->occupation)) ?>">
                   </div>
                 </div>

                 <div class="row">
                   <div class="form-group col">
                      <label class="col-form-label text-secondary" for="language">Language:</label>
                         <input type="text" name="language" class="form-control text-secondary" placeholder="Languages spoken" id="language"
                                value="<?= old('language', esc($patient->language)) ?>">
                   </div>
                 <div class="form-group col">
                  <label class="col-form-label text-secondary" for="gender">Religion:</label>
                  <select id="religion" name="religion" class="form-control text-secondary">
                    <option value="" selected>------------Select Religion------------</option>
                    <option value="Christian"<?= set_select('religion', 'Christian') ?><?php if(esc($patient->religion == 'Christian')) echo 'selected="selected "' ;?>>
                      <?php echo ('Christian');?></option>
                    <option value="Muslim"<?= set_select('religion', 'Muslim') ?><?php if(esc($patient->religion == 'Muslim')) echo 'selected="selected"' ;?>>
                      <?php echo ('Muslim');?></option>
                  </select>
                </div>
                <div class="form-group col">
                  <label class="col-form-label text-secondary" for="assigned_doctor_id">Assign Doctor</label>
                    <select class="form-control text-secondary" id="assigned_doctor_id" name="assigned_doctor_id">
                      <option value="" selected>---------Select doctor to  assign to Patient-------</option>
                      <?php $assigned_doctor = $patient->assigned_doctor_id;
                          foreach ($doctor as $value ):?>
                    <option value="<?php echo $value->id;?>"<?= set_select('assigned_doctor_id', $value->id); ?>
                              <?php if($value->id == $assigned_doctor) echo 'selected="selected"';?>>
                                Dr. <?= esc($value->name) ?>
                    </option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>


                     <div class="row">
                  <div class="form-group col-md-5">
                        <label class="col-form-label text-secondary" for="guardian_name">Guardian Name:</label>
                        <input type="text" name="guardian_name" class="form-control text-secondary" placeholder="Enter guardian fullname" id="guardian_name"
                               value="<?= old('guardian_name', esc($patient->guardian_name)) ?>">
                    </div>

                     <div class="form-group col-md-7">
                      <label class="col-form-label text-secondary" for="contact_number">Guardian contact number:</label>
                     <input type="telephone" name="contact_number" class="form-control text-secondary" placeholder="Enter guardian contact number" id="contact_number"
                            value="<?= old('contact_number', esc($patient->contact_number)) ?>">
                       </div>
                     </div>

                     <div class="row">
                    <div class="form-group col-md-6">
                       <label class="col-form-label text-secondary" for="relationship">Relationship with patient:</label>
                       <select name="relationship" id="relationship" class="form-control text-secondary">
                         <option value="" selected>Select guardian relationship with patient</option>
                         <option value="Parent"<?= set_select('relationship', 'Parent') ?><?php if(esc($patient->relationship == 'Parent')) echo 'selected="selected "' ;?>>
                           <?php echo ('Parent');?></option><i class="fa fa-male"></i>
                           <option value="Guardian"<?= set_select('relationship', 'Guardian') ?><?php if(esc($patient->relationship == 'Guardian')) echo 'selected="selected "' ;?>>
                             <?php echo ('Guardian');?></option><i class="fa fa-male"></i>
                         <option value="Sibling"<?= set_select('relationship', 'Sibling') ?>
                           <?php if(esc($patient->relationship == 'Sibling')) echo 'selected="selected "' ;?>>
                             <?php echo ('Sibling');?></option><i class="fa fa-male"></i>
                         <option value="Wife"<?= set_select('relationship', 'Wife') ?>
                           <?php if(esc($patient->relationship == 'Wife')) echo 'selected="selected"' ;?>>
                             <?php echo ('Wife');?></option>
                           <option value="Husband"<?= set_select('relationship', 'Husband') ?>
                             <?php if(esc($patient->relationship == 'Husband')) echo 'selected="selected"' ;?>>
                               <?php echo ('Husband');?></option>
                       </select>
                      </div>
                      <div class="form-group col-md-6">
                       <label class="col-form-label text-secondary" for="patient_source">Patient Source:</label>
                       <select id="patient_source" name="patient_source" class="form-control text-secondary" >
                         <option value="" selected>---Select Patient Source---</option>
                         <option value="Internet"<?= set_select('patient_source', 'Internet') ?>
                           <?php if(esc($patient->patient_source == 'Internet')) echo 'selected="selected "' ;?>>
                             <?php echo ('Internet');?></option><i class="fa fa-male"></i>
                         <option value="Referal"<?= set_select('patient_source', 'Referal') ?>
                           <?php if(esc($patient->patient_source == 'Referal')) echo 'selected="selected"' ;?>>
                             <?php echo ('Referal');?></option>
                       </select>
                   </div>
                  </div>

                  <div class="checkbox-card">
                    <small class=" h6 form-text text-muted" style="margin-left:7px;"><b class="text-info">Is the patient commission based? </b></small>

                    <div class="checkbox" style="margin-left:7px;">
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input checkme" id="commission" name="commission_status" value="1"
                            <?php if(old('commission_status', $patient->commission_status)): ?>checked <?php endif; ?>>
                        <label class="form-check-label" for="commission" >Yes</label>
                      </div>
                    </div>

                    <div class="amount_box" id="amount_box">
                      <div class="row">
                      <div class="form-group col-md-5">
                        <label class="col-form-label text-secondary" for="commission_amount">Amount:</label>
                        <input type="int" name="commission_amount" class="form-control text-secondary" placeholder="Enter commision amount" id="commission_amount"
                                  value="<?= old('commission_amount', esc($patient->commission_amount)) ?>">
                    </div>
                    <div class="form-group col-md-7">
                      <label class="col-form-label text-secondary" for="paid_to">Paid To:</label>
                      <input type="text" name="paid_to" class="form-control text-secondary" placeholder="Name of person receiving commssion" id="paid_to"
                              value="<?= old('paid_to',esc($patient->paid_to) ) ?>">
                    </div>

                  </div>
                </div>
              </div>




              </div>
