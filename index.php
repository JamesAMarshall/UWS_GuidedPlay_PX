<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Guided Play</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Styling -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <!-- <link href="css/style.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="css/theme.css"> -->

  <!-- Validation -->
  <script src="js/formValidation.js"></script>
</head>

<body>

    <!-- pt-sm-5 is top padding -->
    <div class="container pt-sm-5">
        <h1><a href="index.php">Welcome to Guided Play</a></h1>
        <nav class="nav-menu">
            <a href="index.php">Home</a>	
            <a href="html/home_school.html">School Home</a>	
            <a href="html/home_research.html">Research Home</a>
        </nav>
    </div>

    <br>
    <!-- <span class="required">*</span><span>Required field</span> -->
    <br>

    <div class="container">

        <div class="row">

            <div class="col">
                <h2>Log In</h2>
                <form method="post" id="logIn-form" onsubmit="return validateLogInForm(this);">
                    <div>
                        <label for="logIn_username">Username</label>
                        <input type="text" id="logIn_username" name="uname"/>
                        <span class="required">*</span>
                        <span class="error-message" id="logIn_username_error">Username required</span>

                        <br>

                        <label for="logIn_password">Password</label>
                        <input type="password" id="logIn_password" name="pass"/>
                        <span class="required">*</span>
                        <span class="error-message" id="logIn_password_error">Password required</span>

                        <br>
                        
                        <input type="submit" value="Log In" name="logIn_submit">
                    </div>
                </form>
            </div>

            <div class="col">
                <h2>Sign Up</h2>
                <form method="post" id="signUp-form" onsubmit="return validateSignUpForm(this);">
                    <div>
                        <label for="signUp_username">Username</label>
                        <input type="text" id="signUp_username" name="sname"/>
                        <span class="required">*</span>
                        <span class="error-message" id="signUp_username_error">Username required</span>
                        
                        <br/>
                        
                        <label for="signUp_password">Password</label>
                        <input type="password" id="signUp_password" />
                        <span class="required">*</span>
                        <span class="error-message" id="signUp_password_error">Passwords do not match</span>
                        
                        <br>		
                            
                        <label for="signUp_confirmPassword">Confirm Password</label>
                        <input type="password" id="signUp_confirmPassword"/>
                        <span class="required">*</span>
                        <span class="error-message" id="signUp_confirmPassword_error">Passwords do not match</span>

                        <br/>
                        
                        <!-- FIX: Dont have drop down, change account management -->
                        <label for="accountType">Account Type</label>
                        <select id="accountType" name="accountType" height="50px">
                                <option value="default"selected disabled></option>
                                <option value="student">Student</option>
                                <option value="teacher">Teachers</option>
                                <option value="community">Community</option>
                                <option value="admin">Administrator</option>
                                <option value="reseacher">Researcher</option>
                        </select>
                        
                        <br>

                        <!-- Validate as Age not DOB -->
                        <label for="signUp_age">Age</label>
                        <input type="text" id="signUp_age" name="age"/>
                        <span class="required">*</span>
                        <span class="error-message" id="signUp_age_error">Date of Birth Required</span>
                        
                        <br>
                        
                        <label for="signUp_gender">Gender</label>
                        <input type="radio" name="gender" id="signUp_male">
                        <label for="signUp_male">Male</label>
                        <input type="radio" name="gender" id="signUp_female">
                        <label for="signUp_female">Female</label>
                        <span class="required">*</span>
                        <span class="error-message" id="signUp_gender_error"> Please select a gender</span>
                        
                        <br>
                        
                        <input type="submit" value="Sign Up" name="signUp_submit">
                    </div>
                </form> 
            </div>   

        </div>

    </div>

</body>  
</html>
