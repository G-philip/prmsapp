<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?= site_url('/bootstrap4/js/jquery-3.6.0.js') ?>"></script>
  <link rel="stylesheet" href="<?= site_url('/bulma/css/bulma.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/bootstrap.min.css') ?>">
  <script src="<?= site_url('/bootstrap4/js/bootstrap.bundle.js') ?>"></script>
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/bootstrap-grid.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/w3css.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/fontawesome/css/all.css') ?>">

</head>
<style>
body {margin:25px;}
div.login-footer{
  margin-top: 60px;
  margin-left: 35%;

}
div.login-footer p{
  margin-left: 50px;

}
div.login-title{
  margin-top: 100px;
  margin-left: 35%;
}
div.login-title h3{
  margin-left: 50px;
}
div.login-container {
  height: auto;
  width: 350px;
  /* margin-top: 100px; */
  margin-left: 35%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  border-top: 2px solid rgb(37, 150, 190);;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
.input-group-text {
      background: rgb(37, 150, 190) !important;
      color: white !important;
      border: 0 !important;
      border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .input_user,
    .input_pass:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
      background-color: rgb(37, 150, 190); !important;
    }
    .login_btn {
      width: 100%;
      background-color: rgb(37, 150, 190);
      color: white !important;
    }
    .login_btn:hover {
      background-color: rgb(37, 150, 190);
      color: black !important;
    }
    .login_btn:focus {
      box-shadow: none !important;
      outline: 0px !important;
    }
    .login_container {
      padding: 0 2rem;
    }
    .input-group-text {
      background: ##c0392b !important;
      color: white !important;
      border: 0 !important;
      border-radius: 0.25rem 0 0 0.25rem !important;
    }
    .form-group a{
      margin-left: 30px;
    }
</style>
<body>

<div class="login-title">
  <h3 class="text-info">NEWLIFE REHAB</h3>
</div>
<div class="login-container">
	<div class="login-header" style=" background-color: ; text-align: center; color: rgb(37, 150, 190);">
    <!-- <h3 class="text-info">NEWLIFE REHAB</h3> -->
		<!-- <h6>NEWLIFE REHAB</h6> -->
		<!-- <h5>LOGIN</h5> -->
		</div>
    <!--div class="alert"-->
      <?php if (session()->has('errors')): ?>
                    <ul>
                      <?php foreach(session('errors') as $error):?>
                      <li><?= $error ?></li>
                    <?php endforeach; ?>
                    </ul>
                  <?php endif ?>
                  <?php if (session()->has('info')): ?>
                  <div class="alert ">
                    <?= session('info') ?>
                  </div>
                  <?php endif ?>

                  <?php if (session()->has('warning')): ?>
                  <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Warning!!</strong> <?php //session('warning') ?>
                  </div> -->
                  <?= session('warning') ?>
                  <?php endif ?>

                  <?php if (session()->has('error')): ?>
                  <div class="alert alert-warning">
                    <?= session('error') ?>
                  </div>
                  <?php endif ?>
    <!--/div-->
    <?php echo form_open('login/create', 'class="form" id="formm"'); ?>

      <div class="form-container" style="margin-top: 20px; padding: 10px;">

              <div class="field">
                <label for="email" class="label text-secondary">Email</label>
                <p class="control has-icons-left has-icons-right">
                  <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com" name="email" id="email"
                          value="<?= old('email') ?>">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                <label for="password" class="label text-secondary">Password</label>
                <p class="control has-icons-left">
                  <input class="input" type="password" placeholder="Password" name="password" id="password">
                  <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                  </span>
                </p>
              </div>
            <div class="row ">
              <div class="col-sm-6">
              <div class="custom-control custom-checkbox text-info">
                <input type="checkbox" class="custom-control-input" id="remember_me" name="remember_me"
                      <?php if (old('remember_me')): ?>checked<?php endif; ?>>
                <label class="custom-control-label" for="remember_me">Remember me</label>
              </div>
            </div>
              <div class="col-sm-6 text-info">
                <a href="<?= site_url('/password/forgot') ?>"><i class="fas fa-lock"></i>&nbsp;Forgot password?</a>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
            <button type="submit" class="btn login_btn">Login</button>
             </div>


         </div>
          </form>
  </div>


<script src="<?= site_url('/bootstrap4/js/jquery-3.6.0.js') ?>"></script>
<script src="<?= site_url('/bootstrap4/js/jquery.validate.js') ?>"></script>
<script src="<?= site_url('/bootstrap4/js/validate.js') ?>"></script>
</body>
</html>
