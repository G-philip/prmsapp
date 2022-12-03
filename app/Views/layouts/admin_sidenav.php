<div class="sidebar">
<div class="sidebar-header">
  <li><a class="Sidebar-brand" href="#">Hospital Name</a></li>
</div>
<div class="sidebar_menu">
<li><a href="#home"><i class="fa fa-fw fa-home"></i> Home</a></li>

<li class="accordion"> <!--<i class="fas fa-users"><span class="badge badge-light">9</span></i>--><img src="https://i.ibb.co/jfScDTC/budget.png" alt="" style="width: 25px; height: 20px;"> Human Resource</li>
<div class="accordion-content">
    <li>
      <a href="<?= site_url("admin/department") ?>">
        <i class="fas fa-sitemap" style="margin-left: 20px;"></i>&nbsp;&nbsp;Manage Department
      </a>
    </li>
    <li>
      <a href="<?= site_url("admin/staff") ?>">
        <i class="fas fa-user-plus" style="margin-left: 20px;"></i>&nbsp;&nbsp;Manage Staff
      </a>
    </li>
  <li>
    <a href="<?= site_url("admin/users") ?>"><i class="fa fa-bed" style="margin-left: 20px;">
    </i>&nbsp;&nbsp;Manage Users
  </a>
</li>
<li>
  <a href="<?= site_url("admin/expense/categories") ?>">
    <i class="fa fa-plus" style="margin-left: 20px;"></i>&nbsp;&nbsp;Expense Category
  </a>
</li>
</div>

  <li class="accordion">
  <i class="fas fa-folder-open"></i>&nbsp;Manage&nbsp;Patients
</li>
<div class="accordion-content">
    <li>
    <a href="<?= site_url("admin/patients") ?>"><i class="fa fa-bed" style="margin-left: 20px;">
    </i>&nbsp;&nbsp;Active Patients
  </a>
</li>
    <!-- <li>
      <a href="<?php //site_url("admin/expense/") ?>" >
        <i class="fa fa-be" style="margin-left: 20px;"></i>&nbsp;&nbsp;Discharged Patients
      </a>
    </li> -->
    <li>
      <a href="<?= site_url("admin/referal/") ?>">
        <i class="fa fa-book" style="margin-left: 20px;"></i>&nbsp;Referal&nbsp;Patients
      </a>
    </li>

</div>

<li class="accordion">
  <i class="fas fa-calculator"></i>
  <!--img src="https://i.ibb.co/jfScDTC/budget.png" alt="" style="width: 25px; height: 20px;"--> Manage&nbsp;Expenses
</li>
<div class="accordion-content">
    <li>
      <a href="<?= site_url("admin/expense/") ?>">
        <i class="fa fa-book text-dangerr" style="margin-left: 20px;"></i>&nbsp;&nbsp;Expense Report
      </a>
    </li>
  </div>

  <li class="accordion">
  <i class="fa fa-file-text " style="font-size:1.5rem"></i>&nbsp;Manage&nbsp;Patient&nbsp;Reports
</li>
<div class="accordion-content">
  <li>
    <a href="<?= site_url("admin/prescriptions") ?>"><i class="fa fa-medkit" style="margin-left: 20px;">
    </i>&nbsp;Manage&nbsp;Prescriptions
    </a>
 </li>
  <li>
    <a href="<?= site_url("doctor/report/new") ?>"><i class="fa fa-bedd" style="margin-left: 20px;">
    </i>&nbsp;Histoy&nbsp;Report
    </a>
 </li>

 <li>
   <a href="<?= site_url("doctor/report/new") ?>"><i class="fas fa-paper-plane" style="margin-left: 20px;">
   </i>&nbsp;Take&nbsp;Notes
   </a>
</li>
</div>
<li><a href="<?= site_url("admin/appointment") ?>"><img src="<?= site_url("images/appointment.png")?>" alt="" style="width: 35px; height: 35px;"> Manage Appointments</a></li>
<li><a href="<?= site_url("admin/invoice") ?>"><i class="fas fa-file-invoice" style="font-size:1.5rem"></i> Manage Invoice</a></li>

</div>
</div>
