<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
	<title>School Site</title>

	<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="../css/obs.css"/> -->

</head>
<body class="" onload="SetSchoolPage()">
	<main> 
	<!-- vh-100 -->

		<header>
			<div class="container mt-3">
				<h1 class="pl-3">School</h1>
			
			
			<nav id="" class="navbar navbar-expand-lg">
				<button class="btn btn-std-4 btn-success mr-1" type="button" data-toggle="collapse" data-target="#observation"><i class="fa fa-tasks" aria-hidden="true"></i> Observations</button>
				<button id="manageaccount" class="btn btn-std-4 btn-success mr-auto" type="button" data-toggle="collapse" data-target="#accounts_collapse"><i class="fas fa-users"></i> Manage Accounts</button>
				<a id="username" class="nav-link" href="#">(User)</a>
				<button class="btn btn-std-2 btn-secondary" onclick="Logout()"><i class="fas fa-sign-out-alt"></i> Logout</button>
			</nav>
			</div>
		</header>
		
		<br/>
		<section id="observation" class="container pt-1 collapse">

			<div id="questions">

				<div class="row my-2">
					<div class="col-auto">
						<button id="" class="btn btn-std-2 btn-outline-secondary btn-lg" onclick="Previous()">Previous</button>
					</div>
					<div class="col-auto mx-auto">
						<h3 class="col">Observation</h3>
					</div>
					<div class="col-auto">
						<button id="" class="btn btn-std-2 btn-outline-success btn-lg" onclick="Next()">Next</button>
					</div>
				</div>

				<h3>Progress:</h3>
				<div id="Progressbar" class="">
					<div id="bar" class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar"></div>
				</div>
				<br/>
				
				<div id="q1" class="container page">
					<h4 class="row ml-1">How was today's weather?</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q1-1" class="input-hidden" type="radio" name="q1" value="Sunny">
						<label class="card bg-light text-center col mr-3 p-0" for="q1-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/sunny.png" alt="" >		
							<span class="card-header">Sunny</span>
						</label>
						<input id="q1-2" class="input-hidden" type="radio" name="q1" value="Partly Cloudy">
						<label class="card bg-light text-center col mr-3 p-0" for="q1-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/partlycloud.png" alt="" >		
							<span class="card-header">Partly Cloudy</span>
						</label>
						<input id="q1-3" class="input-hidden" type="radio" name="q1" value="Cloudy">
						<label class="card bg-light text-center col mr-3 p-0" for="q1-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/cloudy.png" alt="" >
							<span class="card-header">Cloudy</span>
						</label>
						<input id="q1-4" class="input-hidden" type="radio" name="q1" value="Rainy">
						<label class="card bg-light text-center col mr-3 p-0" for="q1-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/rainy.png" alt="" >	
							<span class="card-header">Rainy</span>
						</label>
						<input id="q1-5" class="input-hidden" type="radio" name="q1" value="Stormy">
						<label class="card bg-light text-center col  p-0" for="q1-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/stormy.png" alt="" >	
							<span class="card-header">Stormy</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q1_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<div id="q2" class="container d-none page">
					<h4 class="row ml-1">How was today's weather?</h4>
					<div id="" class="row pl-2 pr-2">
							<input id="q2-1" class="input-hidden" type="radio" name="q2" value="Hot">
							<label class="card bg-light text-center col mr-3 p-0" for="q2-1">
								<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/hot.png" alt="" >		
								<span class="card-header">Hot</span>
							</label>
							<input id="q2-2" class="input-hidden" type="radio" name="q2" value="A Little Warm">
							<label class="card bg-light text-center col mr-3 p-0" for="q2-2">
								<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/littleWarm.png" alt="" >		
								<span class="card-header">A Bit Warm</span>
							</label>
							<input id="q2-3" class="input-hidden" type="radio" name="q2" value="Warm">
							<label class="card bg-light text-center col mr-3 p-0" for="q2-3">
								<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/warm.png" alt="" >
								<span class="card-header">Warm</span>
							</label>
							<input id="q2-4" class="input-hidden" type="radio" name="q2" value="A Little Cold">
							<label class="card bg-light text-center col mr-3 p-0" for="q2-4">
								<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/littleCold.png" alt="" >	
								<span class="card-header">A Bit Cold</span>
							</label>
							<input id="q2-5" class="input-hidden" type="radio" name="q2" value="Cold">
							<label class="card bg-light text-center col p-0" for="q2-5">
								<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/cold.png" alt="" >	
								<span class="card-header">Cold</span>
							</label>
					</div>
					<div class="row pl-2">
						<div id="q2_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<div id="q3" class="container d-none page">
					<h4 class="row ml-1">How was today's weather?</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q3-1" class="input-hidden" type="radio" name="q3" value="No Wind">
						<label class="card bg-light text-center col mr-3 p-0" for="q3-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/wind1.png" alt="" >		
							<span class="card-header">No Wind</span>
						</label>
						<input id="q3-2" class="input-hidden" type="radio" name="q3" value="Little Wind">
						<label class="card bg-light text-center col mr-3 p-0" for="q3-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/wind2.png" alt="" >		
							<span class="card-header">A Little Wind</span>
						</label>
						<input id="q3-3" class="input-hidden" type="radio" name="q3" value="Windy">
						<label class="card bg-light text-center col mr-3 p-0" for="q3-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/wind3.png" alt="" >
							<span class="card-header">Windy</span>
						</label>
						<input id="q3-4" class="input-hidden" type="radio" name="q3" value="Very Windy">
						<label class="card bg-light text-center col mr-3 p-0" for="q3-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/wind4.png" alt="" >	
							<span class="card-header">Very Windy</span>
						</label>
						<input id="q3-5" class="input-hidden" type="radio" name="q3" value="Extremely Windy">
						<label class="card bg-light text-center col  p-0" for="q3-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/weather/wind5.png" alt="" >	
							<span class="card-header">Extremely Windy</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q3_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<!-- Pick [0-12] Animals -->
				<div id="q4" class="container d-none page">
					<h4 class="row ml-1">Which creatures came to visit the plants today?</h4>
					<div class="row my-2 pl-3">
							<button id="toggle" value="select" class="btn btn-outline-secondary text-center d-block w-25 btn-lg" onclick="toggle_Check()">
								None
							</button>
					</div>
					<h4 class="row ml-1">Bees</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q4-1" class="input-hidden" type="checkbox" name="q4" value="European Honey Bee">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/honeybee.png" alt="" >		
							<span class="card-header">European Honey Bee</span>
						</label>
						<input id="q4-2" class="input-hidden" type="checkbox" name="q4" value="Native Stingless Bee">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/stinglessBee.jpg" alt="" >		
							<span class="card-header">Native Stingless Bee</span>
						</label>
						<input id="q4-3" class="input-hidden" type="checkbox" name="q4" value="Native Blue Banded Bee">
						<label class="card bg-light text-center col p-0" for="q4-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/blueBanded.jpg" alt="" >
							<span class="card-header">Native Blue Banded Bee</span>
						</label>

					</div>
					<br/>
					<h4 class="row ml-1">Insects</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q4-4" class="input-hidden" type="checkbox" name="q4" value="Hoverfly">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/hoverfly.jpg" alt="" >	
							<span class="card-header">Hoverfly</span>
						</label>
						<input id="q4-5" class="input-hidden" type="checkbox" name="q4" value="Fly">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/fly.jpg" alt="" >		
							<span class="card-header">Fly</span>
						</label>
						<input id="q4-6" class="input-hidden" type="checkbox" name="q4" value="Wasp">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-6">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/wasp.jpg" alt="" >		
							<span class="card-header">Wasp</span>
						</label>
						<input id="q4-7" class="input-hidden" type="checkbox" name="q4" value="Moth">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-7">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/moth.jpg" alt="" >
							<span class="card-header">Moth</span>
						</label>
						<input id="q4-8" class="input-hidden" type="checkbox" name="q4" value="Butterfly">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-8">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/butterfly.jpg" alt="" >	
							<span class="card-header">Butterfly</span>
						</label>
						<input id="q4-9" class="input-hidden" type="checkbox" name="q4" value="LadyBird">
						<label class="card bg-light text-center col p-0" for="q4-9">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/beetle.jpg" alt="" >		
							<span class="card-header">Ladybird</span>
						</label>
					</div>
					<br/>
					<h4 class="row ml-1">Vertabrates</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q4-10" class="input-hidden" type="checkbox" name="q4" value="Bird">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-10">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/bird.jpg" alt="" >		
							<span class="card-header">Bird</span>
						</label>
						<input id="q4-11" class="input-hidden" type="checkbox" name="q4" value="Lizard">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-11">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/lizard.jpg" alt="" >
							<span class="card-header">Lizard</span>
						</label>
						<input id="q4-12" class="input-hidden" type="checkbox" name="q4" value="Possum">
						<label class="card bg-light text-center col mr-3 p-0" for="q4-12">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/possum.jpg" alt="" >	
							<span class="card-header">Possum</span>
						</label>
						<input id="q4-13" class="input-hidden" type="checkbox" name="q4" value="Flying Fox">
						<label class="card bg-light text-center col p-0" for="q4-13">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/species/flyingfox.jpg" alt="" >	
							<span class="card-header">Flying Fox</span>
						</label>
					</div>

			
					<!-- <div id="" class="row">
							<input id="q4-13" class="input-hidden" type="checkbox" name="q4" value="other">
							<label class="card bg-light text-center col mr-3 p-0" for="q4-13">
								<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
								<span class="card-header">Other</span>
							</label>
							<input id="q4-13" class="input-hidden" type="checkbox" name="q4" value="other">
							<label class="card bg-light text-center col mr-3 p-0" for="q4-13">
								<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
								<span class="card-header">Other</span>
							</label>
					</div> -->

					<div class="row pl-2">
						<div id="q4_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<!-- Repeatable [0-12] Animals-->
				<div id="q5" class="container d-none page">
					<h4 class="row ml-1">Which plants did the <span id="animal_name" class="px-1"></span> visit?</h4>
					<div id="" class="row pl-3">
						<!-- <input id="q5-0" class="input-hidden" type="checkbox" name="q5" value="none">
						<label class="card bg-light text-center col mr-3 p-0" for="q5-0">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">None</span>
						</label> -->
						<input id="q5-1" class="input-hidden" type="checkbox" name="q5" value="Fruits">
						<label class="card bg-light text-center col mr-3 p-0" for="q5-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/fruits.jpg" alt="" >		
							<span class="card-header">Fruits</span>
						</label>
						
						<input id="q5-2" class="input-hidden" type="checkbox" name="q5" value="Herbs">
						<label class="card bg-light text-center col mr-3 p-0" for="q5-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/herbs.jpg" alt="" >		
							<span class="card-header">Herbs</span>
						</label>
						
						<input id="q5-3" class="input-hidden" type="checkbox" name="q5" value="Root Crops">
						<label class="card bg-light text-center col mr-3 p-0" for="q5-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/roots.jpg" alt="" >
							<span class="card-header">Root Crops</span>
						</label>
						
						<input id="q5-4" class="input-hidden" type="checkbox" name="q5" value="Greens">
						<label class="card bg-light text-center col mr-3 p-0" for="q5-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/greens.jpg" alt="" >	
							<span class="card-header">Greens</span>
						</label>
						
						<input id="q5-5" class="input-hidden" type="checkbox" name="q5" value="Vegetables">
						<label class="card bg-light text-center col mr-3 p-0" for="q5-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/vegetables.jpg" alt="" >	
							<span class="card-header">Vegetables</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q5_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<!-- Repeatable [4] Plants -->
				<div id="q6" class="container d-none page">
					<h4 class="row ml-1">Which edible items were ready for harvest from the garden?</h4>
					<div id="" class="row pl-3">
					
						<input id="q6-1" class="input-hidden" type="checkbox" name="q6" value="Fruits">
						<label class="card bg-light text-center col mr-3 p-0" for="q6-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/fruits.jpg" alt="" >			
							<span class="card-header">Fruit</span>
						</label>
						
						<input id="q6-2" class="input-hidden" type="checkbox" name="q6" value="Herbs">
						<label class="card bg-light text-center col mr-3 p-0" for="q6-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/herbs.jpg" alt="" >		
							<span class="card-header">Herbs</span>
						</label>
						
						<input id="q6-3" class="input-hidden" type="checkbox" name="q6" value="Root Crops">
						<label class="card bg-light text-center col mr-3 p-0" for="q6-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/roots.jpg" alt="" >		
							<span class="card-header">Root Crops</span>
						</label>
						
						<input id="q6-4" class="input-hidden" type="checkbox" name="q6" value="Greens">
						<label class="card bg-light text-center col mr-3 p-0" for="q6-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/greens.jpg" alt="" >		
							<span class="card-header">Greens</span>
						</label>
						
						<input id="q6-5" class="input-hidden" type="checkbox" name="q6" value="Vegetables">
						<label class="card bg-light text-center col mr-3 p-0" for="q6-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/vegetables.jpg" alt="" >		
							<span class="card-header">Vegetables</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q6_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<!-- Repeatable [4] Plants -->
				<div id="q7" class="container d-none page">
					<h4 class="row ml-1">How big was the harvest from <span id="harvest_plant" class="pl-1"></span>?</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q7-1" class="input-hidden" type="radio" name="q7" value="Tiny Amount">
						<label class="card bg-light text-center col mr-3 p-0" for="q7-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/meal/tinyAmount.jpg" alt="" >		
							<span class="card-header">A Tiny Amount</span>
						</label>
						<input id="q7-2" class="input-hidden" type="radio" name="q7" value="Small Snack">
						<label class="card bg-light text-center col mr-3 p-0" for="q7-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/meal/smallSnack.jpg" alt="" >		
							<span class="card-header">A Small Snack</span>
						</label>
						<input id="q7-3" class="input-hidden" type="radio" name="q7" value="Big Snack">
						<label class="card bg-light text-center col mr-3 p-0" for="q7-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/meal/bigSnack.jpg" alt="" >
							<span class="card-header">A Big Snack</span>
						</label>
						<input id="q7-4" class="input-hidden" type="radio" name="q7" value="Small Meal">
						<label class="card bg-light text-center col mr-3 p-0" for="q7-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/meal/smallMeal.jpg" alt="" >	
							<span class="card-header">A Small Meal</span>
						</label>
						<input id="q7-5" class="input-hidden" type="radio" name="q7" value="Big Meal">
						<label class="card bg-light text-center col p-0" for="q7-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/meal/bigMeal.jpg" alt="" >	
							<span class="card-header">A Big Meal</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q7_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<div id="q8" class="container d-none page">
					<h4 class="row ml-1">Where did the <span id="plant_location" class="px-1"></span> grow?</h4>
					<div id="" class="row pl-2 pr-2">
						<input id="q8-1" class="input-hidden" type="radio" name="q8" value="Always Sunny">
						<label class="card bg-light text-center col mr-3 p-0" for="q8-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/environment/alwaysInSun.jpg" alt="" >		
							<span class="card-header">Always in Sun</span>
						</label>
						<input id="q8-2" class="input-hidden" type="radio" name="q8" value="Mostly Sunny">
						<label class="card bg-light text-center col mr-3 p-0" for="q8-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/environment/mostlyInSun.jpg" alt="" >		
							<span class="card-header">Mostly in Sun</span>
						</label>
						<input id="q8-3" class="input-hidden" type="radio" name="q8" value="Half and Half">
						<label class="card bg-light text-center col mr-3 p-0" for="q8-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/environment/halfShade.jpg" alt="" >
							<span class="card-header">Half Sun and Shade</span>
						</label>
						<input id="q8-4" class="input-hidden" type="radio" name="q8" value="Mostly Shade">
						<label class="card bg-light text-center col mr-3 p-0" for="q8-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/environment/mostlyInShade.jpg" alt="" >	
							<span class="card-header">Mostly Shade</span>
						</label>
						<input id="q8-5" class="input-hidden" type="radio" name="q8" value="Always Shade">
						<label class="card bg-light text-center col p-0" for="q8-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/environment/alwaysInShade.jpg" alt="" >	
							<span class="card-header">Always Shade</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q8_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<!-- Pick only 2 Plants -->
				<div id="q9" class="container d-none page">
					<h4 class="row ml-1">Which are the healthiest two plants?</h4>
					<div id="" class="row pl-3 pr-2">
						<input id="q9-1" class="input-hidden" type="checkbox" name="q9" value="Fruits" onclick="ValidateSelection('q9', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q9-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/fruits.jpg" alt="" >		
							<span class="card-header">Fruit</span>
						</label>
						<input id="q9-2" class="input-hidden" type="checkbox" name="q9" value="Herbs" onclick="ValidateSelection('q9', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q9-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/herbs.jpg" alt="" >		
							<span class="card-header">Herbs</span>
						</label>
						<input id="q9-3" class="input-hidden" type="checkbox" name="q9" value="Root Crops" onclick="ValidateSelection('q9', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q9-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/roots.jpg" alt="" >
							<span class="card-header">Root Crops</span>
						</label>
						<input id="q9-4" class="input-hidden" type="checkbox" name="q9" value="Greens" onclick="ValidateSelection('q9', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q9-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/greens.jpg" alt="" >	
							<span class="card-header">Greens</span>
						</label>
						<input id="q9-5" class="input-hidden" type="checkbox" name="q9" value="Vegetables" onclick="ValidateSelection('q9', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q9-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/plant/vegetables.jpg" alt="" >	
							<span class="card-header">Vegetables</span>
						</label>
					</div>
					<div class="row pl-2">
						<div id="q9_invalid" class="error">You must choose an option.</div>
					</div>
				</div>

				<!-- Repeatable Plant A,B -->
				<div id="q10" class="container d-none page">
					<h4 class="row ml-1">What two main reasons plant <span id="healthy_plant" class="px-1"></span> is healthy?</h4>
					<div id="" class="row pl-4 pr-2">
						<input id="q10-1" class="input-hidden" type="checkbox" name="q10" value="Sunlight" onclick="ValidateSelection('q10', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q10-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/location/sunlightPlant.jpg" alt="" >		
							<span class="card-header">The amound of sunlight</span>
						</label>
						<input id="q10-2" class="input-hidden" type="checkbox" name="q10" value="Wind" onclick="ValidateSelection('q10', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q10-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/location/windPlant.jpg" alt="" >		
							<span class="card-header">The amount of <br>wind</span>
						</label>
						<input id="q10-3" class="input-hidden" type="checkbox" name="q10" value="Soil" onclick="ValidateSelection('q10', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q10-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/location/nutrientPlant.jpg" alt="" >
							<span class="card-header">The nutrients in the soil</span>
						</label>
						<input id="q10-4" class="input-hidden" type="checkbox" name="q10" value="Time in Sun" onclick="ValidateSelection('q10', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q10-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/location/timePlant.jpg" alt="" >	
							<span class="card-header">The amount of time in the sun</span>
						</label>
						<input id="q10-5" class="input-hidden" type="checkbox" name="q10" value="Soil Water Amount" onclick="ValidateSelection('q10', this)">
						<label class="card bg-light text-center col mr-3 p-0" for="q10-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/observation/location/waterPlant.jpg" alt="" >	
							<span class="card-header">The water in the <br>soil</span>
						</label>
					</div>
					<div class="row pl-4">
						<div id="q10_invalid" class="error">You must choose 2 options.</div>
					</div>
				</div>

				<div id="q_submit" class="d-none page px-0 submitButton">
					<button class="btn btn-primary btn-lg" onclick="SubmitObservation()">Submit</button>
				</div>
				
				

			</div>


		</section>
		<div id="accounts_collapse" class="collapse container">
			<div id="toolbar_school_accounts">
				<h2>Accounts</h2>
			</div>

			<table id="school_accounts"></table>	
		</div>


	</main>
</body">
		<!-- JS -->
		<!-- Libraries -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/js/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="../libs/BootstrapTables/extensions/export/bootstrap-table-export.min.js"></script>
		<script type="text/javascript" src="../libs/PapaParse/papaparse.js"></script>

		<script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>

		<!-- Our Code -->
		<script>page = "school"</script>
		<script src="../js/main.js"></script>
		<!-- <script src="../js/range_slider.js"></script> -->

</html>