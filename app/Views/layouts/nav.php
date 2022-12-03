<div class="topnavbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-0">
  <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
    <a class="navbar-brand" href="#">Hospital Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <div class="collapse navbar-collapse justify-content-start" id="navbarScroll">
      here
    </div> -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarScroll">
      <ul class="navbar-nav ms-auto mmy-2 mmy-lg-0 navbar-nav-scroll" style="margin-right:250px;">
        <div class="field has-addons">
          <div class="control control has-icons-left">
              <input class="input is-inverted" type="text" placeholder="Find a repository">
              <span class="icon is-small is-left">
                <i class="fas fa-search"></i>
              </span>
            </div>
            <div class="control">
              <a class="button is-info">
                Search
              </a>
            </div>
          </div>
      </ul>
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-fw fa-male"></i>Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end p-0 shadow-lg mb-5 border border-none" aria-labelledby="navbarScrollingDropdown" style="min-width: 290px; hheight: 370px;">
            <div class="pp-4 mb-5 text-center" style="background-color: #f1f6fb; padding:20px;">
              <p class="pb-1 fs-3">Profile</p>
              <div class="position-relative">
                <div class="position-absolute top-50 start-50 translate-middle mmt-4" style="margin-top:25px;">
                  <img src="<?= site_url("images/blank-profile-picture.png")?>" class="rounded-circle" alt="..." width="60%" height="60%"
                       style="border: 3px solid white;">
                </div>
            </div>
            </div>
            <div class="pp-4 mb-3 text-center">
              <dd>
                <dt class="text-dark fs-6">
                  <small class="fw-normal"><?= esc(current_user()->name) ?></small>
                </dt>
                <dt class="text-dark ">
                  <small class="fw-normal fs-7"><?= esc(current_user()->email) ?></small>
                </dt>
              </dd>
            </div>
            <div class="pb-4 mmb-5 text-center">
              <ul class="profile">
                <small><a href="<?= site_url("/profile/show") ?>" class="rounded-circle bbg-secondary p-2 text-secondary border img-profile"><i class="fa fa-fw fa-pen"></i></a></small>
               <small><a class="rounded-circle bbg-secondary p-2 text-secondary border img-profile"><i class="fa fa-fw fa-key"></i></a></small>
               <small><a class="rounded-circle bbg-secondary p-2 text-secondary border img-profile"><i class="fa fa-fw fa-cog"></i></a></small>

             </ul>
            </div>
            <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
            <p class="text-info ps-3">Please remember to Logout</p>
            <li><hr class="dropdown-divider mtt-5"></li>
            <!-- <p class="text-info ps-3">Please remember to Logout</p> -->
            <li class=""><a class="dropdown-item text-danger" href="<?= site_url("logout")?>"><i class="fa fa-fw fa-sign-out"></i>Sign out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
