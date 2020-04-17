<?php include('../php/requests/session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Research HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/main.css" rel="stylesheet">
		

        <!-- JS -->
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<script src="../js/main.js"></script>


        <script src="../js/graphExampleTest.js"></script>   
        <!-- <script src="../js/graphExample.js"></script>    -->
        <script src="../js/uploadFile.js"></script> 
        <script src="../js/modules/papaparse.js"></script> 

    </head>
    <body>
	<h1 class="text-light"><a href="../index.php">Welcome to Guided Play</a></h1>
        <div class="heading">
            <h1>Home Page</h1>
			<p>A Green Space Experience</p>
            <a href = "../php/requests/logout.php">Sign Out</a>
            <p>User ID</p>
            <a class="btn btn-outline-success" id="rcorners1" href="">Submit Observation</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Manage Classes</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Upload Data</a>
        </div>
        
		<hr>

        <div>
            <h2>Upload Data</h2>
            <form method="post" enctype="multipart/form-data" action="javascript:UploadFile()" onsubmit="return ValidateInput()">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile"> 
                    <input type="submit" name="submit" id="submit">
            </form>

            <p id="demo"></p>
        </div>

		<hr>

		<!-- <div id="chartdiv1"></div> -->
		<div id="chartdiv2"></div>
		
		<div class= "container">
			<div class="row">
				<div class="col-sm-4 gridbox">
					<p><b>Database Request</b></p>
					<label for="tname">Table name:</label>
					<input type="text" id="tname" align="center" name="tname">
					<br>
					<label for="columns">Columns:</label>
					<input type="text" id="columns" align="center"name="columns">
				</div>
				
				<div class="col-sm-7 gridbox">
					<p><b>Display Table</b></p>
					<table class="table">    
						<thead class="thead-dark">
							<tr>
							  <th scope="col">#</th>
							  <th scope="col">UserID</th>
							  <th scope="col">UserType</th>
							  <th scope="col">Password</th>
							  <th scope="col">ResetPassword</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							  <th scope="row">1</th>
							  <td>Mark0123</td>
							  <td>Student</td>
							  <td>***********</td>
							  <td>mark432154!</td>
							</tr>
							<tr>
							  <th scope="row">2</th>
							  <td>Jacob4132</td>
							  <td>Admin</td>
							  <td>***********</td>
							  <td>Jacob@min32</td>
							</tr>
							<tr>
							  <th scope="row">3</th>
							  <td>Larry7564</td>
							  <td>Researcher</td>
							  <td>************</td>
							  <td>@twitter1523</td>
							</tr>
						</tbody>
					</table>
				</div>
				<br/><br/><br/>
			</div>	
		</div>			

    </body>
</html>