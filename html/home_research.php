<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="" name="descriptison">
		<meta content="" name="keywords">
		
		<title>Research Page</title>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../libs/BootstrapTables/css/bootstrap-table.min.css"/>

    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

		<link rel="stylesheet" type="text/css" href="../css/main.css"/>
		
		<!-- icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
	<body onload="SetupResearchPage()">
	
	<main>
		<header class="container mt-5">
			<h1>Research Page</h1>

			<nav class="navbar navbar-expand-sm p-0">
			<div class="navbar-collapse collapse">
			<button class="btn btn-primary mr-1" id="button_upload" onclick="UploadResearch();"><i class="fas fa-file-upload"></i> Upload Data</button>
			<button class="btn btn-primary mr-1" id="button_research" onclick="Database();"><i class="fas fa-database"></i> View Database</button>
			<button class="btn btn-primary mr-1" id="button_manageResearchers" onclick="ManageResearchers();"><i class="fas fa-tasks"></i> Manage Researchers</button>
			<button class="btn btn-primary mr-1" id="button_graph" onclick="Graph();"><i class="far fa-chart-bar"></i> Graph Data</button>
			</div>

			<div class="nav justify-content-end navbar-collapse collapse">	
				<span class="mr-2">User ID</span>
				<button class="btn btn-secondary" onclick="Logout()">Sign out</button>				
			</div>
		</nav>
		</header>
		

		<section class="container startHidden mt-2" id="uploadDataResearch">
			<div class="d-flex">	
				<h2 class="flex-grow-1">Upload</h2>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#upload_collapse" aria-expanded="false" aria-controls="upload_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>

			<div id="upload_collapse" class="collapse">
				<div class="input-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="CSVFileInput">
						<label class="custom-file-label" for="CSVFileInput">Choose file</label>
					</div>
					<div class="input-group-append">
						<button class="btn btn-outline-secondary"onclick="UploadFile()" type="button">Upload File</button>
					</div>
				</div>
            	<p id="demo"></p>
			</div>
		</section>

		

		<section class="container startHidden mt-4" id="viewDatabase">
			<h3>Database and Export</h3>
			<hr>
			<!-- <div class="row">
				<div class="col-4">
					<div class="container">
						<h4>Interface</h4>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group">
									<span class="input-group-text" id="">Table</span>
								</div>
							</div>
							<select class="form-control" id="exampleFormControlSelect1">
								<option value="" selected hidden>Choose</option>
								<option value="b">School</option>
								<option value="c">LightTemp</option>
								<option value="d">Classes</option>
							</select>
						</div>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group">
									<span class="input-group-text" id="">Table</span>
								</div>
							</div>
							<input type="text" class="form-control" aria-label="Text input with dropdown button">
						</div>
						
						
			


					</div>
				</div>
				<div class="col">
					<div class="container">
						<h4>Table</h4>
					</div>
				</div>
			</div> -->

			<div id="" class="">
				<div id="toolbar_lightTemp">
					<!-- <button id="logAll" class="btn btn-primary">Log Selected</button> -->
				</div>

				<table id="lightTemp"></table>	
			</div>

		</section>
		
		

		<section class="container startHidden mt-4" id="graphOverview">
			<div class="d-flex">	
				<h3 class="flex-grow-1">Graph Overview</h3>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#graph_collapse" aria-expanded="false" aria-controls="graph_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>
			<div id="graph_collapse" class="collapse">
				<div class="container" id="chartdiv2"></div>
			</div>
		</section>

		
		
		<section class="container startHidden my-4" id="manageResearchers">
			<div class="d-flex">	
				<h3 class="flex-grow-1">Manage Researchers</h3>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#accounts_collapse" aria-expanded="false" aria-controls="accounts_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>
			<div id="accounts_collapse" class="collapse">
				<div id="toolbar_research_accounts">
					<!-- <button id="logAll" class="btn btn-primary">Log Selected</button> -->
				</div>

				<table id="research_accounts"></table>	
			</div>




		</section>

	</main>
	</body>

		<!-- JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/js/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/extensions/export/bootstrap-table-export.min.js"></script>
		<script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script>

		<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
   	 	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    	<!-- <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script> -->
		<!-- <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/export/bootstrap-table-export.min.js"></script> -->

		<!-- CDN Libraries -->
		<!-- Graph Lib -->
		<script src="https://www.amcharts.com/lib/4/core.js"></script>
		<script src="https://www.amcharts.com/lib/4/charts.js"></script>
		<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
		
		<!-- Our Code -->
		<script src="../js/graph.js"></script>   
		<script src="../js/phpManager.js"></script>   
		<script src="../js/main.js"></script> 
		<script src="../js/tables.js"></script> 

</html>