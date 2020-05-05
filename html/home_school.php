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
        
    </head>
	<body onload="SetupSchoolPage()">
	
	<main>
		<header class="container mt-5">
			<h1>School Page</h1>

			<nav class="navbar navbar-expand-sm p-0">
			<div class="navbar-collapse collapse">
				<button class="btn btn-primary mr-1" id="button_observation" onclick="Observation();">Submit Observation</button>
				<button class="btn btn-primary mr-1" id="button_manageClasses" onclick="ManageClass();">Manage Classes</button>
				<button class="btn btn-primary mr-1" id="button_upload" onclick="UploadSchool();">Upload Data</button>
			</div>

			<div class="nav justify-content-end navbar-collapse collapse">	
				<span class="mr-2">User ID</span>
				<button class="btn btn-secondary" onclick="Logout()">Sign out</button>				
			</div>
		</nav>
		</header>


		<section class="container startHidden mt-2" id="uploadDataSchool">
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

		

		<section class="container startHidden mt-4" id="submitObservation">
			<div class="d-flex">
				<h2 class="flex-grow-1">Observation</h2>	
				<button class="btn btn-primary-outline btn-sm" type="button" data-toggle="collapse" data-target="#observation_collapse" aria-expanded="false" aria-controls="observation_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>
			<div id="observation_collapse" class="collapse">
				<div>
					<span>Form needs to be redone and fleshed out</span>

					<!-- 
					<form  class="container" action="" method="POST">            
						<p>When did your observation happen?</p>       
						<label for="date">Enter a date:</label>
						<input type="date" id="date" name="date">

						<p><b>On this day...</b></p>

						<p>What was the weather like?</p>
						<input type="radio" id="sunny" name="weather" value="sunny">
						<label for="sunny">Sunny</label><br>
						
						<input type="radio" id="cloudy" name="weather" value="cloudy">
						<label for="cloudy">Cloudy</label><br>
						
						<input type="radio" id="rainy" name="weather" value="rainy">
						<label for="rainy">Rainy</label> 
						
						<p>Did you see any pollinators?</p>
						<input type="radio" id="yes" name="see_pol" value="yes">
						<label for="yes">Yes</label><br>

						<input type="radio" id="no" name="see_pol" value="no">
						<label for="no">No</label><br>


						<p>What pollinators did you see?</p>
						<input type="checkbox" id="birds" name="birds" value="birds">
						<label for="birds"> Birds</label><br>

						<input type="checkbox" id="butterflies" name="butterflies" value="butterflies">
						<label for="butterflies">Butterflies</label><br>

						<input type="checkbox" id="bees" name="bees" value="bees">
						<label for="bees">Bees</label><br>

						<input type="checkbox" id="other" name="other" value="other">
						<label for="other">Other</label><br>

						<p><label for="notes">Enter notes about your observation:</label></p>
						<textarea name="message" rows="10" cols="30"></textarea><br>

						<input type="submit" value="Submit Observation">
					</form>   
					-->
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