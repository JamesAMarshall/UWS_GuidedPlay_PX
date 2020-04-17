<?php include('../php/requests/session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Css -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<!-- JS -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
        <script src="../js/uploadFile.js"></script> 
		<script src="../js/modules/papaparse.js"></script> 
		<script src="../js/manage.js"></script>
        
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

		<form action="" method="POST">            
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

		<hr>

		<div class="table-wrapper">
		
			<div class="table-title">
				<div class="row">
					<div class="col-sm-8"><h1><b>Manage Class</b></h1></div>
					<div class="col-sm-4">
						<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
					</div>
				</div>
			</div>
			<p>Type something in the input field to search the table for userID, grade or class etc:</p>  
			<input class="form-control" id="myInput" type="text" placeholder="Search..">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>User ID</th>
						<th>Grade</th>
						<th>Class</th>
						<th>Last Login</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="myTable">
					<tr>
						<td>Stacie0321</td>
						<td>H</td>
						<td>3B</td>
						<td>01/04/2020 5:00p.m</td>
						<td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
							<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
							<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>Peter110532</td>
						<td>HD</td>
						<td>4A</td>
						<td>12/04/2020 3:00p.m</td>
						<td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
							<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
							<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>Fran11932</td>
						<td>D</td>
						<td>2D</td>
						<td>15/02/2020 1:00p.m</td>
						<td>
							<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
							<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
							<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						</td>
					</tr>      
				</tbody>
			</table>
	</div>


    </body>
</html>