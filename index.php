<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Home Page</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords"> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- JS -->
        <script src="js/formValidation.js"></script>
		<script src="js/toggle.js"></script>


    </head>
    <body>

        <h1 class="text-light"><a href="index.php">Welcome to Guided Play</a></h1>
        
        <nav class="nav-menu">
            <ul>
                <li>
					<a href="index.php">Home</a>
				</li>		
                <li> 
					<a href="html/home_school.php">School Home</a>
				</li>	
                <li> 
					<a href="html/home_research.php">Research Home</a>
				</li>	
            </ul>
        </nav>

        <h2>Log In</h2>
        <form action="php/requests/login.php" method="post" id="logIn-form" onsubmit="return validateLogInForm(this);">

                <label for="logIn_username">username</label>
                <input type="text" id="logIn_username" name="uname"/>
				<span class="required">*</span>
                <span class="error-message" id="logIn_username_error">username required</span>

                <br>

                <label for="logIn_password">password</label>
                <input type="password" id="logIn_password" name="pass"/>
				<span class="required">*</span>
                <span class="error-message" id="logIn_password_error">password required</span>

                <br>
                
                <input type="submit" value="Log In" name="logIn_submit">
        </form>

        <h2>Sign Up</h2>
        <form action="php/requests/signup.php" method="post" id="signUp-form" onsubmit="return validateSignUpForm(this);">
                <label for="signUp_username">username</label>
                <input type="text" id="signUp_username" name="sname"/>
				<span class="required">*</span>
                <span class="error-message" id="signUp_username_error">username required</span>
                  
                <br/>
				
                <label for="signUp_password">password</label>
                <input type="password" id="signUp_password" name="pass" />
                <span class="required">*</span>
                <span class="error-message" id="signUp_password_error">Password do not matched</span>
                
                <br>		
                	
                <label for="signUp_confirmPassword">confirm password</label>
                <input type="password" id="signUp_confirmPassword"/>
				<span class="required">*</span>
				<span class="error-message" id="signUp_confirmPassword_error">Password do not matched</span>

                <br/>
                
                <br>

				<label for="signUp_age">Age</label>
				<input type="text" id="signUp_age" name="age"/>
				<span class="required">*</span>
				<span class="error-message" id="signUp_age_error">Enter Age between 15~100</span>
	
                <br/>
                
                <label for="signUp_gender">gender</label>
                <input type="radio" name="gender" id="signUp_male">
                <label for="signUp_male">male</label>
                <input type="radio" name="gender" id="signUp_female">
                <label for="signUp_female">female</label>
				<span class="required">*</span>
				<span class="error-message" id="signUp_gender_error"> Please Select a gender</span>
                
                <br>
				
                <input type="submit" value="Sign Up" name="signUp_submit">
        </form>    

        <h2><a href = "php/requests/logout.php">Sign Out</a></h2>

      </body>
    
</html>
