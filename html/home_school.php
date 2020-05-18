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
	<body onload="SetupSchoolPage(), hideAllQuestions()">
	
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
				<button onclick="startForm()"
					class="btn btn-primary-outline btn-sm" 
					type="button" 
					data-toggle="collapse" 
					data-target="#observation_collapse" 
					aria-expanded="false" 
					aria-controls="observation_collapse">
					<i class="fa fa-chevron-down"></i>
				</button>
			</div>

			<div id="observation_collapse" class="collapse">
			<!--BEGINNING OF OBSERVATION FORM-->
			<!--PROGRESS BAR-->
					<h3>Progress: </h3>
					<div class="progress">

                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> 
					<br>
			<!--QUESTION 1 -->
			<fieldset>
				<div id="q1">
					<h4>Today, the weather was...</h4>
					<div class="container icon">
						<div class=" boxes slider">
							<input id="sunny" type="radio" name="weather">
							<label for="sunny">
								<img src="../images/observation/weather/sunny.png">
								<br>
								Sunny
							</label>
							<input id="partlyCloudy" type="radio" name="weather">
							<label for="partlyCloudy">
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
					</div>					
					<br>
					<div class="container icon">
						<div class=" boxes slider">
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
					</div>
					<br>
					<div class="container icon">
						<div class="boxes slider">
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
					</div>
					<br>
					<div class="progressButtons" >
						<button type="button" name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q1','q2')">Next</button>
					</div>
				</div>
			</fieldset>
			<!--QUESTION 2 -->
			<fieldset>
				<div id="q2">
					<h4>Did any creatures visit the plants today?</h4>
					<div class="container icon radioButton thumbs">
					
						<label class="space" for ="yesvisit">
							<input id="yesvisit" type="radio" name="visit">
							<img src="../images/observation/thumbUp.jpg">
							<br>
							Yes
						</label>
						<label class="space" for ="novisit">
							<input id="novisit" type="radio" name="visit" onclick="skipQuestion('q2','q5')">
							<img src="../images/observation/thumbDown.jpg">
							<br>
							Not today
					</div>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button" name="previous" class="previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q2','q1')">Back</button>
						</div>
						<div class="col-md-6">
							<button type="button" name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q2','q3')">Next</button>
						</div>
					</div>
				</div>
			</fieldset>
			<!--QUESTION 3 -->
			<fieldset>
				<div id="q3">
					<h4>The plants were visited by a:</h4>
					<div class="container icon boxes checkbox">
						<label class="fourCol">
							<input type="checkbox" name="creature" value="honeybee">
							<img src="../images/observation/species/honeybee.png">
							<br>
							Honey Bee
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="nativeBee">
							<img src="../images/observation/species/nativebee.jpg">
							<br>
							Native Bee
						</label>
						<label>
							<input type="checkbox" name="creature" value="bird">
							<img src="../images/observation/species/bird.jpg">
							<br>
							Bird
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="wasp">
							<img src="../images/observation/species/wasp.jpg">
							<br>
							Wasp
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="moth">
							<img src="../images/observation/species/moth.jpg">
							<br>
							Moth
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="butterfly">
							<img src="../images/observation/species/butterfly.jpg">
							<br>
							Butterfly
						</label>
						<label>
							<input type="checkbox" name="creature" value="lizard">
							<img src="../images/observation/species/lizard.jpg">
							<br>
							Lizard
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="flyingFox">
							<img src="../images/observation/species/flyingfox.jpg">
							<br>
							Flying fox
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="fruitBat">
							<img src="../images/observation/species/fruitbat.jpg">
							<br>
							Fruit bat
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="possum">
							<img src="../images/observation/species/possum.jpg">
							<br>
							Possum
						</label>
						<label>
							<input type="checkbox" name="creature" value="beetle">
							<img src="../images/observation/species/beetle.jpg">
							<br>
							Beetle
						</label>
						<label class="fourCol">
							<input type="checkbox" name="creature" value="fly">
							<img src="../images/observation/species/fly.jpg">
							<br>
							Fly
						</label>					
					</div>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button" name="previous" class="previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q3','q2')">Back</button>
						</div>
						<div class="col-md-6">
							<button type="button" name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q3','q4')">Next</button>
						</div>						
					</div>
				</div>
			</fieldset>
			<!--QUESTION 4 -->
			<fieldset>
				<div id="q4">
					<h4>Which plants did [Creature 1, Creature 2... repeatable] visit?</h4>
					<div class="container icon boxes checkbox">
						<label class="fourCol">
							<input type="checkbox" name="visitedPlants">
							<img src="../images/observation/plant/saladgreen.jpg">
							<br>
							Salad greens
						</label>
						<label class="fourCol">
							<input type="checkbox" name="visitedPlants">
							<img src="../images/observation/plant/roots.jpg">
							<br>
							Root crops
						</label>
						<label class="fourCol">
							<input type="checkbox" name="visitedPlants">
							<img src="../images/observation/plant/herb.jpg">
							<br>
							Herbs
						</label>
						<label class="fourCol">
							<input type="checkbox" name="visitedPlants">
							<img src="../images/observation/plant/fruit.jpg">
							<br>
							Fruits
						</label>
					</div>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button"  name="previous" class=" previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q4','q3')">Back</button>
						</div>
						<div class="col-md-6">
							<button type="button" name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q4','q5')">Next</button>
						</div>						
					</div>
				</div>
			</fieldset>
			<!--QUESTION 5 -->
			<fieldset>
				<div id="q5">
					<h4>Were any plants ready for harvest today?</h4>
					<div class="container icon radioButton thumbs">
						<label for ="ready">
							<input class="space" id="ready" type="radio" name="harvestReady">
							<img src="../images/observation/thumbUp.jpg">
							<br>
							Yes
						</label>
						<label class="space" for ="notReady">
							<input id="notReady" type="radio" name="harvestReady" onclick="skipQuestion('q5','q8')">
							<img src="../images/observation/thumbDown.jpg">
							<br>
							Not today
						</label>
					</div>		
					<br>
				<!-- back and next button-->					
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button"  name="previous" class=" previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q5','q4')">Back</button>
						</div>
						<div class="col-md-6">
							<button type="button"  name="next" class="next btn btn-outline-success btn-lg" onclick="nextQuestion('q5','q6')">Next</button>
						</div>						
					</div>
				</div>
			</fieldset>
			<!--QUESTION 6 -->
			<fieldset>
				<div id="q6">
					<h4>Which plants are ready for harvest?</h4>
					<div class="container icon boxes checkbox">
						<label class="fourCol">
							<input type="checkbox" name="readyPlants" value="1">
							<img src="../images/observation/plant/saladgreen.jpg">
							<br>
							Salad greens
						</label>
						<label class="fourCol">
							<input type="checkbox" name="readyPlants" value="2">
							<img src="../images/observation/plant/roots.jpg">
							<br>
							Root crops
						</label>
						<label class="fourCol">
							<input type="checkbox" name="readyPlants" value="3">
							<img src="../images/observation/plant/herb.jpg">
							<br>
							Herbs
						</label>
						<label class="fourCol">
							<input type="checkbox" name="readyPlants" value="4">
							<img src="../images/observation/plant/fruit.jpg">
							<br>
							Fruits
						</label>
					</div>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button"  name="previous" class=" previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q6','q5')">Back</button>
						</div>
						<div class="col-md-6">
							<button type="button"  name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q6','q7')">Next</button>
						</div>						
					</div>

				</div>
			</fieldset>
			<!--QUESTION 7 -->
			<fieldset>
				<div id="q7">
					<h4>How big is the harvest from [PLANT 1, PLANT 2... repeatable]?</h4>
					<div class="container icon">
						<div class=" boxes slider">
							<input id="tinyAmount" type="radio" name="harvest">
							<label for="tinyAmount">
								<img src="../images/observation/meal/tinyAmount.jpg">
								<br>
								A tiny amount
							</label>
							<input id="smallSnack" type="radio" name="harvest">
							<label for="smallSnack">
								<img src="../images/observation/meal/smallSnack.jpg">
								<br>
								Like a small snack
							</label>
							<input id="bigSnack" type="radio" name="harvest">
								<label for="bigSnack">
								<img src="../images/observation/meal/bigSnack.jpg">
								<br>
								Like a big snack
							</label>
							<input id="smallMeal" type="radio" name="harvest" checked>
								<label for="smallMeal">
								<img src="../images/observation/meal/smallMeal.jpg">
								<br>
								Like a small meal
							</label>
							<input id="bigMeal" type="radio" name="harvest">
								<label for="bigMeal">
								<img src="../images/observation/meal/bigMeal.jpg">
								<br>
								Like a big meal
							</label>
						</div>
					</div>

					<br>						
					
					<h4>Where did [PLANT 1, PLANT 2... repeatable] grow?</h4>
					<div class="container icon">
						<div class=" boxes slider">
							<input id="alwaysSun" type="radio" name="plantLocation">
							<label for="alwaysSun">
								<img src="../images/observation/environment/alwaysInSun.jpg">
								<br>
								Always in sun
							</label>
							<input id="mostlySun" type="radio" name="plantLocation">
							<label for="mostlySun">
								<img src="../images/observation/environment/mostlyInSun.jpg">
								<br>
								Mostly in sun
							</label>
							<input id="half" type="radio" name="plantLocation">
								<label for="half">
								<img src="../images/observation/environment/halfShade.jpg">
								<br>
								Half sun, half shade
							</label>
							<input id="mostlyShade" type="radio" name="plantLocation" checked>
								<label for="mostlyShade">
								<img src="../images/observation/environment/mostlyInShade.jpg">
								<br>
								Mostly in shade
							</label>
							<input id="alwaysShade" type="radio" name="plantLocation">
								<label for="alwaysShade">
								<img src="../images/observation/environment/alwaysInShade.jpg">
								<br>
								Always in shade
							</label>
						</div>
					</div>
					<br/>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button"  name="previous" class="previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q7','q6')">Back</button>
						</div>
						<div class="col-md-6">
							<button type="button"  name="next" class="next btn btn-outline-success btn-lg" onclick="nextQuestion('q7','q8')">Next</button>
						</div>						
					</div>
				</div>
			</fieldset>
			<!--QUESTION 8 -->
			<fieldset>
				<div id="q8">
					<h4>Which 2 plants are the healthiest?</h4>
					<div class="container icon boxes checkbox">
						<label class="fourCol">
							<input type="checkbox" name="healthiestPlants">
							<img src="../images/observation/plant/saladgreen.jpg">
							<br>
							Salad greens
						</label>
						<label class="fourCol">
							<input type="checkbox" name="healthiestPlants">
							<img src="../images/observation/plant/roots.jpg">
							<br>
							Root crops
						</label>
						<label class="fourCol">
							<input type="checkbox" name="healthiestPlants">
							<img src="../images/observation/plant/herb.jpg">
							<br>
							Herbs
						</label>
						<label class="fourCol">
							<input type="checkbox" name="healthiestPlants">
							<img src="../images/observation/plant/fruit.jpg">
							<br>
							Fruits
						</label>
					</div>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button"  name="previous" class=" previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q8','q7')">Back</button>
							
						</div>
						<div class="col-md-6">
							<button type="button"  name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q8','q9')">Next</button>
						</div>						
					</div>
				</div>
			</fieldset>
			<!--QUESTION 9-->
			<fieldset>
				<div id="q9">
					<h4>What are the 2 main reasons PLANT A is healthy?</h4>
					<div class="container icon boxes checkbox">
						<label>
							<input type="checkbox" name="plantA">
							<img src="../images/observation/location/sunlightPlant.jpg">
							<br>
							The amount of sunlight it got
						</label>
						<label>
							<input type="checkbox" name="plantA" >
							<img src="../images/observation/location/windPlant.jpg">
							<br>
							The wind it got
							
						</label>
						<label>
							<input type="checkbox" name="plantA">
							<img src="../images/observation/location/nutrientPlant.jpg">
							<br>
							The nutrients in the soil
						</label>
						<label>
							<input type="checkbox" name="plantA">
							<img src="../images/observation/location/timePlant.jpg">
							<br>
							The time when it got sunlight
						</label>
						<label>
							<input type="checkbox" name="plantA">
							<img src="../images/observation/location/waterPlant.jpg">
							<br>
							The water in the soil
						</label>
					</div>
					<br>
				<!-- back and next button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
							<button type="button"  name="previous" class=" previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q9','q8')">Back</button>
							
						</div>
						<div class="col-md-6">
							<button type="button"  name="next" class=" next btn btn-outline-success btn-lg" onclick="nextQuestion('q9','q10')">Next</button>
						</div>						
					</div>					
				</div>
			</fieldset>
			<!--QUESTION 10-->
			<fieldset>
				<div id="q10">
					<h4>What are the 2 main reasons PLANT B is healthy?</h4>
					<div class="container icon boxes checkbox">
						<label>
							<input type="checkbox" name="plantB">
							<img src="../images/observation/location/sunlightPlant.jpg">
							<br>
							The amount of sunlight it got
						</label>
						<label>
							<input type="checkbox" name="plantB" >
							<img src="../images/observation/location/windPlant.jpg">
							<br>
							The wind it got
							
						</label>
						<label>
							<input type="checkbox" name="plantB">
							<img src="../images/observation/location/nutrientPlant.jpg">
							<br>
							The nutrients in the soil
						</label>
						<label>
							<input type="checkbox" name="plantB">
							<img src="../images/observation/location/timePlant.jpg">
							<br>
							The time when it got sunlight
						</label>
						<label>
							<input type="checkbox" name="plantB">
							<img src="../images/observation/location/waterPlant.jpg">
							<br>
							The water in the soil
						</label>
					</div>
					<br>
				<!-- next and submit button-->
					<div class="form-group row progressButtons">
						<div class="col-md-6">
						<button type="button"  name="previous" class=" previous btn btn-outline-secondary btn-lg" onclick="previousQuestion('q10','q9')">Back</button>
							
						</div>
						<div class="col-md-6">
						<button type="button" class="btn btn-outline-success btn-lg" onclick="submitForm()">Submit</button>
						</div>						
					</div>	
				</div>

			<!--END OF OBSERVATION FORM-->
			</div>	
		</fieldset>	
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
		<script src="../js/main.js"></script> 
		<script src="../js/observation.js"></script> 		
</html>