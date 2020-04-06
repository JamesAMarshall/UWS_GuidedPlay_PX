 function validateForm() 
        {
            var valid = true;
            var username = document.getElementById("uname");
            var username2 = document.getElementById("sname");
            var password = document.getElementById("pass");
            var date = document.getElementById("dob2");

            if(!LoginUsername_validation(username)){
               valid = false;
            }
            if(!LoginPassword_validation(password)){
                valid = false;
            }
              if(!SignupUsername_validation(username2)){
               valid = false;
            }
            if(!checkDate(date)) {
                valid = false;
            }

            return valid;



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


        /*checks login username */
        function LoginUsername_validation(username) 
        { 
                if(checkRequired(username)){
                        document.getElementById('username2Error').style.display = "none";
                        return true;
                }
                else {
                        document.getElementById('username2Error').style.display = "inline-block";
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
                        document.getElementById('usernameError').style.display = "none";
                        return true;
                }
                else {
                        document.getElementById('usernameError').style.display = "inline-block";
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

