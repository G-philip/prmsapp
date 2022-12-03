<html>
<head>
    <!-- <title>Succes</title> -->
    <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container-fluid" style="margin:10px;">
<h1>Account activation</h1>

<p>Please click on the link below to activate your account:</p>

<p><a href="<?= site_url("/account/activation/$token") ?>">Activate account</a></p>

</div>

</body>
</html>
