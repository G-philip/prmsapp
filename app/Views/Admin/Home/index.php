<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Home <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main-left" style="margin-left:250px;padding:1px 16px;height:auto; margin-top:70px;">
  <!--div class="container-fluid" style="margin-top: 90px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: 2px solid rgb(37, 150, 190); padding: 20px; background-color: white;">
    <!- <div class="alert"> ->
      <?php if (session()->has('errors')): ?>
                    <ul>
                      <?php foreach(session('errors') as $error):?>
                      <li><?= $error ?></li>
                    <?php endforeach; ?>
                    </ul>
                  <?php endif ?>

                  <?php if (session()->has('warning')): ?>
                  <div class="warning">
                    <?= session('warning') ?>
                  </div>
                  <?php endif ?>
    </div-->

<?php //if(current_user()): ?>

<!-- <p class="text-dark">user is logged in the admin homepage<i class="fa fa-level-down text-"></i></p> -->
<!-- <div class="callout info-callout">Welcome <?php //esc(current_user()->name)  ?></div> -->




<?php //else: ?>
  <!-- <p>You are in the admin homepage</p>
  <p>user is not logged in</p> -->

<?php //endif; ?>
<div class="row">
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-midnight-bloom">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Total Orders</div>
                <div class="widget-subheading">Last year expenses</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span>1896</span></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-arielle-smile">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Clients</div>
                <div class="widget-subheading">Total Clients Profit</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span>$ 568</span></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-grow-early">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                                            <div class="widget-heading">Followers</div>
                <div class="widget-subheading">People Interested</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span>46%</span></div>
            </div>
        </div>
    </div>
</div>

</div>



<?= $this->endSection() ?>
