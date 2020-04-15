<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Bootstrap css Files -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <script src="js/formValidation.js"></script>
  <script src="js/toggle.js"></script>
</head>

<body>

    <div class="container">
        <div class="pt-sm-5"> 
            <h1 class="text-light"><a href="index.html">Welcome to Guided Play</a></h1>
            <nav class="nav-menu">
            <ul>
                <li><a href="index.php">Home</a></li>		
                <li><a href="html/home_school.html">School Home</a></li>	
                <li><a href="html/home_research.html">Research Home</a></li>	
            </ul>
            </nav>
        </div>
    </div>

    <br>
    <!-- <span class="required">*</span><span>Required field</span> -->
    <br>

    <div class="container">
        <div class="row">

			<div class="col">
				<div id="login">
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
							<span class="error-message" id="logIn_password_error">Password Required</span>

							<br>
							
							<button type="submit" class="btn btn-outline-success">Log In</button>
							<br/><br/>
							
							<!-- hide login Page -->
							<button type="button" class="btn btn-outline-success" onclick="signupFunction()">
								Create An Account
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col">
				<div id="sign">
					<form method="post" id="signUp-form" onsubmit="return validateSignUpForm(this);">
					<h2>Sign Up</h2>
						<div>
							<label for="signUp_username">Username</label>
							<input type="text" id="signUp_username" name="sname"/>
							<span class="required">*</span>
							<span class="error-message" id="signUp_username_error">Username required</span>
							
							<br/>
						<!-- signup password-->
							<label for="signUp_password">Password</label>
							<input type="password" id="signUp_password" />
							<span class="required">*</span>
							<br>	
							<span class="error-message" id="signUp_password_error">password must be within 6~20 characters (at least 1 uppercase & 1 numeric)</span>
			
								
						<!--confirm password-->
							<label for="signUp_confirmPassword">Confirm Password</label>
							<input type="password" id="signUp_confirmPassword"/>
							<span class="required">*</span>
							<span class="error-message" id="signUp_confirmPassword_error">Passwords do not match</span>

							<br/>
							
							<!-- FIX: Dont have drop down, change account management
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
							-->
							<!-- age -->
							<label for="signUp_age">Age</label>
							<input type="text" id="signUp_age" name="age"/>
							<span class="required">*</span>
							<span class="error-message" id="signUp_age_error">Enter Age between 15~100</span>
							
							<br>
							
							<label for="signUp_gender">Gender</label>
							<input type="radio" name="gender" id="signUp_male">
							<label for="signUp_male">Male</label>
							<input type="radio" name="gender" id="signUp_female">
							<label for="signUp_female">Female</label>
							<span class="required">*</span>
							<span class="error-message" id="signUp_gender_error"> Pick a gender</span>
							
							<br>
							<button type="submit" class="btn btn-outline-success">Sign Up</button>
						</div>
					</form>
				</div>
			</div>   
        </div>
    </div>

</body>  
</html>
