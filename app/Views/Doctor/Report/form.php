<div class="form-group col-md-12 d-block" id="select">
    <span class="help-block">*Select Patient To Proceed</span>
    <!--select class="form-control passport " id="passport" name="passport"-->
      <select class=" custom-select patient" name="patient" data-style="btn-primary btn-outline"  id="patient"
              >
        <option value="" selected>------------Select Patient------------</option>
      <!--- Displaying fetched cities in options using foreach loop ---->

            <?php foreach ($data as $result): ?>
                <option value="<?= esc($result['id']) ?>"><?= esc($result['patient_code']) ?></option>
              <?php endforeach; ?>
            </select>
    </select>
  </div>

<div class="d-none" id="pdetails">

  <fieldset>
  	<!-- <legend> -->
      <span class="help-block text-info">Section&nbsp;I:&nbsp;
          *Autogenerted&nbsp;<em><q>fill&nbsp;from&nbsp;section&nbsp;II</q></em>
    </span>
  <!-- </legend> -->
    <!--legend-->

    <!--/legend-->

  <div class="form-row">
    <div class="form-group col-md-7">
       <label for="age">Name:</label>
       <input type="text" name="patient_name" class="form-control" id="name" >
   </div>
   <div class="form-group col-md-5">
      <label for="age">Age:</label>
      <input type="text" name="patient_age" class="form-control" id="age" >
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
       <label for="age">Sex:</label>
       <input type="text" name="patient_gender" class="form-control" id="gender" >
   </div>
   <div class="form-group col-md-4">
      <label for="age">Marital Status:</label>
      <input type="text" name="marital_status" class="form-control" id="marital_status" >
  </div>
  <div class="form-group col-md-4">
     <label for="age">Occupation:</label>
     <input type="text" name="occupation" class="form-control" id="occupation" >
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-5">
     <label for="age">Religion:</label>
     <input type="text" name="religion" class="form-control" id="religion" >
  </div>
  <div class="form-group col-md-7">
    <label for="age">Languages:</label>
    <input type="text" name="languages" class="form-control" id="languages" >
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-8">
     <label for="age">Informant:</label>
     <input type="text" name="informant" class="form-control" id="informant" >
  </div>
  <div class="form-group col-md-4">
    <label for="age">Relatioship:</label>
    <input type="text" name="relationship" class="form-control" id="relationship" >
  </div>
  </div>
</fieldset>

<fieldset>
  <!-- <legend> -->
    <span class="help-block text-info">Section II:
      &nbsp;<em><q>fill&nbsp;all</q></em>
    </span>
  <!-- </legend> -->


  <div class="form-row">
    <div class="form-group col-md-12">
      <label>1. Chief Complains</label>
      <textarea class="summernote" name="cheif_complainant"></textarea>
      <span id="passwordHelpBlock" class="form-text text-muted">
          <em>Put own words and duration</em>
      </span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>2. Allegations</label>
      <textarea class="summernote" name="allegetions"></textarea>
      <span id="passwordHelpBlock" class="form-text text-muted">
          <em>From others who brought him and time</em>
      </span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>3. History of presenting illness</label>
      <textarea class="summernote" name="allegetions"></textarea>
      <span id="passwordHelpBlock" class="form-text text-muted">
          <em>What, when and how it developed.
          Life circumstances at the time, how illness has affected personality and relationships, activities
          and psychophysiological symptoms, copying mechanisms and sleep/appetite, important negatives.</em>
      </span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>4. Risk History</label>
      <textarea class="summernote" name="allegetions"></textarea>
      <small class="form-text text-muted">
        DSH, suicide attempts, self-neglect and by others, thoughts of and actual harm to others
      </small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>5. Past psychiatric and medical history</label>
      <textarea class="summernote" name="allegetions"></textarea>
      <small class="form-text text-muted">
          Previous admissions, treatment, facility type,
          length of stay, effect of treatment, chronic diseases, risk diseases, neurological diseases,
          substance use, OCPs
      </small>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label>6. Family history</label>
      <textarea class="summernote" name="allegetions"></textarea>
      <small class="form-text text-muted">
        from patient and relative, traditions, people at home, their relationships, neighborhood, deaths and
        causes, family tree, family income, each sibling age and occupation, hx of mental disorders
      </small>
    </div>
  </div>
</fieldset>

<fieldset>
  <span class="help-block text-info">Section III:
    &nbsp;<strong>Personal history</strong><em><q>if&nbsp;any</q></em>
  </span>
</br></br>


  <div class="form-row">
    <div class="form-group col-md-4">
       <!--label for="age">Obstetric and birth:</label-->
       <input type="text" name="patient_gender" class="form-control" placeholder="Obstetric and birth..." >
       <small class="form-text text-muted">
         Maternal physical and mental health, unplanned? Substance use? Delivery?
         Bonding? Weight? Congenital anomalies? Neonatal illness?
       </small>
   </div>
   <div class="form-group col-md-4">
      <!--label for="age">Early childhood:</label-->
      <input type="text" name="marital_status" class="form-control" placeholder="Early Childhood..." >
      <small class="form-text text-muted">
        Development of motor/ sensory/ social skills, language? Play? Behavior
        problems? Toilet training? Personality and temperament as a child? School
      </small>
  </div>
  <div class="form-group col-md-4">
     <!--label for="age">pre puberty to adolescence:</label-->
     <input type="text" name="occupation" class="form-control" placeholder="pre-puberty to adolescence" >
     <small class="form-text text-muted">
       Peer relationships, school hx, cognitive and motor development,
       emotional or physical issues, psychosexual history
     </small>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
       <!--label for="age">Adulthood:</label-->
       <input type="text" name="patient_gender" class="form-control" placeholder="Obstetric and birth..." >
       <small class="form-text text-muted">
         Occupation and career, social activity, sexuality and marital hx, value systems and military hx
       </small>
   </div>
   <div class="form-group col-md-4">
      <!--label for="age">forensic history:</label-->
      <input type="text" name="marital_status" class="form-control" placeholder="Early Childhood..." >
      <small class="form-text text-muted">
        Arrests, charges and convictions, nature of offences and outcome,
        including criminal activities where the pt wasn’t arrested
      </small>
  </div>
  <div class="form-group col-md-4">
     <!--label for="age">premobid personality:</label-->
     <input type="text" name="occupation" class="form-control" placeholder="pre-puberty to adolescence" >
     <small id="passwordHelpBlock" class="form-text text-muted">
       Generally describe themselves, character, mood, relationships, leisure, spirituality and coping skills
     </small>
  </div>
  </div>
</fieldset>
  <!--span class="help-block">
    <em>Section IV:&nbsp;<strong>General exermination and vital signs</strong><q>fill&nbsp;all</q></em>
  </span-->


  <!--submit button-->
      <div class="form-row float-center">
        <!--a class="btn" href="<?php //site_url("/admin/patients")?>">&laquo;cancel</a-->
        <button type="submit" class="btn btn-primary" style="width: 200px;">Submit</button>
    </div>
</div>
