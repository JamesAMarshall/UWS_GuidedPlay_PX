 

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
        

        if(!defaultValidation("signUp_username")){
            valid = false;
        }
                
        if(!confirmpassword_validation()){
            valid = false;
        }

        if(!checkGender()){
            valid = false;
		}
		
		if(!ageInput()){
            valid = false;
        }
        
        return valid;
}


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

/*check password*/
function confirmpassword_validation(){

    var password = document.getElementById("signUp_password");
    var confirmPassword = document.getElementById("signUp_confirmPassword");
    var pError = document.getElementById('signUp_password_error');
    var cpError = document.getElementById('signUp_confirmPassword_error');

    if(!defaultValidation("signUp_password")){
        return false;
    }
    if(!defaultValidation("signUp_confirmPassword")){
        return false;
    }

    if (password.value != confirmPassword.value) {
           pError.style.display = "inline-block";
            return false;
    }
    
    cpError.style.display = "none";
    
    return true;
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