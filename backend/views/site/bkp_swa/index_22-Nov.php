<?php
/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
      <!-- Small boxes (Stat box) -->
	  <!-- added by swanand -->
	  <div class="row">        
		<div class="col-lg-5 col-xs-12 user_stat">
			<div class="stat_wrap bg-white pull-left w-100 pb-3">
				<label class="box-title p-3 w-100 mb-0"><i class="fa fa-bell-o font-weight-bold mr-2"></i>Alerts</label>
			
				<div class="clearfix"></div>
				<div class="col-lg-6 ">
					<div class="p-2 alert alert-success small-box">
						<div class="inner">
							<h3 class="stat_cnt font-weight-bold">150</h3>
							<p>Overdue Advice</p>						
						</div>	
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>	
				</div>
				<div class="col-lg-6">
					<div class="p-2 alert alert-danger small-box">
						<div class="inner">
							<h3 class="stat_cnt font-weight-bold">30</h3>
							<p>Followup Overdue</p>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>	
				</div>
			</div>	
		</div>
		<div class="col-lg-7 col-xs-12 user_stat">
			<div class="stat_wrap bg-white pull-left w-100 pb-3">
				<label class="box-title p-3 w-100 mb-0"><i class="fa fa-refresh font-weight-bold mr-2"></i>Farmers</label>
				<div class="clearfix"></div>
				<div class="col-lg-4">
					<div class="p-2 alert alert-info small-box">
						<div class="inner">
							<h3 class="stat_cnt font-weight-bold">400</h3>
							<p>Farmers</p>
						</div>	
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>	
				</div>
				<div class="col-lg-4">
					<div class="p-2 alert alert-success small-box">
						<div class="inner">
							<h3 class="stat_cnt font-weight-bold">50</h3>
							<p>Followup Set</p>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="p-2 alert alert-warning small-box">
						<div class="inner">
							<h3 class="stat_cnt font-weight-bold">200</h3>
							<p>New Requests</p>
						</div>	
						<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>	
		</div>
	   </div>
	   <div class="clearfix">&nbsp;</div>
	   <div class="row">
			<div class="col-lg-12">
				<div class="stat_wrap bg-white pull-left w-100 pb-3 pt-3">
					<div class="col-lg-4">
						<div class="p-2 alert alert-info small-box">
							<div class="inner">
								<h3 class="stat_cnt font-weight-bold">25</h3>
								<p>Plot Crops Without Bahar</p>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>	
					</div>
					<div class="col-lg-4">
						<div class="p-2 alert alert-danger small-box">
							<div class="inner">
								<h3 class="stat_cnt font-weight-bold">100</h3>
								<p>EA Missing Updates</p>
							</div>	
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
					
					<div class="col-lg-4">
						<div class="p-2 alert alert-warning small-box">
							<div class="inner">
								<h3 class="stat_cnt font-weight-bold">80</h3>
								<p>Schedules Missing Updates</p>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
			</div>        
	  </div>
	  <!-- added by swanand -->
	  <div class="clearfix">&nbsp;</div>
	  
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable ui-sortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom" style="cursor: move;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Famer</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="622.75" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.515625" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,261H597.75" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,202H597.75" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,143H597.75" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="84.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,84.00000000000003H597.75" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.515625" y="25.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.000000000000028" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M62.015625,25.00000000000003H597.75" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="499.45608672539487" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="261.20726382138514" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><path fill="#74a5c2" stroke="none" d="M62.015625,219.05493333333334C76.98754556500607,219.56626666666668,106.93138669501822,222.62345,121.90330726002429,221.10026666666667C136.87522782503038,219.57708333333335,166.8190689550425,209.1355825136612,181.79098952004858,206.86946666666668C196.60017181804372,204.6279825136612,226.21853641403402,204.88215,241.02771871202916,203.06986666666666C255.8369010100243,201.25758333333332,285.45526560601456,194.9129178506375,300.26444790400967,192.3712C315.23636846901576,189.80155118397084,345.18020959902793,182.51721666666668,360.152130164034,182.6244C375.1240507290401,182.73158333333333,405.0678918590522,204.18057122040074,420.0398124240583,193.22866666666667C434.8489947220535,182.39580455373408,464.4673593180437,101.94395359116024,479.27654161603886,95.48533333333336C493.92298564702304,89.09768692449359,523.2158737089915,135.1380230769231,537.8623177399757,141.8436C552.8342383049817,148.69818974358975,582.778079434994,147.7554,597.75,149.726L597.75,261L62.015625,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#3c8dbc" d="M62.015625,219.05493333333334C76.98754556500607,219.56626666666668,106.93138669501822,222.62345,121.90330726002429,221.10026666666667C136.87522782503038,219.57708333333335,166.8190689550425,209.1355825136612,181.79098952004858,206.86946666666668C196.60017181804372,204.6279825136612,226.21853641403402,204.88215,241.02771871202916,203.06986666666666C255.8369010100243,201.25758333333332,285.45526560601456,194.9129178506375,300.26444790400967,192.3712C315.23636846901576,189.80155118397084,345.18020959902793,182.51721666666668,360.152130164034,182.6244C375.1240507290401,182.73158333333333,405.0678918590522,204.18057122040074,420.0398124240583,193.22866666666667C434.8489947220535,182.39580455373408,464.4673593180437,101.94395359116024,479.27654161603886,95.48533333333336C493.92298564702304,89.09768692449359,523.2158737089915,135.1380230769231,537.8623177399757,141.8436C552.8342383049817,148.69818974358975,582.778079434994,147.7554,597.75,149.726" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.015625" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="121.90330726002429" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="181.79098952004858" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.02771871202916" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="300.26444790400967" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="360.152130164034" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="420.0398124240583" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="479.27654161603886" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="537.8623177399757" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="597.75" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#eaf3f6" stroke="none" d="M62.015625,240.02746666666667C76.98754556500607,239.8072,106.93138669501822,241.35496666666666,121.90330726002429,239.1464C136.87522782503038,236.93783333333334,166.8190689550425,223.33676429872497,181.79098952004858,222.35893333333334C196.60017181804372,221.39173096539162,226.21853641403402,233.23263333333333,241.02771871202916,231.36626666666666C255.8369010100243,229.4999,285.45526560601456,209.2890577413479,300.26444790400967,207.428C315.23636846901576,205.54649107468123,345.18020959902793,214.43916666666667,360.152130164034,216.39600000000002C375.1240507290401,218.35283333333334,405.0678918590522,232.37947613843355,420.0398124240583,223.08266666666668C434.8489947220535,213.88690947176687,464.4673593180437,148.2268241252302,479.27654161603886,142.42573333333334C493.92298564702304,136.6883907918969,523.2158737089915,170.47037838827842,537.8623177399757,176.92893333333336C552.8342383049817,183.53101172161175,582.778079434994,190.23343333333335,597.75,194.66826666666668L597.75,261L62.015625,261Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#a0d0e0" d="M62.015625,240.02746666666667C76.98754556500607,239.8072,106.93138669501822,241.35496666666666,121.90330726002429,239.1464C136.87522782503038,236.93783333333334,166.8190689550425,223.33676429872497,181.79098952004858,222.35893333333334C196.60017181804372,221.39173096539162,226.21853641403402,233.23263333333333,241.02771871202916,231.36626666666666C255.8369010100243,229.4999,285.45526560601456,209.2890577413479,300.26444790400967,207.428C315.23636846901576,205.54649107468123,345.18020959902793,214.43916666666667,360.152130164034,216.39600000000002C375.1240507290401,218.35283333333334,405.0678918590522,232.37947613843355,420.0398124240583,223.08266666666668C434.8489947220535,213.88690947176687,464.4673593180437,148.2268241252302,479.27654161603886,142.42573333333334C493.92298564702304,136.6883907918969,523.2158737089915,170.47037838827842,537.8623177399757,176.92893333333336C552.8342383049817,183.53101172161175,582.778079434994,190.23343333333335,597.75,194.66826666666668" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="62.015625" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="121.90330726002429" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="181.79098952004858" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="241.02771871202916" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="300.26444790400967" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="360.152130164034" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="420.0398124240583" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="479.27654161603886" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="537.8623177399757" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="597.75" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 18.9922px; top: 154px; display: none;"><div class="morris-hover-row-label">2011 Q1</div><div class="morris-hover-point" style="color: #a0d0e0">
  Item 1:
  2,666
