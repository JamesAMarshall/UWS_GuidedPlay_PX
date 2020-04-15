<?php include('../php/requests/session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Css -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- JS -->
        <script src="../js/uploadFile.js"></script> 
        <script src="../js/modules/papaparse.js"></script> 
        
    </head>
    <body>
        <h1 class="text-light"><a href="../index.php">Welcome to Guided Play</a></h1>
        <div class="heading">
            <h1>Home Page</h1>
            <h2><a href = "../php/requests/logout.php">Sign Out</a></h2>
            <a class="btn btn-outline-success" id="rcorners2" href="" >&nbsp;</a>
            <a class="btn btn-outline-success" id="rcorners1" href="#">User ID</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Submit Observation</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Manage Classes</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Upload Data</a>
            <p>Welcome to Guided Play- A Green Space Experience</p>
        </div>
        
        <div class="subheading">
            <a class="btn btn-outline-success" id="rowheading" href="">View Light Data</a>
            <a class="btn btn-outline-success" id="rowheading" href="">View Demographic Data</a>
            <a class="btn btn-outline-success" id="rowheading" href="">View Temperature Data</a>
        </div>

        <div>
            <h2>Upload Data</h2>
            <form method="post" enctype="multipart/form-data" action="javascript:ProcessFile()" onsubmit="return ValidateInput()">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile"> 
                    <input type="submit" name="submit" id="submit">
            </form>

            <p id="demo"></p>
        </div>

    </body>
</html>