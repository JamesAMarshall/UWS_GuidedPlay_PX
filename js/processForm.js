function ProcessLogIn()
{
	var valid = true;

	valid = ValidateUsername("logIn_username") ? valid : false;
	valid = ValidatePassword("logIn_password") ? valid : false;

	if(!valid) return;
	else console.log("LogIn credentials are valid");

	var username = document.getElementById("logIn_username").value;
	var password = document.getElementById("logIn_password").value;

	var formData = new FormData();
	formData.append("username", username);
	formData.append("password", password);

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) {
			var obj = logResponseText(xhttp.responseText);

			switch (obj.result) {
				case "0":
				case "1":
					window.location.assign("../html/home_school.php");
					break;
				case "3":
				case "4":
					window.location.assign("../html/home_research.php");
					break;
				default:
					break;
			}
		}

	};
	xhttp.open("POST", "../php/requests/login.php", true);
	xhttp.send(formData);
}


function ProcessSignUp()
{
	var valid = true;

	valid = ValidateUsername("signUp_username") ? valid : false;
	valid = ValidatePassword("signUp_password") ? valid : false;
	valid = ValidateConfirmPassword("signUp_confirmPassword", "signUp_password") ? valid : false;
	valid = ValidateAge("signUp_age") ? valid : false;
	valid = ValidateGender("signUp_gender") ? valid : false;

	if(!valid) return;
	else console.log("SignUp credentials are valid");

	var username = document.getElementById("signUp_username").value;
	var password = document.getElementById("signUp_password").value;
	var age = document.getElementById("signUp_age").value;
	var gender = GetGenderData("signUp_gender");

	var formData = new FormData();
	formData.append("username", username);
	formData.append("password", password);
	formData.append("age", age);
	formData.append("gender", gender);

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			document.getElementById("output").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("POST", "../php/requests/signup.php", true);
	xhttp.send(formData);
}

// function ProcessUpload(){}
// function ProcessObservation(){}


// Default validation checks if input element is empty
function DefaultValidation(elementId) 
{ 
    var input = document.getElementById(elementId);
	var isInputValid;
	
	// Does input element contain a value
	isInputValid = CheckRequired(input);

	// Show or hide the corresponding error span based on isInputValid
	SetInputErrorElement(elementId, isInputValid);

	return isInputValid;
}

// Default validation checks if input element is empty
function ValidateUsername(elementId) 
{ 	
	console.log("Currently username is validation just uses DefaultValidation(). To be changed in the future");
	return DefaultValidation(elementId);
}

// Validates an input to meet the requirements of a passowrd
function ValidatePassword(elementId)
{
	var passwordConditions = /^(?=.*[0-9])(?=.*[a-zA-Z])(?=\S+$).{6,20}$/;
	var input = document.getElementById(elementId);
	var isInputValid;
	
	// Does the input value match the regular expression
	isInputValid = input.value.match(passwordConditions);
	
	// Show or hide the corresponding error span based on isInputValid
	SetInputErrorElement(elementId, isInputValid);

	return isInputValid;
} 

// Validates a password with another to ensure they match
function ValidateConfirmPassword(elementId, passwordId)
{
	var passwordConditions = /^(?=.*[0-9])(?=.*[a-zA-Z])(?=\S+$).{6,20}$/;
	var input = document.getElementById(elementId);
	var password = document.getElementById(passwordId);
	var isInputValid;
	
	// Does the input value match the regular expression
	isInputValid = input.value.match(passwordConditions);
	
	// Compare Confirm password with password input
	if(input.value != password.value) isInputValid = false;

	// Show or hide the corresponding error span based on isInputValid
	SetInputErrorElement(elementId, isInputValid);

	return isInputValid;
}

// Validates an age input, must be a number and 4 < age < 100
function ValidateAge(elementId)
{
	var input = document.getElementById(elementId);
	var isInputValid;

	// Check that the age input is a number and within the appropiate range
	isInputValid = !(isNaN(input.value) || input.value < 5 || input.value > 110);

	// Show or hide the corresponding error span based on isInputValid
	SetInputErrorElement(elementId, isInputValid);

	return isInputValid;
}

// Validates gender group of radio buttions ensure a selection was made
function ValidateGender(elementClass)
{
	// Get all radio buttons with class 
	var genderRadios = document.querySelectorAll("input." + elementClass);
	var isInputValid = false;

	// loop through to find the selected radio button and return its value
	for(radio of genderRadios)
	{
		if(radio.checked) isInputValid = true;
	}

	// Show or hide the corresponding error span based on isInputValid
	SetInputErrorElement(elementClass, isInputValid);

	return isInputValid;
}

// Sets an input's error tag to display or not 
function SetInputErrorElement(inputElementId, isInputValid)
{
	// Get input elements <span> element: "inputElementId_error"
	var error = document.getElementById(inputElementId + "_error");
	// IF input is valid dont display ELSE display
	error.style.display = isInputValid ? "none" : "block";
}

// Check the input element isn't empty
function CheckRequired(val) 
{ 
	var val_len = val.value.length;
	if (val_len == 0 || val.value ==  null) {
			val.focus();
			return false;
	}
	return true;
}

// Gets the value from the selected radio buttion given an array of radio buttons 
function GetGenderData(elementClass)
{
	// Get all radio buttons with class 
	var genderRadios = document.querySelectorAll("input." + elementClass);

	// loop through to find the selected radio button and return its value
	for(radio of genderRadios)
	{
		if(radio.checked) return radio.value;
	}
	
	// At this point the function should have returned
	// No radio button has been selected, therefore no value to return
	// Data must be validated before it is gotten 
	console.error("GetGenderData(" + elementClass + ") loop did not return a selected value")
}
