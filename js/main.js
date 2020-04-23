var accountType = 0;

//------------------------------------------
// Generic functions

function goBack() {
	window.history.back()
}

function logResponseText(responseText){
	var obj = JSON.parse(responseText);
	console.log(obj.debug.replace(/<br>/gi,"\n"));
	console.log(obj.result);
	return obj;
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

