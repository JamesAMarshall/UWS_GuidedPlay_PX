<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="" name="descriptison">
        <meta content="" name="keywords"> 
		
		<title>School Page</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../libs/BootstrapTables/css/bootstrap-table.min.css"/>

    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

		<link rel="stylesheet" type="text/css" href="../css/main.css"/>
		<link rel="stylesheet" type="text/css" href="../css/observation.css"/>
		<!-- icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
	<body onload="SetupSchoolPage()">
	
	<main>
		<header class="container mt-5">
			<h1>School Page</h1>

			<nav class="navbar navbar-expand-sm p-0">
			<div class="navbar-collapse collapse">
				<button class="btn btn-primary mr-1" id="button_observation" onclick="Observation();"><i class="fa fa-tasks" aria-hidden="true"></i> Submit Observation</button>
				<button class="btn btn-primary mr-1" id="button_manageClasses" onclick="ManageClass();"><i class="fas fa-users"></i> Manage Classes</button>
				<button class="btn btn-primary mr-1" id="button_upload" onclick="UploadSchool();"><i class="fas fa-file-upload"></i> Upload Data</button>
			</div>

			<div class="nav justify-content-end navbar-collapse collapse">	
				<span class="mr-2">User ID</span>
				<button class="btn btn-secondary" onclick="Logout()">Sign out</button>				
			</div>
		</nav>
		</header>


		<section class="container startHidden mt-2 collapse" id="uploadDataSchool">
			<!-- <div class="d-flex">	
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
			</div> -->
		</section>

		

		<section class="container startHidden mt-4" id="submitObservation">
			<div class="d-flex">
				<h2 class="flex-grow-1">Observation</h2>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#observation_collapse" aria-expanded="false" aria-controls="observation_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>
			<div id="observation_collapse" class="collapse">
				<h4>1. How was the weather today?</h4>
				<div class="slider">
					<input id="sunny" type="radio" name="weather">
					<label for="sunny">
						<img src="../images/observation/weather/sunny.png">
						<br>
						Bright and sunny
					</label>
					<input id="partCloudy" type="radio" name="weather">
					<label for="partCloudy">
						<img src="../images/observation/weather/partlycloud.png">
						<br>
						Party cloudy
					</label>
					<input id="cloudy" type="radio" name="weather">
						<label for="cloudy">
						<img src="../images/observation/weather/cloudy.png">
						<br>
						Cloudy
					</label>
					<input id="vcloudy" type="radio" name="weather" checked>
						<label for="vcloudy">
						<img src="../images/observation/weather/rainy.png">
						<br>
						Rainy
					</label>
					<input id="fullovercast" type="radio" name="weather">
						<label for="fullovercast">
						<img src="../images/observation/weather/stormy.png">
						<br>
						Stormy
					</label>
				</div>
				<div class="slider">
					<input id="vhot" type="radio" name="degree">
					<label for="vhot">Very hot</label>
					<input id="somewhat hot" type="radio" name="degree">
					<label for="somewhat hot">Somewhat hot</label>
					<input id="warm" type="radio" name="degree" checked >
					<label for="warm">Warm</label>
					<input id="cool" type="radio" name="degree">
					<label for="cool">Cool</label>
					<input id="cold" type="radio" name="degree">
					<label for="cold">Cold</label>
				</div>
				<div class="slider">
					<input id="nowind" type="radio" name="wind">
					<label for="nowind">No wind</label>
					<input id="breeze" type="radio" name="wind">
					<label for="breeze">Slight breeze</label>
					<input id="moderate" type="radio" name="wind" checked >
					<label for="moderate">Moderate wind</label>
					<input id="slight windy" type="radio" name="wind">
					<label for="slight windy">Slight windy</label>
					<input id="very windy" type="radio" name="wind">
					<label for="very windy">Very windy</label>
				</div>
			</div>

		</section>

		

		<section class="container startHidden mt-4" id="manageClasses">

			<div class="d-flex">
				<h2 class="flex-grow-1">Manage Classes</h2>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#classes_collapse" aria-expanded="false" aria-controls="classes_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>

			<div id="classes_collapse" class="collapse">
				<div>
					<div class="d-flex align-items-end flex-column">
						<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#students_collapse" aria-expanded="false" aria-controls="students_collapse">
							<i class="fa fa-chevron-down"></i>
						</button>
					</div>
					<div id="students_collapse" class="collapse" >
							<div id="toolbar_students">
								<h2>Students</h2>
								<!-- <button id="" class="btn btn-primary">Log Selected</button> -->
							</div>

							<table id="students"></table>
					</div>
				</div>

				<div>
					<div id="toolbar_classes">
						<button id="" class="btn btn-primary">Create New Class</button>
					</div>

					<table id="classes"></table>
				</div>
			</div>
		</section>

		

		<section class="container startHidden my-4" id="manageSchool">
			<div class="d-flex">
				<h2 class="flex-grow-1">Manage School</h2>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#accounts_collapse" aria-expanded="false" aria-controls="accounts_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>
			<div id="accounts_collapse" class="collapse">
				<div id="toolbar_school_accounts">
					<h2>Accounts</h2>
					<!-- <button id="logAll" class="btn btn-primary">Log Selected</button> -->
				</div>

				<table id="school_accounts"></table>	
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
		<!-- <script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script> -->
		
		<!-- Our Code -->
		<script src="../js/phpManager.js"></script> 
		<script src="../js/main.js"></script> 
		<script src="../js/tables.js"></script> 

</html>