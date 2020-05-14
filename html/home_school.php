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
				<div>
					<!-- THIS IS THE START OF THE OBSERVATION FORM -->
					<p>Today, the weather was...</p>
					<table>
						<!-- GENERAL WEATHER -->
						<tr>
							<td>
								<label>
									<input type="radio" name="weather" value="sunny">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Sunny</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="weather" value="partlyCloudy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">A bit cloudy</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="weather" value="cloudy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Cloudy</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="weather" value="rainy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Rainy</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="weather" value="stormy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Stormy</p>

								</label>
							</td>
						</tr>
						<!-- TEMPERATURE -->
						<tr>
							<td>
								<label>
									<input type="radio" name="temp" value="hot">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Hot</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="temp" value="bitHot">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">A bit hot</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="temp" value="warm">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Warm</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="temp" value="bitCold">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">A bit cold</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="temp" value="cold">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Cold</p>

								</label>
							</td>
						</tr>
						<!-- WIND -->
						<tr>
							<td>
								<label>
									<input type="radio" name="wind" value="noWind">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">No wind</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="wind" value="littleWind">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">A little wind</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="wind" value="windy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Windy</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="wind" value="veryWindy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Very windy</p>

								</label>
							</td>
							<td>
								<label>
									<input type="radio" name="wind" value="extremelyWindy">
									<img src="http://placehold.it/120x120/0bf/fff&text=Image">
									<p style="text-align:center">Extremely windy</p>

								</label>
							</td>
						</tr>
    				</table>

					<p>Did any creatures visit the plants today?</p>
					<label>
						<input type="radio" name="visit" value="yes">
						<img src="http://placehold.it/120x120/0bf/fff&text=Image">
						<p style="text-align:center">Yes!</p>
					</label>
					<label>
						<input type="radio" name="visit" value="no">
						<img src="http://placehold.it/120x120/0bf/fff&text=Image">
						<p style="text-align:center">Not today!</p>
					</label>
				
					<p>The plants were visited by a:</p>
					<table>
						<tr>
							<td>
								<label>
									<input type="checkbox" name="creature" value="honeybee">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Honeybee</p>
								</label>
							</td>

							<td>
								<label>
									<input type="checkbox" name="creature" value="nativeBee">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Native Bee</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="creature" value="bird">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Bird</p>
								</label>
							</td>

							<td>
								<label>
									<input type="checkbox" name="creature" value="wasp">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Wasp</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="creature" value="moth">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Moth</p>
								</label>
							</td>

							<td>
								<label>
									<input type="checkbox" name="creature" value="butterfly">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Butterfly</p>
								</label>
							</td>
						</tr>

						<tr>
							<td>
								<label>
									<input type="checkbox" name="creature" value="fly">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Fly</p>
								</label>
							</td>

							<td>
								<label>
									<input type="checkbox" name="creature" value="lizard">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Lizard</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="creature" value="flyingFox">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Flying fox</p>
								</label>
							</td>

							<td>
								<label>
									<input type="checkbox" name="creature" value="fruitBat">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Fruit bat</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="creature" value="possum">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Possum</p>
								</label>
							</td>

							<td>
								<label>
								<input type="checkbox" name="creature" value="beetle">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Beetle</p>
								</label>
							</td>
						</tr>
					</table>

					<p>Which plants did [CREATURE 1, CREATURE 2... repeatable] visit?</p>
					<table>
						<tr>
							<td>
								<label>
									<input type="checkbox" name="plantSpecies" value="salad">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Salad greens</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="plantSpecies" value="root">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Root crops</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="plantSpecies" value="herbs">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Herbs</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="plantSpecies" value="fruit">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Fruits</p>
								</label>
							</td>
						</tr>	
					</table>

					<p>Are any plants ready for harvest?</p>
					<label>
						<input type="radio" name="ready" value="yes">
						<img src="http://placehold.it/120x120/0bf/fff&text=Image">
						<p style="text-align:center">Yes!</p>
					</label>
					<label>
						<input type="radio" name="ready" value="no">
						<img src="http://placehold.it/120x120/0bf/fff&text=Image">
						<p style="text-align:center">Not yet!</p>
					</label>

					<p>How big is the harvest from [PLANT 1, PLANT 2... repeatable]?</p>
					<label for="harvest">A tiny amount / Like a small snack / Like a big snack / Like a small meal / Like a big meal</label>
					<input type="range" class="custom-range" min="0" max="4" id="harvest">

					<p>Where did [PLANT 1, PLANT 2... repeatable] grow?</p>
					<label for="whereGrow">Always in sun / Mostly in sun / Half sun, half shade / Mostly in shade / Always in shade</label>
					<input type="range" class="custom-range" min="0" max="4" id="whereGrow">

					<p>Which 2 plants are the healthiest? [SHOULD RESTRICT TO 2 CHOICES]</p>
					<table>
						<tr>
							<td>
								<label>
									<input type="checkbox" name="healthiest" value="salad">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Salad greens</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="healthiest" value="root">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Root crops</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="healthiest" value="herbs">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Herbs</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="healthiest" value="fruit">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Fruits</p>
								</label>
							</td>
						</tr>	
					</table>

					<p>
						What are the 2 main reasons [PLANT A, PLANT B, not repeatable - A&B only] is healthy?
						[SHOULD RESTRICT TO 2 REASONS PER PLANT]
					</p>
					<table>
						<tr>
							<td>
								<label>
									<input type="checkbox" name="reason" value="1">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">The amount of sunlight it got</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="reason" value="2">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">The time when it got sunlight</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="reason" value="3">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">The nutrients in the soil</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="reason" value="4">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">The wind it got</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="reason" value="5">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">The water in the soil</p>
								</label>
							</td>
							<td>
								<label>
									<input type="checkbox" name="reason" value="6">
									<img src="http://placehold.it/120x120/b0f/fff&text=Image">
									<p style="text-align:center">Other</p>
								</label>
							</td>
						</tr>	
					</table>

					<input class="btn btn-primary" type="submit" value="Submit">
					<!-- THIS IS THE END OF THE OBSERVATION FORM-->
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