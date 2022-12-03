<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Invoice <?= $this->endSection() ?>

<?= $this->section("content") ?>
<div class="main">
  <div class="index_container" style="margin-top: 0px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-top: ; padding-bottom: 0px; background-color: white; border-radius:4px; ">
     <!-- <div class="report-container">
      <div class="report-controls">
        <div class="controls-left">
            <p class="text-info" style="margin: 7px;">PATIENT: <?php //esc($patient->patient_code) ?></p>
          </div>
          <!-- Add new button ->
          <button class="report-button" title="Print Report" name="b_print" onClick="printdiv('div_print');">
            <i class="fas fa-print fa-fw"></i>
          </button>
          <button class="report-button text-info">
            <i class="fas fa-pluss fa-fw"></i><a class="report-button" href="<?php //site_url("/admin/patients")?>" style="text-decoration: none;">&laquo; Back to index</a>
          </button>
        </div>
  </div> -->

  <div id="invoiceholder">
    <div id="invoice" class="effect2">

      <div id="invoice-top">
        <div class="logo"><img src="https://cdn3.iconfinder.com/data/icons/daily-sales/512/Sale-card-address-512.png" alt="Sup" /></div>
        <div class="title">
          <h1>Invoice #<span class="invoiceVal invoice_num">tst-inv-23</span></h1>
          <p>Issue Date: <span id="invoice_date">01 Feb 2018</span></br>
             Due Date: <span id="gl_date">23 Feb 2018</span>
          </p>
        </div><!--End Title-->
      </div><!--End InvoiceTop-->

      <div id="invoice-mid">
        <div id="message" class="text-info">
          <!-- <h2>Hello Nelius Muthoni Njoroge,</h2>
          <p>An invoice with invoice number #<span id="invoice_num">tst-inv-23</span> has been created for <span id="supplier_name">Patient # NRM-200-22.</span> Please pay to avoid any inconiviences.Thank You!! <i>Misheck Mutembei</i>.</p> -->
        </div>

          <div class="clearfix">
              <div class="col-left">
                  <!-- <div class="clientlogo"><img src="https://cdn3.iconfinder.com/data/icons/daily-sales/512/Sale-card-address-512.png" alt="Sup" /></div> -->
                  <div class="clientinfo text-muted">
                    <h2 class="fs-5">Provided By:</h2>
                      <!-- <h2 id="supplier">NEWLIFE REHAB</h2> -->
                      <p class="text-muted"><span>NEWLIFE REHAB</span><br><span id="address">THOME, 11<small>th</small> SAMPLE ESTATE  </span><br><span id="city">ROASTERS, NAIROBI KENYA</span><!--br><span id="country">Email</span> - <span id="zip">info@newliferehab.co.ke</span><br><span id="country">Tel</span> - <span id="tax_num">+254-22-64798</span><br--></p>
                  </div>
              </div>
              <div class="col-right">
                <h2 class="fs-5">Provided To:</h2>
                <h2>philip chege</h2>
                  <!-- <table class="table">
                      <tbody>
                          <tr>
                              <td><span>ISO</span><label id="invoice_total">007-56400</label></td>
                              <td><span>Currency</span><label id="currency">KSH</label></td>
                          </tr>
                          <tr>
                              <td><span>Payment Term</span><label id="payment_term">Monthly</label></td>
                              <td><span>Invoice Type</span><label id="invoice_type">SERVICE INV</label></td>
                          </tr>
                          <tr><td colspan="2"><span>Note</span>#<label id="note">None</label></td></tr>
                      </tbody>
                  </table> -->
              </div>
          </div>
      </div><!--End Invoice Mid-->

      <div id="invoice-bot">

        <div id="table">
          <table class="table table-smm table-main">
            <thead>
                <tr class="tabletitle text-secondary">
                  <th class="text-center">Description</th>
                  <th>Initial Price</th>
                  <th>Agreed Price</th>
                  <th class="text-start">Discount</th>
                  <th>Balance</th>
                  <!-- <th>%</th> -->
                  <th>Tax </th>
                  <!-- <th>Status</th> -->
                  <th>Sub Total</th>
                </tr>
            </thead>
            <tr class="list-item">
              <td data-label="Description" class="tableitem">Accomodation, food, counselling sessions etc (review terms of stay for more).</td>
              <td data-label="Quantity" class="tableitem">50,000</td>
              <td data-label="%" class="text-center tableitemm">30,000</td>
              <td data-label="Unit Price" class="tableitem ">0.02% (20,000)</td>
              <td data-label="Taxable Amount" class="tableitem text-center">10,000</td>
              <td data-label="Tax Amount" class="tableitem">2%</td>
              <!-- <td data-label="AWT" class="tableitem">None</td> -->
              <td data-label="Total" class="tableitem">55.92</td>
            </tr>
           <tr class="list-item">
              <td data-label="Description" class="tableitem">Accomodation, food, counselling sessions etc (review terms of stay for more).</td>
              <td data-label="Quantity" class="tableitem">50,000</td>
              <td data-label="%" class="tableitem text-center">30,000</td>
              <td data-label="Unit Price" class="tableitem text-start">0.02% (20,000)</td>
              <td data-label="Taxable Amount" class="tableitem text-center">None</td>
              <td data-label="Tax Amount" class="tableitem">2%</td>
              <!-- <td data-label="AWT" class="tableitem">None</td> -->
              <td data-label="Total" class="tableitem">55.92</td>
            </tr>
              <tr class="list-item total-row">
                  <th colspan="6" class="tableitem">Grand Total</th>
                  <td data-label="Grand Total" class="tableitem">111.84</td>
              </tr>
          </table>
        </div>

        <!-- <div id="message" class="text-info text-center">

          <p>Dear Guardian, Please pay to avoid any inconiviences.Thank You!! <i class="text-info">Misheck Mutembei, Director Newliferehab</i></p>
        </div> -->


      <footer>
        <div id="legalcopy" class="clearfix">
          <!-- <p class="col-right">Report generated on:
              <span class="email"><?php //echo  date("l, F d, Y "); ?></span>
          </p> -->
          <p class="col-right">Our mailing address is:
              <span class="email"><a href="mailto:supplier.portal@almonature.com">sales.@newliferehab.co.ke</a></span>
          </p>
        </div>
      </footer>
      </div><!--End InvoiceBot-->

    </div>
  </div>

</div>
  </div>
</div>

<script language="javascript">
  function printdiv(printpage){
  var headstr = "<html><head><title></title></head><body>";
  var footstr = "</body>";
  var newstr = document.all.item(printpage).innerHTML;
  var oldstr = document.body.innerHTML;
  document.body.innerHTML = headstr+newstr+footstr;
  window.print();
  document.body.innerHTML = oldstr;
  return false;
}
</script>
<?= $this->endSection() ?>
