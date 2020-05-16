var accountType = 0;
var page = "index";

//------------------------------------------
// Search dropdown

// $(document).ready(function(){
// 	$("#listSearch").on("keyup", function() {
// 	  var value = $(this).val().toLowerCase();
// 	  document.getElementById('table_selection').innerHTML =  $(this).val();
// 	  $("#myList li").filter(function() {
// 		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
// 	  });
// 	});
//   });

function FilterStudents(){
	var search = document.getElementById("search_students").value;
	var section = document.getElementById("students_collapse");
	console.log(search);

	if(search == "")
	{
		section.classList.add("collapse");
	}
	else
	{
		table['students'].table.bootstrapTable('resetSearch',  search);
		section.classList.remove("collapse");
	}

}

//------------------------------------------
// Generic functions
{
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
}

//------------------------------------------
// Page Setup functions
{
	
	function SetupSchoolPage()
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (xhttp.readyState == 4 && xhttp.status == 200) 
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
						case "5":
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
			if (xhttp.readyState == 4 && xhttp.status == 200) 
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
					if (xhttp.readyState == 4 && xhttp.status == 200) 
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

	function SwitchToLogin()
	{
		HideElement("signup");
		ShowElement("login");
	}

	// School page functions
	function Observation(){
		HideElement("manageClasses");
		HideElement("manageAccounts");
		// HideElement("uploadDataSchool");
		ShowElement("submitObservation");
	}

	function ManageClass(){
		ShowElement("manageClasses");
		HideElement("manageAccounts");
		// HideElement("uploadDataSchool");
		HideElement("submitObservation");
	}

	function ManageAccounts(){
		HideElement("manageClasses");
		// ShowElement("uploadDataSchool");
		HideElement("submitObservation");
		ShowElement("manageAccounts");
	}

	// Research page functions
	function UploadResearch(){
		ShowElement("uploadDataResearch");
		HideElement("viewDatabase");
		HideElement("graphOverview");
		HideElement("manageResearchers");
	}

	function Database(){
		HideElement("uploadDataResearch");
		ShowElement("viewDatabase");
		HideElement("graphOverview");
		HideElement("manageResearchers");
	}

	function ManageResearchers(){
		HideElement("uploadDataResearch");
		HideElement("viewDatabase");
		HideElement("graphOverview");
		ShowElement("manageResearchers");
	}

	function Graph(){
		HideElement("uploadDataResearch");
		HideElement("viewDatabase");
		ShowElement("graphOverview");
		HideElement("manageResearchers");
	}
}

//------------------------------------------
// Table functions
{

	
}

//------------------------------------------
// Manage Classes Funtions
{
	function NewClass()
	{
		var classname = document.getElementById("input-classname").value;

		var formData = new FormData();
		formData.append("className", classname);

		var xhttp1 = new XMLHttpRequest();
		xhttp1.onreadystatechange = function() 
		{
			if (xhttp1.readyState == 4 && xhttp1.status == 200) 
			{
				var obj = JSON.parse(xhttp1.responseText);
				console.log(obj);
				
			}
		};
		xhttp1.open("POST", "../php/requests/set_addClass.php", true);
		xhttp1.send(formData);
	}
}