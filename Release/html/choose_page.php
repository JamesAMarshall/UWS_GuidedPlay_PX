<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="" name="descriptison">
        <meta content="" name="keywords"> 
		<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
		<title>Choose Page</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="../libs/BootstrapTables/css/bootstrap-table.min.css"/> -->

    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

		<link rel="stylesheet" type="text/css" href="../css/main.css"/>
		<link rel="stylesheet" type="text/css" href="../css/switch.css"/>
        
    </head>
	<style>
		body{
			background-image:url(../images/landscape5.png);
			background-size:cover;
			background-attachment:fixed;
			
			font-family: 'Caveat Brush', cursive;
			font-size: 20px;
		}
	</style>
	<body onload="">
	
	<main class="vh-100 d-flex align-content-center flex-wrap">
	
		<div class="container col-7">
			<div class="overlay-panel overlay-left" onclick="location.href='../php/requests/directAccount'">
				<img class="image1" src="../images/choosePage/data.png">
					<h1>Greenscape</h1>
			</div>
			
			<div class="overlay-panel overlay-right" onClick="location.href='../html/school.php'">
				<img class="image1" src="../images/choosePage/survey.png">
					<h1>Survey</h1>

			</div>
		</div>
	
		<!--
		<div class="container col-sm-7">

			<button class="btn btn-primary large" onclick="location.href='../php/requests/directAccount'">Home</button>
			<a class="btn btn-primary large" href="">PA2007</a>
		</div>
		-->


	</main>

	</body>

		<!-- Our Code -->
		<script src="../js/phpManager.js"></script> 
		<script src="../js/main.js"></script> 
		<!-- <script src="../js/tables.js"></script>  -->

</html>