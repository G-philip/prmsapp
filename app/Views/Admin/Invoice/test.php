<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Test <?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="main">
  <div id="invoiceholder">
    <div id="invoice" class="effect2">

      <div id="invoice-top">
        <div class="logo"><button>Print</button></div>
        <div class="title">
          <h1>Invoice #<span class="invoiceVal invoice_num">tst-inv-23</span></h1>
          <p>Issue Date: <span id="invoice_date">01 Feb 2018</span></br>
             Due Date: <span id="gl_date">23 Feb 2018</span>
          </p>
        </div><!--End Title-->
      </div><!--End InvoiceTop-->




      <div id="invoice-mid">
        <div id="message" class="text-info">
          <h2>Hello Nelius Muthoni Njoroge,</h2>
          <p>An invoice with invoice number #<span id="invoice_num">tst-inv-23</span> has been created for <span id="supplier_name">Patient # NRM-200-22.</span> Please pay to avoid any inconiviences.Thank You!! <i>Misheck Mutembei</i>.</p>
        </div>

          <div class="clearfix">
              <div class="col-left">
                  <div class="clientlogo"><img src="https://cdn3.iconfinder.com/data/icons/daily-sales/512/Sale-card-address-512.png" alt="Sup" /></div>
                  <div class="clientinfo">
                      <h2 id="supplier">NEWLIFE REHAB</h2>
                      <p><span id="address">THOME, 11<small>th</small> SAMPLE ESTATE  </span><br><span id="city">ROASTERS, NAIROBI KENYA</span><br><span id="country">Email</span> - <span id="zip">info@newliferehab.co.ke</span><br><span id="country">Tel</span> - <span id="tax_num">+254-22-64798</span><br></p>
                  </div>
              </div>
              <div class="col-right">
                  <table class="table">
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
                  </table>
              </div>
          </div>
      </div><!--End Invoice Mid-->

      <div id="invoice-bot">

        <div id="table">
          <table class="table-main">
            <thead>
                <tr class="tabletitle">
                  <th>Type</th>
                  <th>Description</th>
                  <th>Initial Amount</th>
                  <th>Discounted Amount</th>
                  <th>Previous Balance</th>
                  <th>Vat Percentage</th>
                  <!-- <th>%</th> -->
                  <th>Tax Amount</th>
                  <!-- <th>Status</th> -->
                  <th>Sub Total</th>
                </tr>
            </thead>
            <tr class="list-item">
              <td data-label="Type" class="tableitem">ITEM</td>
              <td data-label="Description" class="tableitem">Includes accomodation, food, counselling sessions etc</td>
              <td data-label="Quantity" class="tableitem">46.6</td>
              <td data-label="Unit Price" class="tableitem">None</td>
              <td data-label="Taxable Amount" class="tableitem">46.6</td>
              <!-- <td data-label="Tax Code" class="tableitem">DP20</td> -->
              <td data-label="%" class="tableitem">2 %</td>
              <td data-label="Tax Amount" class="tableitem">9.32</td>
              <!-- <td data-label="AWT" class="tableitem">None</td> -->
              <td data-label="Total" class="tableitem">55.92</td>
            </tr>
           <tr class="list-item">
              <td data-label="Type" class="tableitem">ITEM</td>
              <td data-label="Description" class="tableitem">Includes accomodation, food, counselling sessions etc</td>
              <td data-label="Quantity" class="tableitem">4.4</td>
              <td data-label="Unit Price" class="tableitem">None</td>
              <td data-label="Taxable Amount" class="tableitem">46.6</td>
              <!-- <td data-label="Tax Code" class="tableitem">DP20</td> -->
              <td data-label="%" class="tableitem">2 %</td>
              <td data-label="Tax Amount" class="tableitem">9.32</td>
              <!-- <td data-label="AWT" class="tableitem">None</td> -->
              <td data-label="Total" class="tableitem">55.92</td>
            </tr>
              <tr class="list-item total-row">
                  <th colspan="7" class="tableitem">Grand Total</th>
                  <td data-label="Grand Total" class="tableitem">111.84</td>
              </tr>
          </table>
        </div><!--End Table-->
        <!-- <div class="cta-group">
          <a href="javascript:void(0);" class="btn-primary">Approve</a>
          <a href="javascript:void(0);" class="btn-default">Reject</a>
      </div> -->

      </div><!--End InvoiceBot-->
      <footer>
        <div id="legalcopy" class="clearfix">
          <p class="col-right">Report generated on:
              <span class="email"><?php echo  date("l, F d, Y "); ?></span>
          </p>
          <!-- <p class="col-right">Our mailing address is:
              <span class="email"><a href="mailto:supplier.portal@almonature.com">supplier.portal@almonature.com</a></span>
          </p> -->
        </div>
      </footer>
    </div><!--End Invoice-->
  </div><!-- End Invoice Holder-->

  <!-- <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="../../../../index.html" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Home
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Overview</a></li>
            <li><a href="#" class="link-dark rounded">Updates</a></li>
            <li><a href="#" class="link-dark rounded">Reports</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Overview</a></li>
            <li><a href="#" class="link-dark rounded">Weekly</a></li>
            <li><a href="#" class="link-dark rounded">Monthly</a></li>
            <li><a href="#" class="link-dark rounded">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Orders
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">New</a></li>
            <li><a href="#" class="link-dark rounded">Processed</a></li>
            <li><a href="#" class="link-dark rounded">Shipped</a></li>
            <li><a href="#" class="link-dark rounded">Returned</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">New...</a></li>
            <li><a href="#" class="link-dark rounded">Profile</a></li>
            <li><a href="#" class="link-dark rounded">Settings</a></li>
            <li><a href="#" class="link-dark rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div> -->

</div>
<?= $this->endSection() ?>
