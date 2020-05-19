
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="../css/obs.css"/> -->

</head>
<body class="">
	<main class="container"> 
	<!-- vh-100 -->
		<header>
			<h1>School</h1>
		</header>
		
		<nav id="" class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="">Observation</a>
		</nav>
		
		<section id="observation" class="container p-2">
			<h3>Observation</h3>

			<!-- <div class="d-flex justify-content-end"><button id="" class="btn btn-primary" onclick="GoToPage('q1')">Start</button></div> -->


			<div class="row">
				<div class="col-auto">
					<button id="" class="btn btn-primary" onclick="Previous()">Previous</button>
				</div>
				<div class="col-auto mx-auto">
					<span>Bread Crumbs</span>
				</div>
				<div class="col-auto">
					<button id="" class="btn btn-primary" onclick="Next()">Next</button>
					<!-- <button id="" class="btn btn-primary" onclick="GetFormData()">Submit</button> -->
				</div>
			</div>

			<div id="q1" class="container page">
				<h4>Question 1: How was today's weather?</h4>
				<div id="" class="row">
						<input id="q1-1" class="input-hidden" type="radio" name="q1" value="sunny">
						<label class="card bg-light text-center col m-4 p-0" for="q1-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Sunny</span>
						</label>
						<input id="q1-2" class="input-hidden" type="radio" name="q1" value="partly_cloudy">
						<label class="card bg-light text-center col m-4 p-0" for="q1-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Partly Cloudy</span>
						</label>
						<input id="q1-3" class="input-hidden" type="radio" name="q1" value="cloudy">
						<label class="card bg-light text-center col m-4 p-0" for="q1-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Cloudy</span>
						</label>
						<input id="q1-4" class="input-hidden" type="radio" name="q1" value="rainy">
						<label class="card bg-light text-center col m-4 p-0" for="q1-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Rainy</span>
						</label>
						<input id="q1-5" class="input-hidden" type="radio" name="q1" value="stormy">
						<label class="card bg-light text-center col m-4 p-0" for="q1-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Stormy</span>
						</label>
				</div>
			</div>

			<div id="q2" class="container d-none page">
				<h4>Question 2: How was today's weather?</h4>
				<div id="" class="row">
						<input id="q2-1" class="input-hidden" type="radio" name="q2" value="hot">
						<label class="card bg-light text-center col m-4 p-0" for="q2-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Hot</span>
						</label>
						<input id="q2-2" class="input-hidden" type="radio" name="q2" value="hot_little">
						<label class="card bg-light text-center col m-4 p-0" for="q2-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">A Bit Hot</span>
						</label>
						<input id="q2-3" class="input-hidden" type="radio" name="q2" value="warm">
						<label class="card bg-light text-center col m-4 p-0" for="q2-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Warm</span>
						</label>
						<input id="q2-4" class="input-hidden" type="radio" name="q2" value="cold_litte">
						<label class="card bg-light text-center col m-4 p-0" for="q2-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">A Bit Cold</span>
						</label>
						<input id="q2-5" class="input-hidden" type="radio" name="q2" value="cold">
						<label class="card bg-light text-center col m-4 p-0" for="q2-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Cold</span>
						</label>
				</div>
			</div>

			<div id="q3" class="container d-none page">
				<h4>Question 3: How was today's weather?</h4>
				<div id="" class="row">
						<input id="q3-1" class="input-hidden" type="radio" name="q3" value="wind_none">
						<label class="card bg-light text-center col m-4 p-0" for="q3-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">No Wind</span>
						</label>
						<input id="q3-2" class="input-hidden" type="radio" name="q3" value="wind_little">
						<label class="card bg-light text-center col m-4 p-0" for="q3-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">A Little Wind</span>
						</label>
						<input id="q3-3" class="input-hidden" type="radio" name="q3" value="wind_windy">
						<label class="card bg-light text-center col m-4 p-0" for="q3-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Windy</span>
						</label>
						<input id="q3-4" class="input-hidden" type="radio" name="q3" value="wind_very">
						<label class="card bg-light text-center col m-4 p-0" for="q3-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Very Windy</span>
						</label>
						<input id="q3-5" class="input-hidden" type="radio" name="q3" value="wind_extremely">
						<label class="card bg-light text-center col m-4 p-0" for="q3-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Extremely Windy</span>
						</label>
				</div>
			</div>

			<!-- Pick [0-12] Animals -->
			<div id="q4" class="container d-none page">
				<h4>Question 4: Which animals were visited the plants?</h4>
				<div id="" class="row">
						<input id="q4-1" class="input-hidden" type="checkbox" name="q4" value="bird">
						<label class="card bg-light text-center col m-4 p-0" for="q4-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Bird</span>
						</label>
						<input id="q4-2" class="input-hidden" type="checkbox" name="q4" value="wasp">
						<label class="card bg-light text-center col m-4 p-0" for="q4-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Wasp</span>
						</label>
						<input id="q4-3" class="input-hidden" type="checkbox" name="q4" value="native_bee">
						<label class="card bg-light text-center col m-4 p-0" for="q4-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Native Bee</span>
						</label>
						<input id="q4-4" class="input-hidden" type="checkbox" name="q4" value="honey_bee">
						<label class="card bg-light text-center col m-4 p-0" for="q4-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Honey Bee</span>
						</label>
				</div>
				<div id="" class="row">
						<input id="q4-5" class="input-hidden" type="checkbox" name="q4" value="lizard">
						<label class="card bg-light text-center col m-4 p-0" for="q4-5">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Lizard</span>
						</label>
						<input id="q4-6" class="input-hidden" type="checkbox" name="q4" value="flying_fox">
						<label class="card bg-light text-center col m-4 p-0" for="q4-6">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Flying Fox</span>
						</label>
						<input id="q4-7" class="input-hidden" type="checkbox" name="q4" value="butterfly">
						<label class="card bg-light text-center col m-4 p-0" for="q4-7">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Butterfly</span>
						</label>
						<input id="q4-8" class="input-hidden" type="checkbox" name="q4" value="moth">
						<label class="card bg-light text-center col m-4 p-0" for="q4-8">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Moth</span>
						</label>
				</div>
				<div id="" class="row">
						<input id="q4-9" class="input-hidden" type="checkbox" name="q4" value="beetle">
						<label class="card bg-light text-center col m-4 p-0" for="q4-9">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Beetle</span>
						</label>
						<input id="q4-10" class="input-hidden" type="checkbox" name="q4" value="fly">
						<label class="card bg-light text-center col m-4 p-0" for="q4-10">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Fly</span>
						</label>
						<input id="q4-11" class="input-hidden" type="checkbox" name="q4" value="possum">
						<label class="card bg-light text-center col m-4 p-0" for="q4-11">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Possum</span>
						</label>
						<input id="q4-12" class="input-hidden" type="checkbox" name="q4" value="fruit_bat">
						<label class="card bg-light text-center col m-4 p-0" for="q4-12">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Fruit Bat</span>
						</label>
				</div>
			</div>

			<!-- Repeatable [0-12] Animals-->
			<div id="q5" class="container d-none page">
				<div id="q5_content">
					<h4>Question 5: Which plants did the <span id="animal_name"></span> visit?</h4>
					<div id="" class="row">
						<input id="q5-1" class="input-hidden" type="checkbox" name="q5" value="fruits">
						<label class="card bg-light text-center col m-4 p-0" for="q5-1">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Fruits</span>
						</label>
						<input id="q5-2" class="input-hidden" type="checkbox" name="q5" value="herbs">
						<label class="card bg-light text-center col m-4 p-0" for="q5-2">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
							<span class="card-header">Herbs</span>
						</label>
						<input id="q5-3" class="input-hidden" type="checkbox" name="q5" value="root_crops">
						<label class="card bg-light text-center col m-4 p-0" for="q5-3">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
							<span class="card-header">Root Crops</span>
						</label>
						<input id="q5-4" class="input-hidden" type="checkbox" name="q5" value="salad_greens">
						<label class="card bg-light text-center col m-4 p-0" for="q5-4">
							<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
							<span class="card-header">Salad Greens</span>
						</label>
					</div>
				</div>

			</div>

			<!-- Repeatable [4] Plants -->
			<div id="q6" class="container d-none page">
				<h4>Question 6: Which edible items were ready for harvest from the garden?</h4>
				<div id="" class="row">
					<input id="q6-1" class="input-hidden" type="checkbox" name="q6" value="fruits">
					<label class="card bg-light text-center col m-4 p-0" for="q6-1">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">Fruit</span>
					</label>
					<input id="q6-2" class="input-hidden" type="checkbox" name="q6" value="herbs">
					<label class="card bg-light text-center col m-4 p-0" for="q6-2">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">Herbs</span>
					</label>
					<input id="q6-3" class="input-hidden" type="checkbox" name="q6" value="root_crops">
					<label class="card bg-light text-center col m-4 p-0" for="q6-3">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
						<span class="card-header">Root Crops</span>
					</label>
					<input id="q6-4" class="input-hidden" type="checkbox" name="q6" value="salad_greens">
					<label class="card bg-light text-center col m-4 p-0" for="q6-4">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">Salad Greens</span>
					</label>
				</div>
			</div>

			<!-- Repeatable [4] Plants -->
			<div id="q7" class="container d-none page">
				<h4>Question 7: How big was the harvest from plant <span id="harvest_plant"></span>?</h4>
				<div id="" class="row">
					<input id="q7-1" class="input-hidden" type="radio" name="q7" value="tiny_amount">
					<label class="card bg-light text-center col m-4 p-0" for="q7-1">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">A Tiny Amount</span>
					</label>
					<input id="q7-2" class="input-hidden" type="radio" name="q7" value="small_snack">
					<label class="card bg-light text-center col m-4 p-0" for="q7-2">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">A Small Snack</span>
					</label>
					<input id="q7-3" class="input-hidden" type="radio" name="q7" value="big_snack">
					<label class="card bg-light text-center col m-4 p-0" for="q7-3">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
						<span class="card-header">A Big Snack</span>
					</label>
					<input id="q7-4" class="input-hidden" type="radio" name="q7" value="small_meal">
					<label class="card bg-light text-center col m-4 p-0" for="q7-4">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">A Small Meal</span>
					</label>
					<input id="q7-5" class="input-hidden" type="radio" name="q7" value="big_meal">
					<label class="card bg-light text-center col m-4 p-0" for="q7-5">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">A Big Meal</span>
					</label>
				</div>
			</div>

			<div id="q8" class="container d-none page">
				<h4>Question 8: Where did the <span id="plant_location"></span> grow?</h4>
				<div id="" class="row">
					<input id="q8-1" class="input-hidden" type="radio" name="q8" value="always_sun">
					<label class="card bg-light text-center col m-4 p-0" for="q8-1">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">Always in Sun</span>
					</label>
					<input id="q8-2" class="input-hidden" type="radio" name="q8" value="mostly_sun">
					<label class="card bg-light text-center col m-4 p-0" for="q8-2">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">Mostly in Sun</span>
					</label>
					<input id="q8-3" class="input-hidden" type="radio" name="q8" value="half">
					<label class="card bg-light text-center col m-4 p-0" for="q8-3">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
						<span class="card-header">Half Sun and Shade</span>
					</label>
					<input id="q8-4" class="input-hidden" type="radio" name="q8" value="mostly_shade">
					<label class="card bg-light text-center col m-4 p-0" for="q8-4">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">Mostly Shade</span>
					</label>
					<input id="q8-5" class="input-hidden" type="radio" name="q8" value="always_shade">
					<label class="card bg-light text-center col m-4 p-0" for="q8-5">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">Always Shade</span>
					</label>
				</div>
			</div>

			<!-- Pick only 2 Plants -->
			<div id="q9" class="container d-none page">
				<h4>Question 9: Which are the healthiest two plants?</h4>
				<div id="" class="row">
					<input id="q9-1" class="input-hidden" type="checkbox" name="q9" value="fruits">
					<label class="card bg-light text-center col m-4 p-0" for="q9-1">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">Fruit</span>
					</label>
					<input id="q9-2" class="input-hidden" type="checkbox" name="q9" value="herbs">
					<label class="card bg-light text-center col m-4 p-0" for="q9-2">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">Herbs</span>
					</label>
					<input id="q9-3" class="input-hidden" type="checkbox" name="q9" value="root_crops">
					<label class="card bg-light text-center col m-4 p-0" for="q9-3">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
						<span class="card-header">Root Crops</span>
					</label>
					<input id="q9-4" class="input-hidden" type="checkbox" name="q9" value="salad_greens">
					<label class="card bg-light text-center col m-4 p-0" for="q9-4">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">Salad Greens</span>
					</label>
				</div>
			</div>

			<!-- Repeatable Plant A,B -->
			<div id="q10" class="container d-none page">
				<h4>Question 10: What two main reasons plant <span id="healthy_plant"></span> is healthy?</h4>
				<div id="" class="row">
					<input id="q10-1" class="input-hidden" type="checkbox" name="q10" value="sunglight">
					<label class="card bg-light text-center col m-4 p-0" for="q10-1">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">The amound of sunlight</span>
					</label>
					<input id="q10-2" class="input-hidden" type="checkbox" name="q10" value="wind">
					<label class="card bg-light text-center col m-4 p-0" for="q10-2">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >		
						<span class="card-header">The amount of wind</span>
					</label>
					<input id="q10-3" class="input-hidden" type="checkbox" name="q10" value="soil">
					<label class="card bg-light text-center col m-4 p-0" for="q10-3">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >
						<span class="card-header">The nutrients in the soil</span>
					</label>
					<input id="q10-4" class="input-hidden" type="checkbox" name="q10" value="time_sun">
					<label class="card bg-light text-center col m-4 p-0" for="q10-4">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">The amount of time in the sun</span>
					</label>
					<input id="q10-5" class="input-hidden" type="checkbox" name="q10" value="water_soil">
					<label class="card bg-light text-center col m-4 p-0" for="q10-5">
						<img id="" class="img-thumbnail" dragable="false" src="../images/logo.gif" alt="" >	
						<span class="card-header">The water in the soil</span>
					</label>
				</div>
			</div>

			<div class="row">
				<div class="col-auto">
					<button id="" class="btn btn-primary" onclick="Previous()">Previous</button>
				</div>
				<div class="col-auto mx-auto">
					<span>Bread Crumbs</span>
				</div>
				<div class="col-auto">
					<button id="" class="btn btn-primary" onclick="Next()">Next</button>
					<!-- <button id="" class="btn btn-primary" onclick="GetFormData()">Submit</button> -->
				</div>
			</div>

			<div id="q_submit" class="container d-none">
				<div class="col">
					<button  class="btn btn-primary w-100" onclick="">Submit</button>
				</div>
			</div>

		</section>

	</main>
</body>
		<!-- JS -->
		<!-- Libraries -->
		<script type="text/javascript" src="../libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="../libs/Bootstrap-4-4.4.1/js/bootstrap.min.js"></script>

		<!-- Our Code -->
		<script src="../js/main.js"></script>
		<!-- <script src="../js/range_slider.js"></script> -->

</html>