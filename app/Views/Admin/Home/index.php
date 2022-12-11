<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> Admin | Home <?= $this->endSection() ?>

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
<div class="col-md-3 col-xl-3">
    <div class="card mb-3 widget-content bg-midnight-bloom">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Patients</div>
                <div class="widget-subheading"># Overal Patients</div>
            </div>
            <div class="widget-content-right">
              <?php //foreach ($total_patients as $overal_patients):?>
                <div class="widget-numbers text-white"><span><span><?= esc($total);?></span></div>
                <?php //endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 col-xl-3">
    <div class="card mb-3 widget-content bg-arielle-smile">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
                <div class="widget-heading">Active Patients</div>
                <div class="widget-subheading"># ongoing Patients</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span><?= esc($total_patients);?></span></div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 col-xl-3">
    <div class="card mb-3 widget-content bg-grow-early">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Staff</div>
                <div class="widget-subheading"># Staff Members</div>
            </div>
            <div class="widget-content-right">
                <div class="widget-numbers text-white"><span><?= esc($total_staffs);?></span></div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-3 col-xl-3">
    <div class="card mb-3 widget-content bg-strong-bliss">
        <div class="widget-content-wrapper text-white">
            <div class="widget-content-left">
              <div class="widget-heading">Expenses</div>
                <div class="widget-subheading"><i class="fa-solid fa-sack-dollar fa-lg"></i> Total</div>
            </div>
            <div class="widget-content-right">
              <?php foreach ($total_expenses as $total):?>
                <div class="widget-numbers text-white"><span><?= number_to_currency($total->amount, 'Ksh', 'en_US', 2);?></span></div>
              <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
<div class="col-md-8 col-xl-8">
    <div class="card mb-3 bgg-midnight-bloom">
      <div class="card-body">
        <h5 class="card-title">Expense Analytics</h5>
      <!-- </div> -->
      <!-- AmchartHTML -->
    <div id="chartdiv" style="height:370px;"></div>
</div>
</div>
</div>

<div class="col-md-4 col-xl-4">
  <div class="card mb-3 bgg-midnight-bloom">
    <div class="card-body">
      <h5 class="card-title">Marketing Analytics Survey</h5>
    <!-- </div> -->
    <!-- AmchartHTML -->
  <div id="chartdiv2" sstyle="height:370px;"></div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 col-xl-6">
    <div class="card mb-3 bgg-midnight-bloom">
      <div class="card-body">
        <h5 class="card-title">Recently added patients</h5>
      <!-- </div> -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Date Created</th>
      <th scope="col">Patient Code</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Age</th>
      <th scope="col">Satus</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($recently_added_patient): ?>
    <?php foreach ($recently_added_patient as $recently_added_patient):?>
    <tr>
      <td><?= esc($recently_added_patient->created_at)?></td>
      <td><?= esc($recently_added_patient->patient_code)?></td>
      <td><?= esc($recently_added_patient->patient_name)?></td>
      <td><?= esc($recently_added_patient->age)?></td>
      <td><span class="badge rounded-pill bg-active">Active</span></td>
    </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <td colspan="6" class="text-center font-weight-bold text-secondary">No patient added recently.</td>
  <?php endif ?>
  </tbody>
</table>
</div>
</div>
</div>

<div class="col-md-6 col-xl-6">
  <div class="card mb-3 bgg-midnight-bloom">
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-clipboard"></i> Notice Board</h5>
    <!-- </div> -->
<table class="table">
<thead>
  <tr>
    <th scope="col">Date Created</th>
    <th scope="col">Patient Code</th>
    <th scope="col">Patient Name</th>
    <th scope="col">Age</th>
    <th scope="col">Satus</th>
  </tr>
</thead>
<tbody>
  <?php //if ($recently_added_patient): ?>
  <?php //foreach ($recently_added_patient as $recently_added_patient):?>
  <tr>
    <td><?php //esc($recently_added_patient->created_at)?></td>
    <td><?php //esc($recently_added_patient->patient_code)?></td>
    <td><?php //esc($recently_added_patient->patient_name)?></td>
    <td><?php //esc($recently_added_patient->age)?></td>
    <!-- <td><span class="badge rounded-pill bg-active">Active</span></td> -->
  </tr>
  <?php //endforeach; ?>
<?php //else: ?>
  <!-- <td colspan="6" class="text-center font-weight-bold text-secondary">No patient added recently.</td> -->
<?php //endif ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>



<!-- Chart code -->
<!-- Expense Analytics -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [
  <?php foreach ($totals as  $value): ?>
  {
  "date": "<?= $value->created_at ?>",
  "value": <?= $value->amount ?>
},
<?php endforeach; ?>
];

