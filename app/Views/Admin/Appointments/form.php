<div class="row">
    <div class="form-group col-md-12">
      <label for="assigned_doctor_id" class="col-form-label lead text-secondary">Doctor:</label>
      <select class="form-control custom-select mr-sm-2 assigned_doctor_id shadow-none"  id="doctor_id" name="doctor_id">
        <option value="" selected>---------Select Doctor -------</option>
        <?php $assigned_doctor = $appointment->doctor_id;
            foreach ($doctor as $value ):?>
      <option value="<?php echo $value->id;?>"<?php set_select('assigned_doctor_id', $value->id); ?>
                <?php if($value->id == $assigned_doctor) echo 'selected="selected"';?>>
                  Dr. <?= esc($value->name) ?>
      </option>
      <?php endforeach; ?>
      </select>
    </div>
  </div>



  <div class="row">
      <div class="form-group col-md-12">
  <label for="assigned_doctor_id" class="col-form-label text-secondary">Patient:</label>
    <select class="form-control custom-select mr-sm-2 shadow-none"  id="select_patient" name="patient_id">
      <option  value="" selected disabled>---------Select Patient-------</option>
    </select>
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
        <label for="patient_name" class="col-form-label lead text-secondary">Session Date:</label>
        <input type="date" class="form-control shadow-none" id="schedule_date" name="schedule"
               value="<?= old('schedule', esc($appointment->schedule)) ?>">

  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
    <label for="patient_name" class="col-form-label lead text-secondary">Session Time:</label>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text bg-primary text-white shadow-none border rounded-0">Start Time&nbsp;<i class="fa fa-clock text-dark"></i></span>
  </div>
  <input type="time" name="start_at" class="form-control form-control-sm shadow-none border rounded-0"
         value="<?= old('start_at', esc($appointment->start_at)) ?>">

  <div class="input-group-prepend">
    <span class="input-group-text bg-primary text-white shadow-none border rounded-0">End Time&nbsp;<i class="fa fa-clock text-dark"></i></span>
  </div>
  <input type="time" name="end_at" class="form-control form-control-sm shadow-none border rounded-0"
          value="<?= old('end_at', esc($appointment->end_at)) ?>">
</div>
</div>
</div>
