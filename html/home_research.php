<?php include('../php/requests/session.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student HomePage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- JS -->
        <script src="https://www.amcharts.com/lib/4/core.js"></script>
        <script src="https://www.amcharts.com/lib/4/charts.js"></script>
        <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
        
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
    <h1 class="text-light"><a href="../index.php">Welcome to Guided Play</a></h1>
        <div class="heading">
        <h2><a href = "../php/requests/logout.php">Sign Out</a></h2>
            <a class="btn btn-outline-success" id="rcorners2" href="" >&nbsp;</a>
            <a class="btn btn-outline-success" id="rcorners1" href="#">User ID</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Upload Data</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Database</a>
            <a class="btn btn-outline-success" id="rcorners1" href="">Manage Researchers</a>
            <p>Welcome to Guided Play- A Green Space Experience</p>
        </div>
        
        <div class="subheading">
            <a class="btn btn-outline-success" id="rowheading" href="">View Light Data</a>
            <a class="btn btn-outline-success" id="rowheading" href="">View Demographic Data</a>
            <a class="btn btn-outline-success" id="rowheading" href="">View Temperature Data</a>
        </div>
        
        <div>
            <h2>Upload Data</h2>
            <form method="post" enctype="multipart/form-data" action="javascript:UploadFile()" onsubmit="return ValidateInput()">
                    <label for="myfile">Select a file:</label>
                    <input type="file" id="myfile" name="myfile"> 
                    <input type="submit" name="submit" id="submit">
            </form>

            <p id="demo"></p>
        </div>

        <div id="chartdiv"></div>
    </body>
</html>