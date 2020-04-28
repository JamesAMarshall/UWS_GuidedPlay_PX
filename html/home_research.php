<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="" name="descriptison">
		<meta content="" name="keywords">
		
		<title>Research Page</title>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../libs/DataTables-1.10.20/css/dataTables.bootstrap4.min.css"/>	
		


    </head>
    <body onload="SetupResearchPage()">

		<div class="container">
			<div class="heading">
				<h1>Research Page</h1>
				<button class="btn" onclick="Logout()">Sign out</button>
				<p>User ID</p>
				<button class="btn btn-outline-success" id="button_upload" onclick="UploadResearch();">Upload Data</button>
				<button class="btn btn-outline-success" id="button_research" onclick="Database();">View Database</button>
				<button class="btn btn-outline-success" id="button_manageResearchers" onclick="ManageResearchers();">Manage Researchers</button>
				<button class="btn btn-outline-success" id="button_graph" onclick="Graph();">Graph Data</button>
			</div>
		</div>

		<div class="container">
			<button onclick="Table_TempData()">CLICK</button>
			<table onload="Table_TempData()" id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>plotNumber</th>
					<th>temp</th>
				</tr>
			</thead>

			</table>
		</div>


        <div class="container" id="uploadDataResearch">
			<h2 class="">Upload Data</h2>
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


		<div class= "container" id="manageResearchers">
			<h2>Manage Researcher</h2>
			<span>Hiding Table for now while PHP is implemented. Also consideration needs to be made with if jquery search and table manager is needed, does it complicate things</span>		
			
			<p id="output_manageUsers">
			
			</p>

			<button onclick="ManageUsers('output_manageUsers')">Get Users</button>
		</div>


		<div class="container" id="chartdiv2">
		</div>


		<div class= "container" id="viewDatabase">
			<h2>Database Interface</h2>
			<span>Hiding Table for now while PHP and Html interface is implemented. Also consideration needs to be made with if jquery search and table manager is needed, does it complicate things</span>		
			
			<p></p>
		</div>			

	</body>

		<!-- JS -->
		<!-- Libraries -->
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../libs/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../libs/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script>

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