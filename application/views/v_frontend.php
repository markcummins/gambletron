<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1><span class="selected-league">Premier League</span> 2014/15 Season Results</h1>
		
	</div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">

		<div class="col-md-7">
			<h3>Table 
				<sup> 
					<span data-id="simple" class="get_table label label-danger">Simple</span>
					<span data-id="advanced" class="get_table label label-primary">Advanced</span>
				</sup>
			</h3>
			<br/>
			<div id="fb-table"></div>
		</div>		
<!--
		<div class="col-md-12">
			<h3>Upcoming</h3>
			<p>Date: <input type="text" id="datepicker"></p>

			<br/><br/>
			<div id="upcoming_fixtures">
				<?php echo $upcoming_fixtures; ?>
			</div>
		</div>
-->

		<div class="col-md-5">
			<h3>Win Average 
				<sup> 
					<span class="get_win_avg label label-danger">All</span>
					<span class="get_win_avg label label-primary">Home</span>
					<span class="get_win_avg label label-primary">Away</span>
				</sup> 
			</h3> 
			
			<div class="clearfix"></div><br/>
			<div id="fb-win_avg_table"></div>
			
		</div>

	</div>
	<br/>
</div>

<div class="jumbotron">
	<div class="container">
		<h1>Upcoming Games &amp; Predictions </h1>
		
	</div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">

		<div class="col-md-4">
			<br/>
			<div id="pred_label_a" class="pred_label"></div>
			<div id="home_team"></div>
		</div>
		<div class="col-md-4">
			<br/>
			<div id="pred_label_b" class="pred_label"></div>
			<canvas id="pred-chart" class="chart"></canvas>
		</div>
		<div class="col-md-4">
			<br/>
			<div id="pred_label_c" class="pred_label"></div>
			<div id="away_team"></div>
		</div>

		<div class="clearfix"></div><br/>
		<div class="col-md-12">
			<br/>			
			<span id="fb-matchday-select"></span>
			<div class="clearfix"></div><br/>
			<div id="fb-fixtures-table"></div>
		</div>
	</div>
</div>