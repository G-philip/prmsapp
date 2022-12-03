<html>
<head>
    <?= $this->section('title') ?>Password reset<?= $this->endSection() ?>
    <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container-fluid" style="margin:10px;">
      <?= $this->section('content') ?>

      <h1>Password reset</h1>

      <p>Password reset successful.</p>

      <p><a href="<?= site_url("/") ?>">Login</a></p>

</div>

</body>
</html>
