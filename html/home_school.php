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
				<button class="btn btn-secondary" onclick="Logout()">Sign Out</button>				
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
			<!---->
				<h4>Today's the weather was...</h4>
				<div class="container icon boxes slider">
					<input id="sunny" type="radio" name="weather">
					<label for="sunny">
						<img src="../images/observation/weather/sunny.png">
						<br>
						Sunny
					</label>
					<input id="partCloudy" type="radio" name="weather">
					<label for="partCloudy">
						<img src="../images/observation/weather/partlycloud.png">
						<br>
						Partly cloudy
					</label>
					<input id="cloudy" type="radio" name="weather">
						<label for="cloudy">
						<img src="../images/observation/weather/cloudy.png">
						<br>
						Cloudy
					</label>
					<input id="rainy" type="radio" name="weather" checked>
						<label for="rainy">
						<img src="../images/observation/weather/rainy.png">
						<br>
						Rainy
					</label>
					<input id="stormy" type="radio" name="weather">
						<label for="stormy">
						<img src="../images/observation/weather/stormy.png">
						<br>
						Stormy
					</label>
				</div>

				<div class="container icon boxes slider">
					<input id="hot" type="radio" name="degree">
					<label for="hot">
						<img src="../images/observation/weather/hot.png">
						<br>
						Hot
					</label>
					
					<input id="bitHot" type="radio" name="degree">
					<label for="bitHot">
						<img src="../images/observation/weather/littlehot.png">
						<br>
						A bit hot
					</label>
					<input id="warm" type="radio" name="degree" checked >
					<label for="warm">
						<img src="../images/observation/weather/warm.png">
						<br>
						Warm
					</label>
					<input id="bitCold" type="radio" name="degree">
					<label for="bitCold">
						<img src="../images/observation/weather/littlecold.png">
						<br>
						A bit cold
					</label>
					<input id="cold" type="radio" name="degree">
					<label for="cold">
						<img src="../images/observation/weather/cold.png">
						<br>
						Cold
					</label>
				</div>
				<div class="container icon boxes slider">
					<input id="noWind" type="radio" name="wind">
					<label for="noWind">
					<img src="../images/observation/weather/wind1.png">
					<br>
					No wind
					</label>
					<input id="little" type="radio" name="wind">
					<label for="little">
					<img src="../images/observation/weather/wind2.png">
					<br>
					A little wind
					</label>
					<input id="windy" type="radio" name="wind" checked >
					<label for="windy">
					<img src="../images/observation/weather/wind3.png">
					<br>
					Windy
					</label>
					<input id="veryWindy" type="radio" name="wind">
					<label for="veryWindy">
					<img src="../images/observation/weather/wind4.png">
					<br>
					Very windy
					</label>
					<input id="extreme" type="radio" name="wind">
					<label for="extreme">
					<img src="../images/observation/weather/wind5.png">
					<br>
					Extremely windy
					</label>
				</div>
			<!---->
				<h4>The plants were visited by a:</h4>
				<div class="container icon boxes checkbox">
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/honeybee.png">
						<br>
						Honey Bee
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/nativebee.jpg">
						<br>
						Native Bee
					</label>
					<label>
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/bird.jpg">
						<br>
						Bird
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/wasp.jpg">
						<br>
						Wasp
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/moth.jpg">
						<br>
						Moth
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/butterfly.jpg">
						<br>
						Butterfly
					</label>
					<label>
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/lizard.jpg">
						<br>
						Lizard
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/flyingfox.jpg">
						<br>
						Flying fox
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/fruitbat.jpg">
						<br>
						Fruit bat
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/possum.jpg">
						<br>
						Possum
					</label>
					<label>
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/beetle.jpg">
						<br>
						Beetle
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/species/fly.jpg">
						<br>
						Fly
					</label>					
				</div>
			<!---->
				<h4>Which plants did [Creature 1, Creature 2... repeatable] visit?</h4>
				<div class="container icon boxes checkbox">
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/plant/saladgreen.jpg">
						<br>
						Salad greens
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/plant/roots.jpg">
						<br>
						Root crops
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/plant/herb.jpg">
						<br>
						Herb
					</label>
					<label class="fourCol">
						<input type="checkbox" name="creature" value="honeybee">
						<img src="../images/observation/plant/fruit.jpg">
						<br>
						Fruits
					</label>
				</div>
			<!---->	
				<h4>How big is the harvest from [PLANT 1, PLANT 2... repeatable]?</h4>
				<div class="container icon boxes slider">
					<input id="alwaysSun" type="radio" name="snacks">
					<label for="alwaysSun">
						<img src="../images/observation/weather/sunny.png">
						<br>
						A tiny amount
					</label>
					<input id="mostlySun" type="radio" name="snacks">
					<label for="mostlySun">
						<img src="../images/observation/weather/partlycloud.png">
						<br>
						Like a small snack
					</label>
					<input id="half" type="radio" name="snacks">
						<label for="half">
						<img src="../images/observation/weather/cloudy.png">
						<br>
						Like a big snack
					</label>
					<input id="mostlyShade" type="radio" name="snacks" checked>
						<label for="mostlyShade">
						<img src="../images/observation/weather/rainy.png">
						<br>
						Like a small meal
					</label>
					<input id="alwaysShade" type="radio" name="snacks">
						<label for="alwaysShade">
						<img src="../images/observation/weather/stormy.png">
						<br>
						Like a big meal
					</label>
				</div>
			<!---->
				<h4>Where did [PLANT 1, PLANT 2... repeatable] grow?</h4>
				<div class="container icon boxes slider">
					<input id="alwaysSun" type="radio" name="plants">
					<label for="alwaysSun">
						<img src="../images/observation/weather/sunny.png">
						<br>
						Always in sun
					</label>
					<input id="mostlySun" type="radio" name="plants">
					<label for="mostlySun">
						<img src="../images/observation/weather/partlycloud.png">
						<br>
						Mostly in sun
					</label>
					<input id="half" type="radio" name="plants">
						<label for="half">
						<img src="../images/observation/weather/cloudy.png">
						<br>
						Half sun, half shade
					</label>
					<input id="mostlyShade" type="radio" name="plants" checked>
						<label for="mostlyShade">
						<img src="../images/observation/weather/rainy.png">
						<br>
						Mostly in shade
					</label>
					<input id="alwaysShade" type="radio" name="plants">
						<label for="alwaysShade">
						<img src="../images/observation/weather/stormy.png">
						<br>
						Always in shade
					</label>
				</div>


			<!---->
				<h4>Which 2 plants are the healthiest? [should restrict to 2 choices]</h4>
				<div class="container icon boxes checkbox">
					<label class="fourCol">
						<input type="checkbox" name="plant">
						<img src="../images/observation/plant/saladgreen.jpg">
						<br>
						Salad greens
					</label>
					<label class="fourCol">
						<input type="checkbox" name="plant">
						<img src="../images/observation/plant/roots.jpg">
						<br>
						Root crops
					</label>
					<label class="fourCol">
						<input type="checkbox" name="plant">
						<img src="../images/observation/plant/herb.jpg">
						<br>
						Herbs
					</label>
					<label class="fourCol">
						<input type="checkbox" name="plant">
						<img src="../images/observation/plant/fruit.jpg">
						<br>
						Fruits
					</label>
				</div>
			<!---->
				<h4>What are the 2 main reasons PLANT A is healthy? [SHOULD RESTRICT TO 2 REASONS PER PLANT] </h4>
				<div class="container icon boxes checkbox">
					<label>
						<input type="checkbox" name="plantA">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The amount of sunlight it got
					</label>
					<label>
						<input type="checkbox" name="plantA" >
						<img src="../images/observation/weather/sunny.png">
						<br>
						The wind it got
						
					</label>
					<label>
						<input type="checkbox" name="plantA">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The nutrients in the soil
					</label>
					<label>
						<input type="checkbox" name="plantA">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The time when it got sunlight
					</label>
					<label>
						<input type="checkbox" name="plantA">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The water in the soil
					</label>
				</div>
				<h4>What are the 2 main reasons PLANT B is healthy? [SHOULD RESTRICT TO 2 REASONS PER PLANT] </h4>
				<div class="container icon boxes checkbox">
					<label>
						<input type="checkbox" name="plantB">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The amount of sunlight it got
					</label>
					<label>
						<input type="checkbox" name="plantB" >
						<img src="../images/observation/weather/sunny.png">
						<br>
						The wind it got
						
					</label>
					<label>
						<input type="checkbox" name="plantB">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The nutrients in the soil
					</label>
					<label>
						<input type="checkbox" name="plantB">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The time when it got sunlight
					</label>
					<label>
						<input type="checkbox" name="plantB">
						<img src="../images/observation/weather/sunny.png">
						<br>
						The water in the soil
					</label>
				</div>
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
		
		<script src="../js/tables.js"></script>
		<script src="../js/range_slider.js"></script>
		<script src="../js/main.js"></script> 
</html>