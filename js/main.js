var accountType = 0;

//------------------------------------------
// Generic functions

function goBack() {
	window.history.back()
}

function logResponseText(responseText){
	var obj = JSON.parse(responseText);
	// console.log(obj.debug.replace(/<br>/gi,"\n"));
	console.log(obj);
	// console.log(obj.session);
	return obj;
}

//------------------------------------------
// Page Setup functions
{
	function SetupSchoolPage()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				var obj = logResponseText(xhttp.responseText);

				if(obj.session.loggedIn)
				{
					switch (obj.session.accountType) {
						case "0":
							document.body.style.visibility = "visible";
							HideElement("button_manageClasses");
							break;
						case "1":
							document.body.style.visibility = "visible";
							break;
						default:
							break;
					}
				}
				else
				{
					window.location.assign("../index.php");
				}
			}
		};
		xhttp.open("GET", "../php/requests/get_session.php", true);
		xhttp.send();
	}
	
	function SetupResearchPage()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{

				var obj = logResponseText(xhttp.responseText);
				if(obj.session.loggedIn)
				{
					switch (obj.session.accountType) {
						case "3":
							document.body.style.visibility = "visible";
							HideElement("button_manageResearchers");
							break;
						case "4":
							document.body.style.visibility = "visible";
							break;
						default:
							break;
					}
				}
				else
				{
					window.location.assign("../index.php");
				}
				
			}
		};
		xhttp.open("GET", "../php/requests/get_session.php", true);
		xhttp.send();
	}
}

//------------------------------------------
// CSV file processing functions
{
	function UploadFile(){
		console.log("hello");
		var fileInput = document.querySelector("#CSVFileInput");
		
		Papa.parse(fileInput.files[0], {
			complete: function(results) {
					console.log(results);
					var dataString = JSON.stringify(results.data);
					var formData = new FormData();
					formData.append("file", dataString);
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) 
					{
						// Typical action to be performed when the document is ready:
						document.getElementById("demo").innerHTML = xhttp.responseText;
					}
					};
					xhttp.open("POST", "../php/requests/csvProcessor.php", true);
					xhttp.send(formData);
			}
		});
	}
	
	
	function ValidateInput(){
			return true;
	}
}

//------------------------------------------
// Page element hiding functions
{
	// Base functions
	function HideElement(element){
		var thingToHide = document.getElementById(element);
		thingToHide.style.display  = "none";
	}

	function ShowElement(element){
		var thingToHide = document.getElementById(element);
		thingToHide.style.display  = "block";
	}

	function SwitchToSignUp()
	{
		HideElement("login");
		ShowElement("signup");
	}

	// School page functions
	function Observation(){
		HideElement("manageClasses");
		HideElement("uploadDataSchool");
		ShowElement("submitObservation");
	}

	function ManageClass(){
		ShowElement("manageClasses");
		HideElement("uploadDataSchool");
		HideElement("submitObservation");
	}

	function UploadSchool(){
		HideElement("manageClasses");
		ShowElement("uploadDataSchool");
		HideElement("submitObservation");
	}

	// Research page functions
	function UploadResearch(){
		ShowElement("uploadDataResearch");
		HideElement("viewDatabase");
		HideElement("chartdiv2");
		HideElement("manageResearchers");
	}

	function Database(){
		HideElement("uploadDataResearch");
		ShowElement("viewDatabase");
		HideElement("chartdiv2");
		HideElement("manageResearchers");
	}

	function ManageResearchers(){
		HideElement("uploadDataResearch");
		HideElement("viewDatabase");
		HideElement("chartdiv2");
		ShowElement("manageResearchers");
	}

	function Graph(){
		HideElement("uploadDataResearch");
		HideElement("viewDatabase");
		ShowElement("chartdiv2");
		HideElement("manageResearchers");
	}
}

