<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap4/css/bootstrap-grid.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap/css/w3css.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/bootstrap/fontawesome/css/all.css') ?>">
  <script src="<?= site_url('/bootstrap/js/jquery.min.js') ?>"></script>
  <script src="<?= site_url('/bootstrap/js/bootstrap.min.js') ?>"></script>
</head>
<style>
body {margin:25px;}

div.login-container {
  height: 350px;
  width: 350px;
  margin-top: 100px;
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
<div class="login-container">
	<div class="login-header" style=" background-color: ; text-align: center; color: rgb(37, 150, 190);;">
		<h1>NEWLIFEREHAB</h1>
		<h5>LOGIN</h5>
		</div>

    <?= form_open("/login/create")?>
      <div class="form-container" style="margin-top: 40px; padding: 10px;">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="email" name="" class="form-control input_user" value="" placeholder="@mail.com">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
            </div>
            <div class="row ">
              <div class="col-sm-6">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
              </div>
            </div>
              <div class="col-sm-6">
                <a href="#"><i class="fas fa-lock"></i>forgot password?</a>
              </div>
            </div>

              <div class="d-flex justify-content-center mt-3 login_container">
          <button type="button" name="button" class="btn login_btn">Login</button>
           </div>
         </div>
          </form>
  </div>
</div>

</body>
</html>