</div><div class="morris-hover-point" style="color: #3c8dbc">
  Item 2:
  2,666
</div></div></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="652.75" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3c8dbc" d="M326.375,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,414.6027551949771,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3c8dbc" stroke="#ffffff" d="M326.375,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,417.43864732624417,181.4248826052307L453.9901459070204,194.03833029452744A135,135,0,0,1,326.375,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f56954" d="M414.6027551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,242.65984627831412,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#f56954" stroke="#ffffff" d="M417.43864732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,239.96900205154566,107.40757544301087L200.80226941747117,88.10097469226493A140,140,0,0,1,458.7166327924656,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#00a65a" d="M242.65984627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,326.34567846904883,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00a65a" stroke="#ffffff" d="M239.96900205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,326.34473599126824,246.3333285794739L326.3325884998742,284.9999933380171A135,135,0,0,1,205.2870097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="326.375" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="326.375" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1,0,0,1,0,0)"><tspan dy="160" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- /.box (chat box) -->

         <!-- /.box -->

          <!-- quick email widget -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable ui-sortable">

          <!-- Map box -->
          <div id="my_map_add" style="width:100%;height:300px;"></div>

              <script type="text/javascript">
              function my_map_add() {
              var myMapCenter = new google.maps.LatLng(18.495120, 73.838410);
              var myMapProp = {center:myMapCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
              var map = new google.maps.Map(document.getElementById("my_map_add"),myMapProp);
              var marker = new google.maps.Marker({position:myMapCenter});
              marker.setMap(map);
              }
              </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrxdJlFE835mJ12cHJGkM59Fzt0hNJoF8&callback=my_map_add"></script>
          <!-- /.box -->

          <!-- /.box -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
