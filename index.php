<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="" name="descriptison">
		<meta content="" name="keywords">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<title>Home</title>

		<link rel="stylesheet" type="text/css" href="libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>

    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		

    </head>
    <body>

	<main  class="vh-100 d-flex align-content-center flex-wrap">
		<div id="main_index" class="container col-7">
			<div class="container">
				<div class="row">
						<h1 class="col">Welcome To Greenscapes. Environment. Experience. Survey. and Experiments</h1>
						
				</div>
			</div>
			
	
			
		<div class="container" id="login">
			<div class="row">
				<div class="col-sm-5">
					<div class="login100-pic js-tilt center" data-tilt>
						<img src="images/GEESE4.gif" alt="IMG">
					</div>
				</div>

				<div class="col-sm-7">
					<h2>Log In</h2>
					<div class="form-group row">
						<label class="col-sm-3" for="logIn_username" >Username<span class="required">*</span></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" id="logIn_username" name="uname" placeholder="Username"/>
							<span class="invalid-feedback" id="logIn_username_error">Username required</span>
						</div>
					</div>
		
					<div class="form-group row">
						<label class="col-sm-3 col-form-label" for="logIn_password">Password<span class="required">*</span></label>
						<div class="col-sm-7">
							<input  class="form-control" type="password" id="logIn_password" name="pass" placeholder="Password"/>
							<span class="invalid-feedback" id="logIn_password_error">Password must be within 6~20 characters (at least 1 uppercase & 1 numeric)</span>
						</div>
					</div>
		
					<div class="form-group row">
						<div class="col-sm-10" align="right">
							<button class="btn btn-primary" onclick="ProcessLogIn()">Log In</button>
							<button class="btn btn-primary" onclick="SwitchToSignUp()">Sign Up</button>
						</div>
					</div>
				</div>	
				<!-- 
	
					NOTE:
					When you stop using form tags and submit via button onClick, pressing enter on the last
					field no longer submits the form.
	
					-->
			</div>
		</div>
			<div class="container" id="signup">
			<div class="row">
				<div class="col-sm-5">
						<div class="login100-pic js-tilt " data-tilt>
						<img src="images/GEESE4.gif" alt="IMG">
					</div>
				</div>
				<div class="col-sm-7">
					<div class="d-flex">
						<button class="btn btn-primary-outline" onclick="SwitchToLogin()">
							<i class="fa fa-chevron-left"></i>
						</button>
						<h2>Sign Up</h2>
					</div>


					<div class="form-group row">
						<label class="col-sm-3 col-form-label" for="signUp_username">Username<span class="required">*</span></label>
						<div class="col-sm-7">
							<input class="form-control" type="text" id="signUp_username" name="sname"/>
							<span class="invalid-feedback" id="signUp_username_error">Username required</span>
						</div>
					</div>
		
					<div class="form-group row">
						<label class="col-sm-3 col-form-label" for="signUp_password">Password<span class="required">*</span></label>
						<div class="col-sm-7">
							<input class="form-control" type="password" id="signUp_password" name="pass" />
							<span class="invalid-feedback" id="signUp_password_error">Password must be within 6~20 characters (at least 1 uppercase & 1 numeric)</span>
						</div>
					</div>
		
					<div class="form-group row">
						<label class="col-sm-3 col-form-label" for="signUp_confirmPassword">Confirm password<span class="required">*</span></label>
						<div class="col-sm-7">
							<input class="form-control" type="password" id="signUp_confirmPassword"/>
							<span class="invalid-feedback" id="signUp_confirmPassword_error">Password do not matched</span>
						</div>
					</div>
		
					<!-- <div class="form-group row">
						<label class="col-sm-2 col-form-label" for="signUp_age">Age<span class="required">*</span></label>
						<div class="col-sm-8">
							<input class="form-control" type="text" id="signUp_age" name="age"/>
							<span class="invalid-feedback" id="signUp_age_error">Enter Age between 5-110</span>
						</div>
					</div> -->
		
					<!-- <div class="form-group row">
						<legend class="col-form-label col-sm-2 pt-0">Gender<span class="required">*</span></legend>
						<div class="col-sm-10">
							<div class="form-check form-check-inline">
								<input class="form-check-input signUp_gender" type="radio" name="signUp_gender" id="signUp_male" value="male">
								<label class="form-check-label" for="signUp_male">Male</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input signUp_gender" type="radio" name="signUp_gender" id="signUp_female" value="female">
								<label class="form-check-label" for="signUp_female">Female</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input signUp_gender" type="radio" name="signUp_gender" id="signUp_other" value="other">
								<label class="form-check-label" for="signUp_other">Other</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input signUp_gender" type="radio" name="signUp_gender" id="signUp_notSay" value="notSay">
								<label class="form-check-label" for="signUp_notSay">Rather not say</label>
							</div>
							<span class="invalid-feedback" id="signUp_gender_error">Please enter your gender.</span>
						</div>
					</div>
					-->
					<div class="form-group row">
						<div class="col-sm-10">
							<button class="btn btn-primary" onclick="ProcessSignUp()">Sign Up</button>
						</div>
					</div>
					
				</div>
				
				<span id="output"></span>
			</div>
		</div>
	</main>

	</body>
		<!-- JS -->
		<!-- Libraries -->
		<!-- <script type="text/javascript" src="libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script> -->
		<!-- <script type="text/javascript" src="libs/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script> -->
		<!-- <script type="text/javascript" src="libs/DataTables-1.10.20/js/jquery.dataTables.min.js"></script> -->
		<!-- <script type="text/javascript" src="libs/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script> -->

		<!-- Our Code -->
		<script src="js/processForm.js"></script>
		<script src="js/phpManager.js"></script>
		<script src="js/main.js"></script>
		
		<!---tilt image -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/tilt.jquery.min.js"></script>



</html>
