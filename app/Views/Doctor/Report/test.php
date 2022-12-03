<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> History Report <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px;  ">
<div class="report-container">
  <div class="report-controls">
    <div class="controls-left">
      <h5 class="report-button">
        <i class="glyphicon glyphicon-plus" style="margin-left: 10px;"></i>  Patient History
      </h5>
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

            <div class="report-header">
              <h4 class="report-title">Newliferehab </h4>

              <h5 class="report-name">Patient biodata/guardian detail
                <small class="report-period">Active Patients</small>
              </h5>
            </div>
    <div class="report-body">
        <?= form_open("/doctor/report/create")?>
        <?php //$this->include('Doctor/Report/form'); ?>

        <?= $this->include('Doctor/Report/texteditor2'); ?>

        <div  class="send hidden" id="send" style="margin: 20px">
            <a class="btn" href="<?php //site_url("/admin/patients")?>">&laquo;cancel</a>
            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
          </div>
        </form>

    </div>

</div>
</div>
</div>
</div>

<script type="text/javascript">
  $('.passport').change(function(){
    var responseID =$(this).val();
    //alert(responseID);
    $.ajax({
      url:"<?php site_url()?> /doctor/report/data/" + responseID,
      dataType: "JSON",
      success: function(data){
        if(responseID == responseID){
          $('#select').removeClass("show");
          $('#pdetails').removeClass("hidden");
          $('#pdetails').addClass("show");
          $('#send').removeClass("hidden");
          $('#send').addClass("show");

          document.getElementById("name").value = data.name;
          document.getElementById("age").value = data.age;
          document.getElementById("gender").value = data.gender;
          document.getElementById("marital_status").value = data.marital_status;
          document.getElementById("occupation").value = data.occupation;
          document.getElementById("religion").value = data.religion;
          document.getElementById("languages").value = data.languages;
          document.getElementById("informant").value = data.informant;
          document.getElementById("relationship").value = data.relationship;
          document.getElementById("name").style.backgroundColor="white";
          document.getElementById("name").setAttribute('readonly', true);

          document.getElementById("age").style.backgroundColor="white";
          document.getElementById("age").setAttribute('readonly', true);

          document.getElementById("gender").style.backgroundColor="white";
          document.getElementById("gender").setAttribute('readonly', true);

          document.getElementById("marital_status").style.backgroundColor="white";
          document.getElementById("marital_status").setAttribute('readonly', true);

          document.getElementById("occupation").style.backgroundColor="white";
          document.getElementById("occupation").setAttribute('readonly', true);

          document.getElementById("religion").style.backgroundColor="white";
          document.getElementById("religion").setAttribute('readonly', true);

          document.getElementById("languages").style.backgroundColor="white";
          document.getElementById("languages").setAttribute('readonly', true);

          document.getElementById("informant").style.backgroundColor="white";
          document.getElementById("informant").setAttribute('readonly', true);

          document.getElementById("relationship").style.backgroundColor="white";
          document.getElementById("relationship").setAttribute('readonly', true);

          document.getElementById("name").style.backgroundColor="white";
          document.getElementById("name").setAttribute('readonly', true);


          $('#select').addClass("hidden");
        }else{
          $('#pdetails').removeClass("show");
          $('#pdetails').addClass("hidden");
        }
      }
    });
  });

</script>

<!--script type="text/javascript">
function fetchPatientBiodata(){
  var x = document.getElementById('patient') . value;
  //alert(x);
  $.ajax({
    url:"<?php site_url()?> /doctor/report/data/" + x,
    dataType: "JSON",
    success: function(data){
      document.getElementById("name").value = data.name;
      document.getElementById("age").value = data.age;
      document.getElementById("gender").value = data.gender;
      document.getElementById("marital_status").value = data.marital_status;
      document.getElementById("occupation").value = data.occupation;
      document.getElementById("religion").value = data.religion;
      document.getElementById("languages").value = data.languages;
      document.getElementById("informant").value = data.informant;
      document.getElementById("relationship").value = data.relationship;
      document.getElementById("name").style.backgroundColor="white";
      document.getElementById("name").setAttribute('readonly', true);

      document.getElementById("age").style.backgroundColor="white";
      document.getElementById("age").setAttribute('readonly', true);

      document.getElementById("gender").style.backgroundColor="white";
      document.getElementById("gender").setAttribute('readonly', true);

      document.getElementById("marital_status").style.backgroundColor="white";
      document.getElementById("marital_status").setAttribute('readonly', true);

      document.getElementById("occupation").style.backgroundColor="white";
      document.getElementById("occupation").setAttribute('readonly', true);

      document.getElementById("religion").style.backgroundColor="white";
      document.getElementById("religion").setAttribute('readonly', true);

      document.getElementById("languages").style.backgroundColor="white";
      document.getElementById("languages").setAttribute('readonly', true);

      document.getElementById("informant").style.backgroundColor="white";
      document.getElementById("informant").setAttribute('readonly', true);

      document.getElementById("relationship").style.backgroundColor="white";
      document.getElementById("relationship").setAttribute('readonly', true);

      document.getElementById("name").style.backgroundColor="white";
      document.getElementById("name").setAttribute('readonly', true);
    }
  })
}
</script-->




<?= $this->endSection() ?>