// Set input format for the dates
chart.dateFormatter.inputDateFormat = "yyyy-MM-dd";

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "value";
series.dataFields.dateX = "date";
series.tooltipText = "{value}"
series.strokeWidth = 2;
series.minBulletDistance = 15;

// Drop-shaped tooltips
series.tooltip.background.cornerRadius = 20;
series.tooltip.background.strokeOpacity = 0;
series.tooltip.pointerOrientation = "vertical";
series.tooltip.label.minWidth = 40;
series.tooltip.label.minHeight = 40;
series.tooltip.label.textAlign = "middle";
series.tooltip.label.textValign = "middle";

// Make bullets grow on hover
var bullet = series.bullets.push(new am4charts.CircleBullet());
bullet.circle.strokeWidth = 2;
bullet.circle.radius = 4;
bullet.circle.fill = am4core.color("#fff");

var bullethover = bullet.states.create("hover");
bullethover.properties.scale = 1.3;

// Make a panning cursor
chart.cursor = new am4charts.XYCursor();
chart.cursor.behavior = "panXY";
chart.cursor.xAxis = dateAxis;
chart.cursor.snapToSeries = series;

// Create vertical scrollbar and place it before the value axis
chart.scrollbarY = new am4core.Scrollbar();
chart.scrollbarY.parent = chart.leftAxesContainer;
chart.scrollbarY.toBack();

// Create a horizontal scrollbar with previe and place it underneath the date axis
chart.scrollbarX = new am4charts.XYChartScrollbar();
chart.scrollbarX.series.push(series);
chart.scrollbarX.parent = chart.bottomAxesContainer;

dateAxis.start = 0.79;
dateAxis.keepSelection = true;


}); // end am4core.ready()
</script>
<!-- End Expense Analytics -->

<!-- Patient Source Analytics -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv2", am4charts.XYChart);

// Add data
var data = [
  <?php foreach ($patient_source_analitics as $source): ?>
  {
    country: "<?= $source-> patient_source ?>",
    research: <?= $source-> total ?>
  },
  <?php endforeach; ?>
];

chart.data = data;
// Create axes
var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 10;
categoryAxis.interpolationDuration = 2000;

var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());

// Create series
function createSeries(field, name) {
  var series = chart.series.push(new am4charts.ColumnSeries());
  series.dataFields.valueX = "research";
  series.dataFields.categoryY = "country";
  series.columns.template.tooltipText = "[bold]{valueX}[/]";
  series.columns.template.cursorOverStyle = am4core.MouseCursorStyle.pointer;

  var hs = series.columns.template.states.create("hover");
  hs.properties.fillOpacity = 0.7;

  var columnTemplate = series.columns.template;
  columnTemplate.maxX = 0;
  columnTemplate.draggable = true;

  columnTemplate.events.on("dragstart", function (ev) {
    var dataItem = ev.target.dataItem;

    var axislabelItem = categoryAxis.dataItemsByCategory.getKey(
      dataItem.categoryY
    )._label;
    axislabelItem.isMeasured = false;
    axislabelItem.minX = axislabelItem.pixelX;
    axislabelItem.maxX = axislabelItem.pixelX;

    axislabelItem.dragStart(ev.target.interactions.downPointers.getIndex(0));
    axislabelItem.dragStart(ev.pointer);
  });
  columnTemplate.events.on("dragstop", function (ev) {
    var dataItem = ev.target.dataItem;
    var axislabelItem = categoryAxis.dataItemsByCategory.getKey(
      dataItem.categoryY
    )._label;
    axislabelItem.dragStop();
    handleDragStop(ev);
  });
}
createSeries("research", "Research");

function handleDragStop(ev) {
  data = [];
  chart.series.each(function (series) {
    if (series instanceof am4charts.ColumnSeries) {
      series.dataItems.values.sort(compare);

      var indexes = {};
      series.dataItems.each(function (seriesItem, index) {
        indexes[seriesItem.categoryY] = index;
      });

      categoryAxis.dataItems.values.sort(function (a, b) {
        var ai = indexes[a.category];
        var bi = indexes[b.category];
        if (ai == bi) {
          return 0;
        } else if (ai < bi) {
          return -1;
        } else {
          return 1;
        }
      });

      var i = 0;
      categoryAxis.dataItems.each(function (dataItem) {
        dataItem._index = i;
        i++;
      });

      categoryAxis.validateDataItems();
      series.validateDataItems();
    }
  });
}

function compare(a, b) {
  if (a.column.pixelY < b.column.pixelY) {
    return 1;
  }
  if (a.column.pixelY > b.column.pixelY) {
    return -1;
  }
  return 0;
}

}); // end am4core.ready()
</script>
<!-- /*end patient source analytics*/ -->



<?= $this->endSection() ?>
