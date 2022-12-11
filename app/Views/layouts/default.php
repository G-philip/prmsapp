<!DOCTYPE html>
<html>
<head>
  <title><?= esc($this->renderSection("title")) ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <script src="<?= site_url('/bootstrap4/js/jquery-3.6.0.js') ?>"></script>
  <script src="<?= site_url('/bootstrap4/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= site_url('/bootstrap4/summernote/summernote-bs4.min.js') ?>"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="<?= site_url('/bulma/css/bulma.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/dist/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/public_style.css') ?>">
  <link rel="stylesheet" href="<?php //site_url('/bootstrap/css/w3css.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/fontawesome/css/all.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/summernote/summernote-bs4.min.css') ?>">

</head>
<body>

 <?= $this->include('layouts/nav'); ?>

 <?= $this->include('layouts/admin_sidenav'); ?>


</div>

<?= $this->renderSection("content")?>


<script src="<?= site_url('/bootstrap4/js/jquery.validate.js') ?>"></script>
<script src="<?= site_url('/bootstrap4/js/validate.js') ?>"></script>
<script src="<?= site_url('/bootstrap4/js/script.js') ?>"></script>
<script src="<?php //site_url('/bootstrap4/js/jquery-3.6.0.js') ?>"></script>

</body>
</html>
