 

function validateLogInForm() 
{
     var valid = true;      

     if(!defaultValidation("logIn_username")){
        valid = false;
     }
                 
     if(!defaultValidation("logIn_password")){
         valid = false;
     }

     return valid;
}

function validateSignUpForm() 
{
        var valid = true;
		var signuppass = document.getElementById("signUp_password");

        if(!defaultValidation("signUp_username")){
            valid = false;
        }
                
        if(!checkGender()){
            valid = false;
        }
		
		if(!ageInput()){
			valid = false;
		}
		
		if(!checkPassword(signuppass)){
			valid = false;
		}
		
		if(!confirmpassword_validation()){
			valid = false;
		}	
        
        return valid;
}

/*Dont add or change anything*/
function defaultValidation(elementId) 
{ 
    var input = document.getElementById(elementId);
    var error = document.getElementById(elementId + "_error");
    if(checkRequired(input)){
        error.style.display = "none";
        return true;
    }
    else {
        error.style.display = "inline-block";
        return false;
    }
}



 	 
/*select radio button*/
function checkGender(){
        var radio1 = document.getElementById('signUp_male').checked;
        var radio2 = document.getElementById('signUp_female').checked;
        var error = document.getElementById('signUp_gender_error');
        
        if((radio1=="")&&(radio2=="")){
            error.style.display = "inline-block";
            return false;
        }
        error.style.display = "none";
        return true;
}

/*checks textbox empty */
function checkRequired(val) { 
        var val_len = val.value.length;
        if (val_len == 0 || val.value ==  null) {
                val.focus();
                return false;
        }
        return true;
}

/*check password between 6~20*/
function checkPassword(inputTxt)
{
	var paswd= /^(?=.*[0-9])(?=.*[a-zA-Z])(?=\S+$).{6,20}$/;
	var signup_paswd = inputTxt.value;
	var paswdError = document.getElementById('signUp_password_error');
	
	if(!inputTxt.value.match(paswd)){
		paswdError.style.display = "block";
		return false;
	}
		paswdError.style.display = "none";
		return true;
	
} 

/*check re-enter password match*/
function confirmpassword_validation(){
	var password = document.getElementById("signUp_password").value;
	var confirmPassword = document.getElementById("signUp_confirmPassword").value;
    var cpError = document.getElementById('signUp_confirmPassword_error');
	
	if (password != confirmPassword) {
			cpError.style.display = "block";
			return false;
	}
	cpError.style.display = "none";
	return true;
}

/*check age*/
function ageInput(){
	var age = document.getElementById("signUp_age").value;
	var ageInputError = document.getElementById('signUp_age_error');
	
	if (isNaN(age) || age < 15 || age > 100) {
		ageInputError.style.display = "inline-block";
		return false;
	}

		ageInputError.style.display = "none";
		return true;
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




/*check dob format*/
function checkDate(inputText) 
{
        var checkText = /^\d{2}\/\d{2}\/\d{4}$/; //defines the format of XX/XX/XXXX (X = numbers 0 - 9)
        var date = inputText.value;
        document.getElementById('dobInputError').style.display = "none";
        if(checkRequired(inputText)){
                document.getElementById('dobError').style.display = "none";

                if(inputText.value.match(checkText)){
                        numbers = date.split('/');
                        document.getElementById('dobFormatError').style.display = "none";
                        if(numbers[0] > 0 && numbers[0] <= 31 && numbers[1] > 0 && numbers[1] <= 12 && numbers[2] > 1900) { //checks for correct dates where day is 1 - 31, month 1-12 and year is > 19000
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