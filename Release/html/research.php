<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
	<title>Research Site</title>

	<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>

</head>
<body class=""  onload="SetResearchPage()">
	<main>
		<header id="" class="">

			<div class="container mt-3">
				<h1 class="pl-3">Research</h1>
			

				<nav id="" class="navbar navbar-expand-lg">
					<button class="btn btn-std-4 btn-success mr-1" type="button" data-toggle="collapse" data-target="#upload"><i class="fas fa-file-upload"></i> Upload</button>
					<button class="btn btn-std-4 btn-success mr-1" type="button" data-toggle="collapse" data-target="#data_view"><i class="fas fa-database"></i> Data View</button>
					<button id="manageaccount" class="btn btn-std-4 btn-success mr-auto" type="button" data-toggle="collapse" data-target="#accounts_collapse"><i class="fas fa-tasks"></i> Manage Accounts</button>
					
					<a id="username" class="nav-link" href="#">(User)</a>
					<button class="btn btn-std-2 btn-secondary" onclick="Logout()"><i class="fas fa-sign-out-alt"></i> Logout</button>
				</nav>
			</div>
		</header>
		<br/>
		<section id="upload" class="container collapse">
			<div class="d-flex">	
				<h2 class="flex-grow-1">Upload</h2>	
			</div>


			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">Create device</span>
					</div>
					
					<!-- <input id="input_deviceId" type="text" class="form-control" placeholder="Device Id"> -->
					<!-- Set the PHP script to increment to the MAX + 1 -->
					<input id="input_deviceName" type="text" class="form-control" placeholder="Device Name">
					<!-- Device Type -->
					<select id="devicetype-dropdown" class="custom-select" name="devices" onchange="ClearDefaultOption('devicetype-dropdown')">
					</select>	

					<button class="btn btn-primary ml-2 col-auto btn-std-3" type="submit" onclick="AddNewDevice()">Add New</button>
				</div>
				<span id="newdevicename_error" class="invalid-feedback">Please enter the new name</span>
				<span id="newdevicetype_error" class="invalid-feedback">Please select a device type</span>
				<span id="newdevice_message" class=""></span>
			</div>

			
			<div class="form-row">

				<div class="form-group col-5">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">Device</span>
						</div>
						<select id="deviceId-dropdown" class="custom-select" name="devices" onchange="ClearDefaultOption('deviceId-dropdown')">
						</select>			
					</div>
					<span id="deviceId_error" class="invalid-feedback">Please select a device Id</span>
				</div>
				<div class="form-group col">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">File</span>
						</div>
						<div class="custom-file">
							<label id="CSVFilelabel" class="custom-file-label" for="CSVFileInput">Choose file</label>
							<input type="file" class="custom-file-input btn btn-primary " id="CSVFileInput" onchange="UpdateChosenFile('CSVFilelabel','CSVFileInput')">
						</div>
						<button class="btn btn-success ml-2 col-auto btn-std-3" onclick="Upload_SensorData()" type="button">Upload File</button>
					</div>
					<span id="csvnofile_error" class="invalid-feedback">Please select a csv file to upload</span>
					<span id="csv_error" class="invalid-feedback">The file you chose is not a .csv file, please select a csv file</span>
				</div>

			</div>


			<p id="demo"></p>
		</section>
		<br/>
		<section id="data_view" class="container collapse pt-2">

			<div id="sensordata_toolbar">
				<a class="navbar-brand mr-auto">Sensor Data</a>
			</div>
			<table id="sensordata_table"></table>	
			<br/>
			<div id="observation_toolbar">
				<a class="navbar-brand">Observation Data</a>
			</div>
			<table id="observation_table"></table>
		</section>

		<div id="accounts_collapse" class="collapse container">
			<div id="toolbar_research_accounts">
				<!-- <button id="logAll" class="btn btn-primary">Log Selected</button> -->
			</div>

			<table id="research_accounts"></table>	
		</div>

		
	</main>
</body>
		<!-- JS -->
		<!-- Libraries -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/js/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/extensions/export/bootstrap-table-export.min.js"></script>
		<script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script>

		<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>

		<!-- CDN Libraries -->
		<!-- Graph Lib -->
		<!-- <script src="https://www.amcharts.com/lib/4/core.js"></script>
		<script src="https://www.amcharts.com/lib/4/charts.js"></script>
		<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script> -->
		

		<!-- Our Code -->
		<script>page="research";</script>
		<script src="../js/main.js"></script>
</html>
