<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Edit Staff <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
        <p class="text-info" style="margin: 10px;"><i class="fas fa-plus fa-fw"></i> Edit Staff</p>
    </div>
</div>

  <div class="report-content">

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
    <div class="report-body">

      <?= form_open("/admin/staff/update/{$staff->staff_id}"); ?>

                  <?= $this->include('Admin/Staff/form'); ?>

                    <div  class="my-3">
                      <a class="btn btn-link" href="<?= site_url("/admin/staff")?>">&laquo;cancel</a>
                      <button type="submit" class="btn btn-primary float-end shadow-none">Submit</button>
                    </div>
                    </form>
</div>
</div>
</div>
</div>
</div>

<?= $this->endSection() ?>
