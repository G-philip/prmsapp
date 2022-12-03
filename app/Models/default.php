<!DOCTYPE html>
<html>
<head>
  <title><?= $this->renderSection("title") ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= site_url('/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= site_url('/bootstrap/css/public_style.css') ?>">
<link rel="stylesheet" href="<?= site_url('/bootstrap/css/w3css.css') ?>">
<link rel="stylesheet" href="<?= site_url('/bootstrap/fontawesome/css/all.css') ?>">
<script src="<?= site_url('/bootstrap/js/jquery.min.js') ?>"></script>
<script src="<?= site_url('/bootstrap/js/bootstrap.min.js') ?>"></script>
<style>
body{
  background-color: whitesmoke;
}
</style>
</head>
<body>

<div class="topnavbar">
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;&nbsp;DatabaseName</a>
    </div>
    <ul class="nav navbar-nav">
      <!--li class="active"><a href="#">Home</a></li-->
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="activee"><a href="#" style="color: blue;"><?php //echo 'System Date/Time: '.date("Y-m-d | h:i:sa").'<br>'; ?>
      </a></li>
        <!--li><a href=""  id="welcome-greeting"></a></li>
        <li><a href=""  class="greetingss"></a></li>`
        <li><a href=""  class="time"></a></li-->

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Admin
        <span class="caret"></a>
        <ul class="dropdown-menu">
          <div class="dropdown-menu-header" style="outline: none; border-bottom: ; text-decoration-style: none; background-color:rgb(192,192,192); padding: 8px 0 50px 16px; margin-bottom: 20px;">
          <h5 style="text-align: center;">Philip Chege</h5>
        </div>
        <li><a class="" href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
</div>

  <div class="sidebar">
  <div class="sidebar-header">
    <li><a class="Sidebar-brand" href="#">WebSiteName</a></li>
  </div>
  <div class="sidebar_menu">
  <li><a href="#home"><i class="fa fa-fw fa-home"></i> Home</a></li>

  <li class="accordion"><i class="fas fa-folder-open"></i> Human Resource</li>
  <div class="accordion-content">
      <li>
        <a href="<?= site_url("admin/department") ?>">
          <i class="fas fa-sitemap" style="margin-left: 20px;"></i>&nbsp;&nbsp;Manage Department
        </a>
      </li>
      <li>
        <a href="<?= site_url("admin/staff") ?>">
          <i class="fas fa-users" style="margin-left: 20px;"></i>&nbsp;&nbsp;Manage Users
        </a>
      </li>
    <!--li>
      <a href="<?php //site_url("admin/patients/new") ?>"><i class="fa fa-bed" style="margin-left: 20px;">
      </i>&nbsp;&nbsp;Manage Patients
    </a>
  </li-->
  </div>

    <li class="accordion">
    <i class="fas fa-folder-open"></i>&nbsp;Manage&nbsp;Patients</li>
  <div class="accordion-content">
      <li>
      <a href="<?= site_url("admin/patients") ?>"><i class="fa fa-bed" style="margin-left: 20px;">
      </i>&nbsp;&nbsp;Active Patients
    </a>
  </li>
      <li>
        <a href="<?php //site_url("admin/expense/") ?>" >
          <i class="fa fa-be" style="margin-left: 20px;"></i>&nbsp;&nbsp;Discharged Patients
        </a>
      </li>
      <!--li>
        <a href="<?php //site_url("admin/expense/report") ?>">
          <i class="fa fa-book" style="margin-left: 20px;"></i>&nbsp;&nbsp;Expense Report
        </a>
      </li-->

  </div>

<li class="accordion">
    <i class="fas fa-folder-open"></i>
    <!--img src="https://i.ibb.co/jfScDTC/budget.png" alt="" style="width: 25px; height: 20px;"--> Manage&nbsp;Expenses</li>
  <div class="accordion-content">
      <li>
        <a href="<?php site_url("admin/expense/categories") ?>">
          <i class="glyphicon glyphicon-th-list" style="margin-left: 20px;"></i>&nbsp;&nbsp;Manage Category
        </a>
      </li>
      <!--li>
        <a href="<?php //site_url("admin/expense/") ?>" >
          <i class="fa fa-calculator" style="margin-left: 20px;"></i>&nbsp;&nbsp; Expenses
        </a>
      </li-->
      <li>
        <a href="<?= site_url("admin/expense/") ?>">
          <i class="fa fa-book text-dangerr" style="margin-left: 20px;"></i>&nbsp;&nbsp;Expense Report
        </a>
      </li>
    </div>


  <!--li>
    <a href="#clients"><i class="fa fa-fw fa-user"></i> Clients
    </a>
  </li>
  <li>
    <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact
    </a>
  </li-->
</div>
</div>

<?= $this->renderSection("content")?>



</body>
<script src="<?= site_url('/bootstrap/js/script.js') ?>"></script>
</html>
