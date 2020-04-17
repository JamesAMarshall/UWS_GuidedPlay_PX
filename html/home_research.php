<?php include('../php/requests/session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Researcher HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/database.css">
		<link rel="stylesheet" type="text/css" href="../css/homePage.css">
		<link rel="stylesheet" type="text/css" href="../css/manageclass.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		

        <!-- JS -->
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		<script src="../js/manageResearcher.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/table.js"></script>
		
        <script src="../js/graphExample.js"></script>   
        <script src="../js/uploadFile.js"></script> 
        <script src="../js/modules/papaparse.js"></script> 

        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
            }
        </style>
	
    </head>
    <body>
	
	    <div class="container">
			<div class="pt-sm-5"> 
                <h1 class="text-light"><a href="../index.php">Welcome to Guided Play</a></h1>
				<h2 class="text-light"><a href = "../php/requests/logout.php">Sign Out</a></h2>
			</div>
		</div>
        <div class="container">
            <a class="btn btn-outline-success" id="roundbutton" href="#">User ID</a>
            <a class="btn btn-outline-success" id="roundbutton" href="">Upload Data</a>
            <a class="btn btn-outline-success" id="roundbutton" href="">Database</a>
            <a class="btn btn-outline-success" id="roundbutton" href="">Manage Researchers</a>
			<br/>
            <p>Welcome to Guided Play- A Green Space Experience</p>
			<br/>
            <a class="btn btn-outline-success" href="">View Light Data</a>
            <a class="btn btn-outline-success" href="">View Demographic Data</a>
            <a class="btn btn-outline-success" href="">View Temperature Data</a>
        </div>
        
		
		<!-- Upload Data -->
        <div class="container">
		    <h2>Upload Data</h2>
            <form method="post" enctype="multipart/form-data" action="javascript:UploadFile()" onsubmit="return ValidateInput()">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile"> 
                    <input type="submit" name="submit" id="submit">
            </form>
			<div class="row-content">
					<div class="col-sm-12">
						<p id="demo"></p>
					<div id="chartdiv"></div>
					</div>
			</div>
			
        </div>
		<!-- manage researcher admin features-->
		<div class= "container">
		<h2>Manage Researcher</h2>
			<div class="table-wrapper">
					<div class="table-title">
					<div class="col">
						<div class="row-sm-5">
							<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
						</div>
					</div>
				</div>
				<p>Type something in the input field to search the table for userID, grade or class etc:</p>  
				<input class="form-control" id="myInput" type="text" placeholder="Search..">
				<br/>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>User ID</th>
							<th>User Type</th>
							<th>Password</th>
							<th>Reset Password</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="myTable">
						<tr>
							<td>Mark0123</td>
							<td>Student</td>
							<td>***********</td>
							<td>mark432154!</td>
							<td>
								<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
								<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
								<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>Jacob4132</td>
							<td>Admin</td>
							<td>***********</td>
							<td>Jacob@min32</td>
							<td>
								<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
								<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
								<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>Larry7564</td>
							<td>Researcher</td>
							<td>************</td>
							<td>@twitter1523</td>
							<td>
								<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
								<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
								<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
							</td>
						</tr>      
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Database Table -->
		
		<div class= "container">
		<h2>Database</h2>
			<div class="table-wrapper">

			<p><b>Database Request</b></p>
			<label for="tname">Table:</label>
			<input type="text" id="table_name" align= "center"name="table_name">
			<br>
			<label for="columns">Columns:</label>
			<input type="text" id="columns" align= "center"name="columns">

				<br/>
				<table class="table table-bordered">
					<thead class="thead-dark">
						<tr>
							<th>User ID</th>
							<th>User Type</th>
							<th>Password</th>
							<th>Reset Password</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="myTable">
						<tr>
							<td>Mark0123</td>
							<td>Student</td>
							<td>***********</td>
							<td>mark432154!</td>
							<td>
								<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
								<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
								<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>Jacob4132</td>
							<td>Admin</td>
							<td>***********</td>
							<td>Jacob@min32</td>
							<td>
								<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
								<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
								<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
							</td>
						</tr>
						<tr>
							<td>Larry7564</td>
							<td>Researcher</td>
							<td>************</td>
							<td>@twitter1523</td>
							<td>
								<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
								<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
								<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
							</td>
						</tr>      
					</tbody>
				</table>
			</div>
		</div>

	
    </body>
</html>