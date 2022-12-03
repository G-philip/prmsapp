<div class="form-container" style="margin-top: ; padding: 5px;">

          <!-- <div class="form-group">
              <label for="exampleInputEmail1">Filename</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly style="background: gray; color: white;"
                     value="FILE <?php //generateRandomString();?>">
              <small id="emailHelp" class="form-text text-muted"> Use this to search for patient file.</small>
            </div> -->

                <div class="row">
                  <div class="form-group col-md-12">
                        <label class="col-form-label text-secondary" for="patient_code">OP/IP NO:</label>
                        <input type="text" class="form-control text-secondary" id="patient_code" name="patient_code" Placeholder="Enter Out-patient / In-patient number"
                               value="<?= old('patient_code', esc($referal_patient->patient_code)) ?>">

                    </div>
                  </div>

                     <div class="row">
                     <div class="form-group col">
                        <label class="col-form-label text-secondary" for="patient_name">Patient Name:</label>
                        <input type="text" name="patient_name" class="form-control text-secondary" placeholder="Enter patient fullname" id="patient_name"
                               value="<?= old('patient_name', esc($referal_patient->patient_name)) ?>">
                    </div>

                     <div class="form-group col">
                      <label class="col-form-label text-secondary" for="age">Age:</label>
                     <input type="int" name="age" class="form-control text-secondary" placeholder="How old is the patient" id="age"
                            value="<?= old('age', esc($referal_patient->age)) ?>">
                       </div>

                       <div class="form-group col">
                        <label class="col-form-label text-secondary" for="gender">Gender:</label>
                        <select id="gender" name="gender" class="form-control text-secondary">
                          <option value="" selected>------------Select patient gender------------</option>
                          <option value="Male"<?= set_select('gender', 'Male') ?><?php if(esc($referal_patient->gender == 'Male')) echo 'selected="selected "' ;?>>
                            <?php echo ('Male');?></option><i class="fa fa-male"></i>
                          <option value="Female"<?= set_select('gender', 'Female') ?><?php if(esc($referal_patient->gender == 'Female')) echo 'selected="selected"' ;?>>
                            <?php echo ('Female');?></option>
                        </select>
                    </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-md-5">
                   <label class="col-form-label text-secondary" for="diagnosis">Diagnosis:</label>
                   <input type="text" name="diagnosis" class="form-control text-secondary" placeholder="Enter patient diagnosis" id="diagnosis"
                          value="<?= old('diagnosis', esc($referal_patient->diagnosis)) ?>">
                 </div>

                 <div class="form-group col-md-7">
                       <label class="col-form-label text-secondary" for="refering_consultant">Refering consultant:</label>
                       <input type="text" name="refering_consultant" class="form-control text-secondary" placeholder="Name of refering consultant" id="refering_consultant"
                              value="<?= old('refering_consultant', esc($referal_patient->refering_consultant)) ?>">
                   </div>
                 </div>

                 <div class="row">
                   <div class="form-group col-md-12">
                      <label class="col-form-label text-secondary" for="language">Vital Signs:</label>
                    </div>
                  </div>
                 <div class="form-floating row">
                   <div class="form-group col">
                         <input type="text" name="BP" class="form-control text-secondary" placeholder="Blood Pressure" id="BP"
                                value="<?= old('BP', esc($referal_patient->BP)) ?>">
                   </div>
                 <div class="form-group col">
                  <input type="text" name="RR" class="form-control text-secondary" placeholder="Respiratory Rate" id="RR"
                         value="<?= old('RR', esc($referal_patient->RR)) ?>">
                </div>
                <div class="form-group col">
                 <input type="text" name="TEMP" class="form-control text-secondary" placeholder="Temperature" id="TEMP"
                        value="<?= old('TEMP', esc($referal_patient->TEMP)) ?>">
               </div>

               <div class="form-group col">
                <input type="text" name="RBS" class="form-control text-secondary" placeholder="RBS" id="RBS"
                       value="<?= old('RBS', esc($referal_patient->RBS)) ?>">
              </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label text-secondary" for="patient_history">Brief History:</label>
                    <textarea class="summernote text-secondary" name="patient_history" id="patient_history"><?= old('patient_history', esc($referal_patient->patient_history)) ?></textarea>
                    <span id="passwordHelpBlock" class="form-text text-muted">
                        <em>Patient's previous medical history.</em>
                    </span>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label class="col-form-label text-secondary" for="physical_exermination_findings">Physical Exerminations Findings:</label>
                    <textarea class="summernote text-secondary" name="physical_exermination_findings" id="physical_exermination_findings"><?= old('physical_exermination_findings', esc($referal_patient->physical_exermination_findings)) ?></textarea>
                  </div>
                </div>

                     <div class="row">
                  <div class="form-group col-md-5">
                        <label class="col-form-label text-secondary" for="investigations_done">Investigations Done:</label>
                        <input type="text" name="investigations_done" class="form-control text-secondary" placeholder="Enter Investigations Conducted" id="investigations_done"
                               value="<?= old('investigations_done', esc($referal_patient->investigations_done)) ?>">
                    </div>

                     <div class="form-group col-md-7">
                      <label class="col-form-label text-secondary" for="treatment_given">Treatment Given:</label>
                     <input type="text" name="treatment_given" class="form-control text-secondary" placeholder="Enter treatment given" id="treatment_given"
                            value="<?= old('treatment_given', esc($referal_patient->treatment_given)) ?>">
                       </div>
                     </div>

                     <div class="row">
                    <div class="form-group col-md-6">
                       <label class="col-form-label text-secondary" class="text-infoo" for="referal_reason">Reason For Referal:</label>
                       <input type="text" name="referal_reason" class="form-control text-secondary" placeholder="Enter referal reason" id="referal_reason"
                              value="<?= old('referal_reason', esc($referal_patient->referal_reason)) ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label class="col-form-label text-secondary" for="assigned_doctor_id">Reffered To:</label>
                          <select class="form-control text-secondary" id="assigned_doctor_id" name="assigned_doctor_id">
                            <option value="" selected>---------Select doctor to  assign to Patient-------</option>
                            <?php $assigned_doctor = $referal_patient->assigned_doctor_id;
                                foreach ($doctor as $value ):?>
                          <option value="<?=  $value->id;?>"<?= set_select('assigned_doctor_id', $value->id); ?>
                                    <?php if($value->id == $assigned_doctor) echo 'selected="selected"';?>>
                                      Dr. <?= esc($value->name) ?>
                          </option>
                          <?php endforeach; ?>
                          </select>
                        </div>
                   </div>
                  </div>

              </div>
