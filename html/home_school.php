<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="" name="descriptison">
        <meta content="" name="keywords"> 
		
		<title>School Page</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.1.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="../libs/DataTables-1.10.20/css/dataTables.bootstrap4.min.css"/>
        
    </head>
	<body onload="SetupSchoolPage()">
	
		<div class="container">
			<div class="heading">
				<h1>School Page</h1>
				<button class="btn" onclick="Logout()">Sign out</button>
				<p>User ID</p>

				<button class="btn btn-primary" id="button_observation" onclick="Observation();">Submit Observation</button>
				<button class="btn btn-primary" id="button_manageClasses" onclick="ManageClass();">Manage Classes</button>
				<button class="btn btn-primary" id="button_upload" onclick="UploadSchool();">Upload Data</button>
			</div>
		</div>

		
        <div class="container" id="uploadDataSchool">
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


		<div id="submitObservation" class="container">

			<h2>Student Observation</h2>
			<span>Form needs to be redone and fleshed out</span>

			<p></p>



			
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
		

		<div class=" container" id="manageClasses">
		
			<h2>Manage Classes</h2>
			<span>Hiding Table for now while PHP is implemented. Also consideration needs to be made with if jquery search and table manager is needed, does it complicate things</span>		

			<p id="output_manageClasses"></p>
			<button onclick="ManageClasses('output_manageClasses')">Get Classes</button>
		</div>

	</body>

		<!-- JS -->
		<!-- Libraries -->
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../libs/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../libs/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script>
		
		<!-- Our Code -->
		<script src="../js/phpManager.js"></script> 
		<script src="../js/main.js"></script> 
		<script src="../js/tables.js"></script> 

</html>