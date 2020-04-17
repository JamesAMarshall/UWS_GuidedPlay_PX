var accountType = 0;

function HideElement(element){
	var thingToHide = document.getElementById(element);
	thingToHide.style.display = "none";
}

function ShowElement(element){
	var thingToHide = document.getElementById(element);
	thingToHide.style.display = "inline-block";
}

function SubmitObservation(){
	HideElement("");
	HideElement("");
	HideElement("");
	HideElement("");
	ShowElement("");
}