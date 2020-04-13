 function signupValidateForm() 
 {
	var valid = true;
	var signupemail = document.getElementById("suemail").value;
	var signupuname = document.getElementById("suname");
   
	var signuppass = document.getElementById("supass");
	var reenterpass = document.getElementById("re_pass");
   
	var date = document.getElementById("dob");
	
	var gender = document.getElementById("male");
	var gender = document.getElementById("female");
	
   	if(!checkEmail(signupemail)){
		valid = false;
	}
	
	if(!SignupUsername_validation(signupuname)){
		valid = false;
    }
	
	if(!confirmpassword_validation(reenterpass)){
		valid = false;
	}
	
	if(!checkDate(date)) {
		valid = false;
	}
	
	if(!checkPassword(signuppass)){
		valid = false;
	}
	
	if(!gender_validation(gender)){
		valid = false;
	}
   return valid;
 }
 
 
/*checks empty textbox*/
function checkRequired(val) 
{ 
	var val_len = val.value.length;
		if (val_len == 0 || val.value ==  null) 
		{
			val.focus();
			return false;
		}
	return true;
}

/*select radio button*/
function checkGender(){
	var radio1 = document.getElementById('male').checked;
	var radio2 = document.getElementById('female').checked;
	if((radio1=="")&&(radio2=="")){
		return false;
	}

	return true;
}

/*check signup email*/
function checkEmail(signupemail){
	var checkText = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; //defining the format of the email
	
	if(signupemail.length != 0){
		if(signupemail.match(checkText)){
			document.getElementById('signupEmailFormatError').style.display = "none";
			return true;
		}
		else {
			document.getElementById('signupEmailFormatError').style.display = "inline-block";
			return false;
		}
	}
	document.getElementById('signupEmailFormatError').style.display = "none";
	return true;
}
/*checks signup username */
function SignupUsername_validation(signupuname) 
{ 
	if(checkRequired(signupuname))
	{
		document.getElementById('signupUsernameError').style.display = "none";
		return true;
	}
	else 
	{
		document.getElementById('signupUsernameError').style.display = "block";
		return false;
	}
}

/*check password between 6~20*/
function checkPassword(inputTxt)
{
	var paswd= /^(?=.*[0-9])(?=.*[a-zA-Z])(?=\S+$).{6,20}$/;
	var signuppass = inputTxt.value;
	if(inputTxt.value.match(paswd)){
		document.getElementById('passwordlengthError').style.display = "none";
		return true;
	}
	else{
		document.getElementById('passwordlengthError').style.display = "block";
		return false;
	}
	
}

/*check re-enter password match*/
function confirmpassword_validation(){
	var password = document.getElementById("supass").value;
	var confirmPassword = document.getElementById("re_pass").value;
	if (password != confirmPassword) {
			document.getElementById('reenterPasswordError').style.display = "block";
			return false;
	}
	document.getElementById('reenterPasswordError').style.display = "none";
	return true;
}

/*check date of birth*/
function checkDate(inputText) 
{
	//defines the format of XX/XX/XXXX (X = numbers 0 - 9)
	var checkText = /^\d{2}\/\d{2}\/\d{4}$/; 
	var date = inputText.value;
	document.getElementById('dobInputError').style.display = "none";
    if(checkRequired(inputText)){
		document.getElementById('dobError').style.display = "none";
		
		if(inputText.value.match(checkText)){
			numbers = date.split('/');
			document.getElementById('dobFormatError').style.display = "none";
			if( numbers[0] > 0 && numbers[0] <= 31&& numbers[1] > 0 && numbers[1] <= 12 && numbers[2] > 1900 ) { //checks for correct dates where day is 1 - 31, month 1-12 and year is > 19000
				return true;
			}
			inputText.focus();
			document.getElementById('dobInputError').style.display = "inline-block";
			return false;
			}
		inputText.focus();
		document.getElementById('dobFormatError').style.display = "inline-block";
		return false;
	}
	document.getElementById('dobError').style.display = "inline-block";
    return false;
}

/* checks gender */
function gender_validation(gender){
	if(checkGender(gender)){
		document.getElementById('genderError').style.display = "none";
		return true;
	}
	else {
		document.getElementById('genderError').style.display = "inline-block";
		return false;
	}
}