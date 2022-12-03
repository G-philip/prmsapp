<!-- <fieldset>
    <legend><span class="help-block text-info">Enter staff details below</legend>
<!-- <span class="help-block text-info"><!-em-><u><strong>Enter staff details below</strong></u><!-/em-></span> -->
<!-- <span class="help-block text-info"><!-em-><u><strong>Enter staff details below</strong></u><!-/em-></span> ->
<div class="row">
  <div class="form-group col-md-6">
        <label class="col-form-label" for="patient_name">Staff Name:</label>
        <input type="text" class="form-control" id="name" name="name" Placeholder="Enter Staff fullname"
               value="<?php //old('name',esc($user->name)) ?>">

    </div>
  </div>

     <div class="form-group col-md-6">
      <label class="col-form-label" for="department">Staff Cadre:</label>
      <select class="form-control" id="department_id" name="department_id">
        <option  value="" selected>------------Select Department------------</option>
      <!--- Displaying fetched Departments in options using foreach loop ->
      <?php //$assigned_department = $user->department_id; ?>
         <?php //foreach ($department as $value): ?>
             <option value="<?php //esc($value->id) ?>"<?php //set_select('department_id', $value->id); ?>
               <?php //if($value->id == $assigned_department) echo 'selected="selected"';?>>
               <?php //esc($value->department_name) ?></option>
           <?php //endforeach; ?>
            </select>
       </div>
     </div>

     <div class="row">
       <div class="form-group col-md-7">
         <label class="col-form-label" for="gender">Gender:</label>
         <select id="gender" name="gender" class="form-control">
           <option value="" selected>------------Select patient gender------------</option>
           <option value="Male"<?php //set_select('gender', 'Male') ?><?php //if(esc($user->gender == 'Male')) echo 'selected="selected "' ;?>>
             <?php //echo ('Male');?></option><i class="fa fa-male"></i>
           <option value="Female"<?php //set_select('gender', 'Female') ?><?php //if(esc($user->gender == 'Female')) echo 'selected="selected"' ;?>>
             <?php //echo ('Female');?></option>
         </select>
         </div>

     <div class="form-group col-md-5">
       <label class="col-form-label" for="guardian_contact">Phone number:</label>
      <input type="text" name="contact_number" class="form-control" placeholder="Enter contact number" id="contact_number"
             value="<?php //old('contact_number', esc($user->contact_number)) ?>">
       </div>
     </div>

     <div class="row">
       <div class="form-group col-md-6">
         <label class="col-form-label" for="agreed_salary">Agreed Salary:</label>
         <input type="int" name="agreed_salary" class="form-control" placeholder="Agreed Salary" id="agreed_salary"
            value="<?php //old('agreed_salary', esc($user->agreed_salary)) ?>">
       </div>
         <div class="form-group col-md-6">
           <label class="col-form-label" for="annual_increment">Salary Increment:</label>
           <input type="int" name="annual_increment" class="form-control"  placeholder="annual increment by percentange" id="date_of_termination"
              value="<?php //old('annual_increment', esc($user->annual_increment)) ?>">

           </div>
     </div>

    <div class="row">
      <div class="form-group col-md-4">
            <label class="col-form-label" for="salary_period_from">Salary Period from:</label>
            <input type="datetime-local" name="salary_period_from" class="form-control"  id="salary_period_from"
               value="<?php //old('salary_period_from', esc($user->salary_period_from)) ?>">
        </div>

     <div class="form-group col-md-4">
           <label class="col-form-label" for="salary_period_to">Salary Period to:</label>
           <input type="datetime-local" name="salary_period_to" class="form-control"  id="salary_period_to"
              value="<?php //old('salary_period_to', esc($user->salary_period_to)) ?>">
       </div>

       <div class="form-group col-md-4">
             <label class="col-form-label" for="id_number">Additional Information:</label>
             <input type="int" name="id_number" class="form-control"  id="id_number" placeholder="Please add ID number"
                value="<?php //old('salary_period_to', esc($staff->salary_period_to)) ?>">
         </div>
     </div>
