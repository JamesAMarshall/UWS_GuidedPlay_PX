 

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

/*check dob format - to scrap :( */
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