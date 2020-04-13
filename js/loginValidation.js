function validateForm() 
{
	var valid = true;
	var email = document.getElementById("uemail").value;
	var username = document.getElementById("uname");
	var passw = document.getElementById("upass");

		
	if(!checkEmail(email)){
		valid = false;
	}
	
	if(!LoginUsername_validation(username)){
		valid = false;
    }
	
	if(!LoginPassword_validation(passw)){
		valid = false;
    }
	
	return valid;
}

/*checks textbox empty */
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

/*check email*/
function checkEmail(email){
	var checkText = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; //defining the format of the email
	
	if(email.length != 0){
		if(email.match(checkText)){
			document.getElementById('EmailError').style.display = "none";
			return true;
		}
		else {
			document.getElementById('EmailError').style.display = "inline-block";
			return false;
		}
	}
	document.getElementById('EmailError').style.display = "none";
	return true;
}

/*checks login username */
function LoginUsername_validation(username) 
{ 
	if(checkRequired(username))
	{
		document.getElementById('usernameError').style.display = "none";
		return true;
	}
	else 
	{
		document.getElementById('usernameError').style.display = "block";
		return false;
	}
}

/*checks login password*/
function LoginPassword_validation(passw) 
{ 
	if(checkRequired(passw))
	{
		document.getElementById('passwordError').style.display = "none";
        return true;
    }
    else 
	{
		document.getElementById('passwordError').style.display = "block";
        return false;
    }
}