</fieldset> -->
     <span class="help-block text-info"><!--em--><u><strong>Enter login details below</strong></u><!--/em--></span>

</br></br>
<div class="row">
  <div class="form-group col-md-12">
        <label class="col-form-label" for="patient_name"> Name:</label>
        <input type="text" class="form-control" id="name" name="name" Placeholder="Enter Staff fullname"
               value="<?= old('name',esc($user->name)) ?>">

    </div>
  </div>

     <div class="field">
       <label class="label text-secondary">Email Address:</label>
       <div class="control">
         <p class="control has-icons-left has-icons-right">
         <input type="email" class="input" placeholder="e.g. alexsmith@gmail.com" name="email"
                  value="<?= old('email', esc($user->email)) ?>">
         <span class="icon is-small is-left">
           <i class="fas fa-envelope"></i>
         </span>
       </p>
       </div>
     </div>

     <!-- <div class="field iis-horizontal">
  <div class="field-label is-normal">
    <!-- <label class="label">From</label> ->
  </div>
  <div class="field-body">
    <div class="field">
      <label class="label text-secondary">Password</label>
      <p class="control is-expanded has-icons-left">
        <input class="input" type="password" placeholder="Password">
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <label class="label text-secondary">Confirm password</label>
      <p class="control is-expanded has-icons-left has-icons-right">
        <input class="input iis-success" type="password" placeholder="password_confirmation" >
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
        </p>
    </div>
  </div>
</div> -->

    <div class="row">
     <div class="form-group col-md-6">
           <label class="col-form-label" for="salary_period_from">Passsword:</label>
           <input type="password" class="form-control" name="password" placeholder="*****************************">
           <?php if ($user->id): ?>
           <div id="emailHelp" class="form-text">Leave blank to keep existing password.</div>
         <?php endif ?>
       </div>

       <div class="form-group col-md-6">
             <label class="col-form-label" for="salary_period_from">Confirm Passsword:</label>
             <input type="password" class="form-control" name="password_confirmation" placeholder="*****************************">
         </div>
     </div>

     <div class="form-check">
       <label class="form-check-label" for="is_active">
        <?php if ($user->id == current_user()->id): ?>
            <input type="checkbox" class="form-check-input" checked disabled> Active

        <?php else: ?>

            <input type="hidden" class="form-check-input" name="is_active" value="0">

            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1"
                    <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> Active
        <?php endif; ?>
    </label>
    </div>


     <div class="form-check">
       <label class="form-check-label" for="is_admin">
        <?php if ($user->id == current_user()->id): ?>
            <input type="checkbox" class="form-check-input" checked disabled> Administrator

        <?php else: ?>

            <input type="hidden" class="form-check-input" name="is_admin" value="0">

            <input type="checkbox" class="form-check-input" id="is_admin" name="is_admin" value="1"
                    <?php if (old('is_admin', $user->is_admin)): ?>checked<?php endif; ?>> Administrator
        <?php endif; ?>
    </label>
    </div>

    <div class="form-check">
      <label class="form-check-label" for="is_doctor">
       <?php if ($user->id == current_user()->id): ?>
           <input type="checkbox" class="form-check-input" checked disabled> Doctor

       <?php else: ?>

           <input type="hidden" class="form-check-input" name="is_doctor" value="0">

           <input type="checkbox" class="form-check-input" id="is_doctor" name="is_doctor" value="1"
                   <?php if (old('is_doctor', $user->is_doctor)): ?>checked<?php endif; ?>> Doctor
       <?php endif; ?>
    </label>
    </div>

     <!-- <div>
    <label for="is_admin">
        <input type="checkbox" id="is_admin" name="is_admin" value="1"
                <?php //if (old('is_admin', $user->is_admin)): ?>checked<?php //endif; ?>> administrator
    </label>
</div> -->
