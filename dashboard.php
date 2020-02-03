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
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Total Revenue</span>
                <h2>$ 231,809</h2>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span> 
              </div>
              <div class="col-md-3 col-sm-3  tile">
                <span>Total Sessions</span>
                <h2>231,809</h2>
                <span class="sparkline_one" style="height: 160px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
              </div>
            </div>
          </div>
            <br>
          <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="dashboard_graph x_panel">
                  <div class="x_title">
                    <div class="col-md-6">
                      <h3>Actividad de la Red:<small>Progreso diario, grafica actual:</small></h3>
                    </div>
                    <div class="col-md-6">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>January 4, 2020 - February 2, 2020</span> <b class="caret"></b>
                      </div>
                    </div>
                  </div>
                  <div class="x_content">
                    <div class="demo-container" style="height:250px">
                      <div id="chart_plot_03" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="703" height="251" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 782px; height: 280px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 15px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 110px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 204px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 299px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 393px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 485px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 579px; text-align: center;">12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 674px; text-align: center;">14</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 75px; top: 263px; left: 768px; text-align: center;">16</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 250px; left: 7px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 219px; left: 7px; text-align: right;">5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 188px; left: 1px; text-align: right;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 156px; left: 1px; text-align: right;">15</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 125px; left: 1px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 94px; left: 1px; text-align: right;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 63px; left: 1px; text-align: right;">30</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 31px; left: 1px; text-align: right;">35</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 1px; text-align: right;">40</div></div></div><canvas class="flot-overlay" width="703" height="251" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 782px; height: 280px;"></canvas><div class="legend"><div style="position: absolute; width: 82px; height: 16px; top: 13px; right: 13px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:13px;right:13px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(38,185,154);overflow:hidden"></div></div></td><td class="legendLabel">Actividad Diaria</td></tr></tbody></table></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>App Devices <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <h4>App Versions</h4>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.2</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>123k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.3</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>53k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.4</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>23k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>1.5.5</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>3k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget_summary">
                      <div class="w_left w_25">
                        <span>0.1.5.6</span>
                      </div>
                      <div class="w_center w_55">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="w_right w_20">
                        <span>1k</span>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Daily users <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="" style="width:100%">
                    <tbody><tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 ">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 ">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                        <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                            <canvas class="canvasDoughnut" height="125" width="125" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
                          </td>
                      <td>
                        <table class="tile_info">
                          <tbody><tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Profile Settings <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a></li>
                        <li><i class="fa fa-thumbs-up"></i><a href="#">Favorites</a></li>
                        <li><i class="fa fa-calendar-o"></i><a href="#">Activities</a></li>
                        <li><i class="fa fa-cog"></i><a href="#">Settings</a></li>
                        <li><i class="fa fa-area-chart"></i><a href="#">Logout</a></li>
                      </ul>

                      <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="134" height="71" id="chart_gauge_01" class="" style="width: 150px; height: 80px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value gauge-chart pull-left">3,200</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6  widget_tally_box">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Uptake</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="graph_bar" style="width: 100%; height: 200px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="200" version="1.1" width="214" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.972229px; top: -0.0764151px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël @@VERSION</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="133.849131441125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,133.849131441125H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="106.63684858084375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.449348580843747" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">750</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,106.63684858084375H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="79.4245657205625" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.440190720562498" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">1,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,79.4245657205625H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="52.21228286028125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.446657860281249" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2,250</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,52.21228286028125H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.4453125" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">3,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M55.03125,25H189" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="182.3015625" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-63.7573,145.9923)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Other</tspan></text><text x="168.9046875" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-87.1926,152.7139)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 6S Plus</tspan></text><text x="115.3171875" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-86.037,114.4546)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 5S</tspan></text><text x="88.5234375" y="146.349131441125" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(0.8192,-0.5736,0.5736,0.8192,-94.7023,101.7642)"><tspan dy="4.442881441124996" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">iPhone 3GS</tspan></text><rect x="56.705859375" y="120.06157479191583" width="10.04765625" height="13.787556649209165" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="70.102734375" y="110.08373774314603" width="10.04765625" height="23.765393697978965" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="83.499609375" y="123.87129439235521" width="10.04765625" height="9.977837048769786" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="96.896484375" y="76.8484696097892" width="10.04765625" height="57.00066183133579" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="110.29335937500001" y="110.08373774314603" width="10.04765625" height="23.765393697978965" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="123.690234375" y="55.69545506639726" width="10.04765625" height="78.15367637472774" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="137.08710937499998" y="92.34132931824266" width="10.04765625" height="41.50780212288234" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="150.48398437499998" y="47.82203455882254" width="10.04765625" height="86.02709688230246" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="163.880859375" y="80.47677399116004" width="10.04765625" height="53.37235744996495" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="177.27773437499997" y="84.10507837253087" width="10.04765625" height="49.74405306859413" rx="0" ry="0" fill="#26b99a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>

                    <div class=" bg-white progress_summary">

                      <div class="row">
                        <div class="progress_title">
                          <span class="left">Escudor Wireless 1.0</span>
                          <span class="right">This sis</span>
                          <div class="clearfix"></div>
                        </div>

                        <div class="">
                          <span>SSD</span>
                        </div>
                        <div class="">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89" aria-valuenow="89" style="width: 89%;"></div>
                          </div>
                        </div>
                        <div class=" more_info">
                          <span>89%</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="progress_title">
                          <span class="left">Mobile Access</span>
                          <span class="right">Smart Phone</span>
                          <div class="clearfix"></div>
                        </div>

                        <div class="">
                          <span>App</span>
                        </div>
                        <div class="">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="79" aria-valuenow="79" style="width: 79%;"></div>
                          </div>
                        </div>
                        <div class=" more_info">
                          <span>79%</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="progress_title">
                          <span class="left">WAN access users</span>
                          <span class="right">Total 69%</span>
                          <div class="clearfix"></div>
                        </div>

                        <div class="">
                          <span>Usr</span>
                        </div>
                        <div class="">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="69" aria-valuenow="69" style="width: 69%;"></div>
                          </div>
                        </div>
                        <div class=" more_info">
                          <span>69%</span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- start of weather widget -->
              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Today's Weather <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature"><b>Monday</b>, 07:30 AM
                          <span>F</span>
                          <span><b>C</b>
                                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <span>
                                              <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                          </span>

                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>Texas
                                              <br><i>Partly Cloudy Day</i>
                                          </h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">23</h3>
                      </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mon</h2>
                          <h3 class="degrees">25</h3>
                          <span>
                                                  <canvas id="clear-day" width="32" height="32">
                                                  </canvas>

                                          </span>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Tue</h2>
                          <h3 class="degrees">25</h3>
                          <canvas height="32" width="32" id="rain"></canvas>
                          <h5>12
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Wed</h2>
                          <h3 class="degrees">27</h3>
                          <canvas height="32" width="32" id="snow"></canvas>
                          <h5>14
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Thu</h2>
                          <h3 class="degrees">28</h3>
                          <canvas height="32" width="32" id="sleet"></canvas>
                          <h5>15
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Fri</h2>
                          <h3 class="degrees">28</h3>
                          <canvas height="32" width="32" id="wind"></canvas>
                          <h5>11
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sat</h2>
                          <h3 class="degrees">26</h3>
                          <canvas height="32" width="32" id="cloudy"></canvas>
                          <h5>10
                                              <i>km/h</i>
                                          </h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- end of weather widget -->

              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel fixed_height_320">
                  <div class="x_title">
                    <h2>Incomes <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="dashboard-widget-content">
                      <ul class="quick-list">
                        <li><i class="fa fa-bars"></i><a href="#">Subscription</a></li>
                        <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                        <li><i class="fa fa-support"></i><a href="#">Help Desk</a> </li>
                        <li><i class="fa fa-heart"></i><a href="#">Donations</a> </li>
                      </ul>

                      <div class="sidebar-widget">
                        <h4>Goal</h4>
                        <canvas width="134" height="71" id="chart_gauge_02" class="" style="width: 150px; height: 80px;"></canvas>
                        <div class="goal-wrapper">
                          <span class="gauge-value pull-left">$</span>
                          <span id="gauge-text2" class="gauge-value pull-left">2,400</span>
                          <span id="goal-text2" class="goal-value pull-right">$5,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- /page content -->
<?php include "footer.php" ?>
<script>
    $(function(){
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "action/upload-profile.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
    });
</script>


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
