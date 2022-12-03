<!-- <span class="help-block text-info"><!-em-><u><strong>Enter staff details below</strong></u><!-/em-></span> -->
<div class="row">
  <div class="col">
        <label class="col-form-label" for="patient_name">Staff Name:</label>
        <input type="text" class="form-control" id="name" name="name" Placeholder="Enter Staff fullname"
               value="<?= old('name',esc($staff->name)) ?>">

    </div>

     <div class="col">
      <label class="col-form-label" for="department">Staff Cadre:</label>
      <select class="form-control" id="department_id" name="department_id">
        <option  value="" selected>------------Select Department------------</option>
      <!--- Displaying fetched Departments in options using foreach loop ---->
      <?php $assigned_department = $staff->department_id; ?>
         <?php foreach ($department as $value): ?>
             <option value="<?= esc($value->id) ?>"<?= set_select('department_id', $value->id); ?>
               <?php if($value->id == $assigned_department) echo 'selected="selected"';?>>
               <?= esc($value->department_name) ?></option>
           <?php endforeach; ?>
            </select>
       </div>
     </div>

     <div class="row">
       <div class="col-md-7">
         <label class="col-form-label" for="gender">Gender:</label>
         <select id="gender" name="gender" class="form-control">
           <option value="" selected>------------Select patient gender------------</option>
           <option value="Male"<?= set_select('gender', 'Male') ?><?php if(esc($staff->gender == 'Male')) echo 'selected="selected "' ;?>>
             <?php echo ('Male');?></option><i class="fa fa-male"></i>
           <option value="Female"<?= set_select('gender', 'Female') ?><?php if(esc($staff->gender == 'Female')) echo 'selected="selected"' ;?>>
             <?php echo ('Female');?></option>
         </select>
         </div>

     <div class="col-md-5">
       <label class="col-form-label" for="guardian_contact">Phone number:</label>
      <input type="text" name="contact_number" class="form-control" placeholder="Enter contact number" id="contact_number"
             value="<?= old('contact_number', esc($staff->contact_number)) ?>">
     </div>
     </div>

     <div class="row">
       <div class="col-md-6">
         <label class="col-form-label" for="agreed_salary">Agreed Salary:</label>
         <input type="int" name="agreed_salary" class="form-control" placeholder="Agreed Salary" id="agreed_salary"
            value="<?= old('agreed_salary', esc($staff->agreed_salary)) ?>">
         </div>
         <div class="col-md-6">
           <label class="col-form-label" for="annual_increment">Salary Increment:</label>
           <input type="number" name="annual_increment" class="form-control"  placeholder="annual increment by percentange" id="date_of_termination"
              value="<?= old('annual_increment', esc($staff->annual_increment)) ?>">

           </div>
     </div>

    <div class="row">
      <div class="col">
            <label class="col-form-label" for="salary_period_from">Salary Period from:</label>
            <input type="datetime-local" name="salary_period_from" class="form-control"  id="salary_period_from"
               value="<?= old('salary_period_from', esc($staff->salary_period_from)) ?>">
        </div>

     <div class="col">
           <label class="col-form-label" for="salary_period_to">Salary Period to:</label>
           <input type="datetime-local" name="salary_period_to" class="form-control"  id="salary_period_to"
              value="<?= old('salary_period_to', esc($staff->salary_period_to)) ?>" >
       </div>

       <div class="col">
             <label class="col-form-label" for="id_number">Additional Information:</label>
             <input type="int" name="id_number" class="form-control"  id="id_number" placeholder="Please add ID number"
                value="<?php //old('salary_period_to', esc($staff->salary_period_to)) ?>">
         </div>
     </div>
