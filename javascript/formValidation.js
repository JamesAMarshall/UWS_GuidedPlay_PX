 function validateForm() 
        {
            var valid = true;
            var username = document.getElementById("uname");
            var username2 = document.getElementById("sname");
            var password = document.getElementById("pass");
            var date = document.getElementById("dob2");
			var gender = document.getElementById("male");
			var gender = document.getElementById("female");
			
			var a = document.getElementById("pwd1").value;
			var b = document.getElementById("pwd2").value;
			
            if(!LoginUsername_validation(username)){
               valid = false;
            }
			
            if(!LoginPassword_validation(password)){
                valid = false;
            }
			
            if(!SignupUsername_validation(username2)){
               valid = false;
            }
			
			if(!gender_validation(gender)){
				valid = false;
			}
			
			
            if(!checkDate(date)) {
                valid = false;
            }
			
			
			if(!confirmpassword_validation(a)){
				valid = false;
			}
			
			if(!confirmpassword_validation(b)){
				valid = false;
			}
	
			return valid;
		}
		
		/*check password*/
		function confirmpassword_validation(){
		
			var password = document.getElementById("pwd1").value;
			var confirmPassword = document.getElementById("pwd2").value;
			if (password != confirmPassword) {
				document.getElementById('pwd2Error').style.display = "inline-block";
				return false;
			}
			document.getElementById('pwd2Error').style.display = "none";
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

        /*checks login username */
        function LoginUsername_validation(username) 
        { 
                if(checkRequired(username)){
                        document.getElementById('usernameError').style.display = "none";
                        return true;
                }
                else {
                        document.getElementById('usernameError').style.display = "inline-block";
                        return false;
                }
        }
        /* checks login password */
        function LoginPassword_validation(password) 
        { 
                if(checkRequired(password)){
                        document.getElementById('passwordError').style.display = "none";
                        return true;
                }
                else {
                        document.getElementById('passwordError').style.display = "inline-block";
                        return false;
                }
        }
        /* check signup username */
        function SignupUsername_validation(username2) 
        { 
                if(checkRequired(username2)){
                        document.getElementById('username2Error').style.display = "none";
                        return true;
                }
                else {
                        document.getElementById('username2Error').style.display = "inline-block";
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