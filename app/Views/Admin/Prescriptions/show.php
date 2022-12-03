<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Prescription <?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px; ">
<div class="report-container">
<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">

<div class="panel-heading"> <?php //echo ("Print Prescription");?>
      <!-- <div class="report-container"> -->
        <div class="report-controls">
          <div class="controls-left">
              <!-- <p class="text-info" style="margin: 7px;">Patient: <?php //esc($patient_prescription->patient_code) ?></p> -->
              <!-- <a href="<?php //cho base_url();?>prescription/list_prescription"
                         class="btn btn-orange btn-xs"><i class="fa fa-mail-reply-all"></i>&nbsp;<?php //echo ('back');?>
              </a> -->
              <!-- <a href="<?php //echo base_url();?>prescription/add_prescription"
                  class="btn btn-orange btn-xs"><i class="fa fa-plus"></i>&nbsp;<?php //echo ('New Prescription');?>
              </a> -->

              					<button class="report-button text-info lead" name="b_print"  onClick="printdiv('div_print');">
                          <i class="fa fa-print"></i>&nbsp;<?php echo ('print');?>
                      </button>
            </div>
            <!-- Add new button -->
            <button class="report-button text-info">
              <i class="fas fa-pluss fa-fw"></i><a class="report-button" href="<?= site_url("/admin/prescriptions")?>" style="text-decoration: none;">&laquo; Back to index</a>
            </button>
          </div>
      </div>
      <div class="report-body">
			<div class="panel-body ttable-responsivee" id="div_print">
    <?php //foreach($select_prescription_by_id as $key => $prescription):?>
        <table class="table" width="1030" border="1">

 <div class="alert alert-default" align="center"><img src="<?php //echo base_url() ?>uploads/logo.png"  class="img-circle" width="80" height="80"/>
</div>
<hr>
<!-- <tr>
<td wwidth="135"><div align="right">Doctor Name</div></td>
<td colspan="2">&nbsp;&nbsp;<?php //echo $this->crud_model->get_type_name_by_id('doctor',$prescription['doctor_id']);?></td>
</tr>


<tr>
  <td><div align="right">Doctor Gender</div></td>
  <td colspan="2">&nbsp;&nbsp;<?php //echo $this->db->get_where('doctor', array('doctor_id' => $prescription['doctor_id']))->row()->gender; ?></td>
</tr>

<tr>
  <td><div align="right">Doctor Phone</div></td>
  <td>&nbsp;&nbsp;<?php //echo $this->db->get_where('doctor', array('doctor_id' => $prescription['doctor_id']))->row()->phone; ?></td>
</tr>

<tr>
	<td><div align="right">Doctor Department</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $this->db->get_where('department', array('department_id' => $prescription['department_id']))->row()->name;?></td>
</tr> -->

<tr>
  <td colspan="3"><div class="alert alert-info">PATIENT FULL DETAILS</div> </td>
</tr>

<tr>
  <td width="135"><div align="right">Patient Name</div></td>
	<td colspan="2">&nbsp;&nbsp;<?= esc($patient_prescription->patient_name) ?></td>
</tr>

<tr>
	<td><div align="right">Patient Sex</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $this->db->get_where('patient', array('patient_id' => $prescription['patient_id']))->row()->sex;?></td>
</tr>

<tr>
	<td><div align="right">Patient Age</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $this->db->get_where('patient', array('patient_id' => $prescription['patient_id']))->row()->age;?></td>
</tr>

<tr>
	<td><div align="right">Occupation</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $this->db->get_where('patient', array('patient_id' => $prescription['patient_id']))->row()->occupation;?></td>
</tr>

<tr>
	<td><div align="right">Prescription ID</div></td>
	<td colspan="2">&nbsp;&nbsp;<strong><?php //echo $prescription['prescription_code'];?></strong></td>
</tr>

<tr>
	<td><div align="right">Prescription Name</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $prescription['name'];?></td>
</tr>

<tr>
	<td><div align="right">Weight</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $prescription['weight'];?></td>
</tr>

<tr>
	<td><div align="right">Height</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $prescription['height'];?></td>
</tr>

<tr>
	<td><div align="right">Blood Presure</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $prescription['blood_pressure'];?></td>
</tr>

<tr>
	<td><div align="right">Prescription Type</div></td>
	<td colspan="2">&nbsp;&nbsp;
    <span class="label label-<?php //if($prescription['prescription_type'] == '1') echo 'success'; else echo 'warning';?>">
    <?php //if($prescription['prescription_type'] == '1'):?>
    <?php //echo 'New Prescription';?>
    <?php //endif;?>
    <?php //if($prescription['prescription_type'] == '2'):?>
    <?php //echo 'Old Prescription';?>
    <?php //endif;?>
    </span>
  </td>
</tr>

<tr>
	<td><div align="right">Visiting Fee</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $prescription['visiting_fee'];?></td>
</tr>

<tr>
	<td><div align="right">Case History</div></td>
	<td colspan="2">&nbsp;&nbsp;<?php //echo $prescription['case_history'];?></td>
</tr>
</table>
<?php //endforeach;?>


<div class="alert alert-info">PRESCRIPTION SHEET</div>
  <table class="table table-bordered" width="100% " border="1" style="border-collapse:collapse;">
			<thead class="text-info">
				<tr>
				  <th>#</th>
				  <th><?php echo ('Diagnosis'); ?></th>
				  <th><?php echo ('Medicine Name'); ?></th>
				  <th><?php echo ('Medicine Type'); ?></th>
					<th><?php echo  ('Prescription'); ?></th>
					<th><?php echo  ('Usage Days'); ?></th>
          <th><?php echo  ('Date Prescribed'); ?></th>
				</tr>
			</thead>
			<tbody>
	  <?php $prescription_entries = json_decode($patient_prescription->prescription_entries);
	 			$i = 1;
	  	  foreach($prescription_entries as $key => $prescription_entry) : ?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?= $prescription_entry->diagnose;?></td>
					<td><?= $prescription_entry->medicine_name;?></td>
					<td><?= $prescription_entry->medicine_type;?></td>
					<td><?= $prescription_entry->usage_prescription;?></td>
					<td><?= $prescription_entry->usage_days;?></td>
          <td><?= $patient_prescription->created_at;?></td>
				</tr>
				  <?php endforeach;?>
			</tbody>
	</table>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
	<script language="javascript">
		function printdiv(printpage){
		var headstr = "<html><head><title></title></head><body>";
		var footstr = "</body>";
		var newstr = document.all.item(printpage).innerHTML;
		var oldstr = document.body.innerHTML;
		document.body.innerHTML = headstr+newstr+footstr;
		window.print();
		document.body.innerHTML = oldstr;
		return false;
	}
	</script>
  <?= $this->endSection() ?>
