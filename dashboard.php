<?php 
    $title ="Dashboard - "; 
    include "head.php";
    include "sidebar.php";

    $TicketData=mysqli_query($con, "select * from ticket where status_id=1");
    $ProjectData=mysqli_query($con, "select * from project");
    $CategoryData=mysqli_query($con, "select * from category");
    $UserData=mysqli_query($con, "select * from user order by created_at desc");
?>
<!-- top tiles -->
    <div class="right_col" role="main" style="min-height: 1315.99px;">          
       <div class="row" style="display: inline-block;">
            <div class=" top_tiles" style="margin: 10px 0;">
              <div class="col-md-3 col-sm-3  tile">
                <span>Sesiones Iniciadas:</span>
                <h3>2 sesiones</h3>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Total Usuarios en Sistema:</span>
                <h3>5 Usuarios</h3>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Casos Atendidos Por Departamento de Soporte:</span>
                <span>Mes Enero 2020:</span>
                <h3>Solucionados:81,97%</h3>
                <h3>Seguimiento:18,03%</h3>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span> 
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Estadisticas por site:</span>
                <h3>Solucionados: 74% </h3>
                <h3>Seguimiento: 15% </h3>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
              </div>
            </div>
          </div>
            <br>
            <!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 300px;
}
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.hiddenState.properties.opacity = 0; // this creates initial fade-in

chart.data = [
  {
    country: "Laura Villanueva",
    visits: 67
  },
  {
    country: "Angelin Lugo",
    visits: 87
  },
  {
    country: "Bryn Suarez",
    visits: 58
  },
  {
    country: "Freddy Gandica",
    visits: 4
  },
  {
    country: "conexion",
    visits: 87
  },
  {
    country: "Velocidad",
    visits: 37
  },
  {
    country: "Router",
    visits: 11
  },
  {
    country: "Bloqueo",
    visits: 0
  },
  {
    country: "Site Caido",
    visits: 58
  },
  {
    country: "Mudanza",
    visits: 3
  },
  {
    country: "Por visita",
    visits: 21
  },
  ];

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "country";
categoryAxis.renderer.minGridDistance = 40;
categoryAxis.fontSize = 11;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.max = 100;
valueAxis.strictMinMax = true;
valueAxis.renderer.minGridDistance = 30;
// axis break
var axisBreak = valueAxis.axisBreaks.create();
axisBreak.startValue = 2100;
axisBreak.endValue = 22900;
//axisBreak.breakSize = 0.005;

// fixed axis break
var d = (axisBreak.endValue - axisBreak.startValue) / (valueAxis.max - valueAxis.min);
axisBreak.breakSize = 0.05 * (1 - d) / d; // 0.05 means that the break will take 5% of the total value axis height

// make break expand on hover
var hoverState = axisBreak.states.create("hover");
hoverState.properties.breakSize = 1;
hoverState.properties.opacity = 0.1;
hoverState.transitionDuration = 1500;

axisBreak.defaultState.transitionDuration = 1000;
/*
// this is exactly the same, but with events
axisBreak.events.on("over", function() {
  axisBreak.animate(
    [{ property: "breakSize", to: 1 }, { property: "opacity", to: 0.1 }],
    1500,
    am4core.ease.sinOut
  );
});
axisBreak.events.on("out", function() {
  axisBreak.animate(
    [{ property: "breakSize", to: 0.005 }, { property: "opacity", to: 1 }],
    1000,
    am4core.ease.quadOut
  );
});*/

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "country";
series.dataFields.valueY = "visits";
series.columns.template.tooltipText = "{valueY.value}";
series.columns.template.tooltipY = 0;
series.columns.template.strokeOpacity = 0;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
series.columns.template.adapter.add("fill", function(fill, target) {
  return chart.colors.getIndex(target.dataItem.index);
});

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
            <div class="row">
              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Tipo de problemas en casos:clientes:</h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <li class="dropdown">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>
                      </li>
                     </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h2>Tipo de Problemas:</h2>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <h2><span>Conexión:</span></h2>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            <span class="sr-only">87% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>87%</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <h2><span>Velocidad:</span></h2>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>37%</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                      <h2><span>Router:</span></h2>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="sr-only">11% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>11%</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <h2><span>Mudanza:</span></h2>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>3%</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                      <h2><span>Bloqueo:</span></h2>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>0%</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Operadores con casos solucionados:</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="" style="width:100%">
                    <tbody><tr>
                      <th style="width:37%;">
                        <p>Top 4</p>
                      </th>
                      <th>
                      
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                          <p class="">Operadores:</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 ">
                          <p class="">Solucionados:</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                     <td><iframe class="chartjs-hidden-iframe" style="width: 90%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                            <canvas class="canvasDoughnut" height="125" width="125" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
                          </td>
                      <td>
                        <table class="tile_info">
                          <tbody><tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>Laura Villanueva:</p>
                            </td>
                            <td>64</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Angelin Lugo</p>
                            </td>
                            <td>87</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Bryn Suarez</p>
                            </td>
                            <td>58</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Freddy Gandica </p>
                            </td>
                            <td>4</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Otros </p>
                            </td>
                            <td>0</td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6  widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Estadisticas por casos atendidos</h2><span>Mes de Enero:</span>
                   <ul class="nav navbar-right panel_toolbox">
                     </li>
                      </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="graph_bar" style="width: 100%; height: 200px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="200" version="1.1" width="214" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.972229px; top: -0.0764151px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created por Jose Rivas</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="133.849131441125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,133.849131441125H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="106.63684858084375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.449348580843747" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,106.63684858084375H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="79.4245657205625" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.440190720562498" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">10</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,79.4245657205625H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="52.21228286028125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.446657860281249" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,52.21228286028125H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">60</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,25H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="182.3015625" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-63.7573,145.9923)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Totales: 217</tspan></text><text x="168.9046875" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-87.1926,152.7139)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Operadores: 5 </tspan></text><text x="115.3171875" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-86.037,114.4546)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Seguimiento: 4</tspan></text><text x="88.5234375" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-94.7023,101.7642)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Solucionado: 213</tspan></text><rect x="56.705859375" y="120.06157479191583" width="10.04765625" height="13.787556649209165" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="70.102734375" y="110.08373774314603" width="10.04765625" height="23.765393697978965" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="83.499609375" y="123.87129439235521" width="10.04765625" height="9.977837048769786" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="96.896484375" y="76.8484696097892" width="10.04765625" height="57.00066183133579" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="110.29335937500001" y="110.08373774314603" width="10.04765625" height="23.765393697978965" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="123.690234375" y="55.69545506639726" width="10.04765625" height="78.15367637472774" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="137.08710937499998" y="92.34132931824266" width="10.04765625" height="41.50780212288234" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="150.48398437499998" y="47.82203455882254" width="10.04765625" height="86.02709688230246" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="163.880859375" y="80.47677399116004" width="10.04765625" height="53.37235744996495" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="177.27773437499997" y="84.10507837253087" width="10.04765625" height="49.74405306859413" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>

                    <div class=" bg-white progress_summary">

<script src="js/push.min.js"></script>
   <?php
            echo '</script>

<script>
          Push.create("Tienes casos recibidos por resolver", {
            body: "Resuelvalos a la mayor  brevedad posible",
            icon: "images/cpk.jpg",
            timeout: 5000,
            onClick: function () {

                 window.location="https://github.com/jrivas2989/proyecto_tg";
                 this.close();
            }
          
       });
          </script>'
?>
