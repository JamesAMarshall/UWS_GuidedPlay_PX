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
		<!-- <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css"> -->

		<link rel="stylesheet" type="text/css" href="../css/main.css"/>

    </head>
	<body onload="SetupResearchPage()">
	
	<main>
		<header class="container mt-5">
			<h1>Research Page</h1>

			<nav class="navbar navbar-expand-sm p-0">
			<div class="navbar-collapse collapse">
			<button class="btn btn-primary mr-1" id="button_upload" onclick="UploadResearch();">Upload Data</button>
			<button class="btn btn-primary mr-1" id="button_research" onclick="Database();">View Database</button>
			<button class="btn btn-primary mr-1" id="button_manageResearchers" onclick="ManageResearchers();">Manage Researchers</button>
			<button class="btn btn-primary mr-1" id="button_graph" onclick="Graph();">Graph Data</button>
			</div>

			<div class="nav justify-content-end navbar-collapse collapse">	
				<span class="mr-2">User ID</span>
				<button class="btn btn-secondary" onclick="Logout()">Sign out</button>				
			</div>
		</nav>
		</header>



		

		<section class="container startHidden mt-2" id="uploadDataResearch">
			<h3>Upload</h3>
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
		</section>

		

		<section class="container startHidden mt-4" id="viewDatabase">
			<h3>Database and Export</h3>
			<hr>
		</section>
		
		

		<section class="container startHidden mt-4" >
			<h3>Graph Overview</h3>
			<div class="container" id="chartdiv2"></div>
		</section>

		
		
		<section class="container startHidden my-4" id="manageResearchers">
			<h2>Manage Researchers</h2>
			<p id="output_manageUsers"></p>
			<button onclick="ManageUsers('output_manageUsers')">Get Users</button>
		</section>

	</main>
	</body>

		<!-- JS -->
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/js/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/extensions/export/bootstrap-table-export.min.js"></script>
		<script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
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
		<!-- <script src="../js/tables.js"></script>  -->

</html>