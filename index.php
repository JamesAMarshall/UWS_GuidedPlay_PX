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

		<div class="container col-3">
			<div class="row">
					<h1 class="col"><a href="index.php">Welcome to Guided Play</a></h1>
				<a class="col-align-self-end col-3 col-form-label" href = "php/requests/logout.php">Sign Out</a>
			</div>
		</div>


		<div class="container col-3">
			<h2>Log In</h2>
			<form action="php/requests/login.php" method="post" id="logIn-form" onsubmit="return validateLogInForm(this);">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="logIn_username" >Username<span class="required">*</span></label>
					<div class="col-sm-8">
						<input class="form-control" type="text" id="logIn_username" name="uname" placeholder="Username"/>
						<span class="invalid-feedback" id="logIn_username_error">username required</span>
					</div>
				</div>


				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="logIn_password">Password<span class="required">*</span></label>
					<div class="col-sm-8">
						<input  class="form-control" type="password" id="logIn_password" name="pass" placeholder="Password"/>
						<span class="invalid-feedback" id="logIn_password_error">password required</span>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<input class="btn btn-primary" type="submit" value="Log In" name="logIn_submit">
					</div>
				</div>
					
					
			</form>
		</div>

		
		<div class="container col-3">
			<h2>Sign Up</h2>
			<form action="php/requests/signup.php" method="post" id="signUp-form" onsubmit="return validateSignUpForm(this);">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="signUp_username">username<span class="required">*</span></label>
					<div class="col-sm-8">
						<input class="form-control" type="text" id="signUp_username" name="sname"/>
						<span class="invalid-feedback" id="signUp_username_error">username required</span>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="signUp_password">password<span class="required">*</span></label>
					<div class="col-sm-8">
						<input class="form-control" type="password" id="signUp_password" name="pass" />
						<span class="invalid-feedback" id="signUp_password_error">Password do not matched</span>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="signUp_confirmPassword">confirm password<span class="required">*</span></label>
					<div class="col-sm-8">
						<input class="form-control" type="password" id="signUp_confirmPassword"/>
						<span class="invalid-feedback" id="signUp_confirmPassword_error">Password do not matched</span>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="signUp_age">Age<span class="required">*</span></label>
					<div class="col-sm-8">
						<input class="form-control" type="text" id="signUp_age" name="age"/>
						<span class="invalid-feedback" id="signUp_age_error">Enter Age between 15~100</span>
					</div>
				</div>

				<div class="form-group row">
					<legend class="col-form-label col-sm-2 pt-0">Gender<span class="required">*</span></legend>
					<div class="col-sm-10">
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="signUp_gender" id="signUp_male" value="male">
							<label class="form-check-label" for="signUp_male">Male</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="signUp_gender" id="signUp_female" value="female">
							<label class="form-check-label" for="signUp_female">Female</label>
						</div>
						<div class="invalid-feedback" id="signUp_gender_error">Please enter your gender.</div>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<input class="btn btn-primary" type="submit" value="Sign Up" name="signUp_submit">
					</div>
				</div>
					
			</form>
		</div>
		
		</body>
    
</html>
