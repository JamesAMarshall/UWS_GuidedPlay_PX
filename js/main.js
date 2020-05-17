var accountType = 0;

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
// Limit selection of checkboxes

$("input[name=healthiestPlants]").change(function(){
    var max= 2;
    if( $("input[name=healthiestPlants]:checked").length == max ){
        $("input[name=healthiestPlants]").attr('disabled', 'disabled');
        $("input[name=healthiestPlants]:checked").removeAttr('disabled');
    }else{
         $("input[name=healthiestPlants]").removeAttr('disabled');
    }
})

$("input[name=plantA]").change(function(){
    var max= 2;
    if( $("input[name=plantA]:checked").length == max ){
        $("input[name=plantA]").attr('disabled', 'disabled');
        $("input[name=plantA]:checked").removeAttr('disabled');
    }else{
         $("input[name=plantA]").removeAttr('disabled');
    }
})

$("input[name=plantB]").change(function(){
    var max= 2;
    if( $("input[name=plantB]:checked").length == max ){
        $("input[name=plantB]").attr('disabled', 'disabled');
        $("input[name=plantB]:checked").removeAttr('disabled');
    }else{
         $("input[name=plantB]").removeAttr('disabled');
    }
})
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

