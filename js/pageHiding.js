var accountType = 0;

// function HideElement(element){
// 	var thingToHide = document.getElementById(element);
// 	thingToHide.style.display = "none";
// }

// function ShowElement(element){
// 	var thingToHide = document.getElementById(element);
// 	thingToHide.style.display = "inline-block";
// }

// function SubmitObservation(){
// 	HideElement("");
// 	HideElement("");
// 	HideElement("");
// 	HideElement("");
// 	ShowElement("");
// }


function toggle1() {
	var submitObservation = document.getElementById("submitObservation");

	if (submitObservation.style.display == "none") {
		submitObservation.style.display = "block";
	} else {
		submitObservation.style.display = "none";
	}
}

function toggle2() {
	var manageClasses = document.getElementById("manageClasses");

	if (manageClasses.style.display == "none") {
		manageClasses.style.display = "block";
	} else {
		manageClasses.style.display = "none";
	}
}

function toggle3() {
	var uploadDataSchool = document.getElementById("uploadDataSchool");

	if (uploadDataSchool.style.display == "none") {
		uploadDataSchool.style.display = "block";
	} else {
		uploadDataSchool.style.display = "none";
	}
}


function toggle4() {
	var uploadDataResearch = document.getElementById("uploadDataResearch");

	if (uploadDataResearch.style.display == "none") {
		uploadDataResearch.style.display = "block";
	} else {
		uploadDataResearch.style.display = "none";
	}
}

function toggle5() {
	var viewDatabase = document.getElementById("viewDatabase");

	if (viewDatabase.style.display == "none") {
		viewDatabase.style.display = "block";
	} else {
		viewDatabase.style.display = "none";
	}
}

function toggle6() {
	var manageResearchers = document.getElementById("manageResearchers");

	if (manageResearchers.style.display == "none") {
		manageResearchers.style.display = "block";
	} else {
		manageResearchers.style.display = "none";
	}
}


