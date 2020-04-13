<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login/SignUp Screen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
	<!-- Vendor CSS Files -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<!--login page css-->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	
	<!-- loginValidation javascript -->
	<script src="js/loginValidation.js"></script>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
		<!--navigation setting-->
		<nav class="nav-menu">
        <ul>
			<li><a href="index.php">Home</a></li>		
			<li> <a href="html/home_student.html">Student Home</a></li>	
			<li> <a href="html/home_teacher.html">Teacher Home</a></li>	
			<li> <a href="html/home_researcher.html">Researcher Home</a></li>	
			<li> <a href="html/home_admin.html">Admin Home</a></li>	
		</ul>
        </nav>
		
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
					<span class="login100-form-title">
						Welcome To Guided Learning Garden
					</span>
				</div>
				
				<form class="login100-form validate-form" action="php/requests/login.php" method="post" id="post-form" onsubmit="return validateForm(this);">
					<span class="login100-form-title">
						Member login
					</span>
					<!--email-->
					<div class="wrap-input100">
						<input class="input100" type="text" id="uemail" name="uemail" placeholder="Email">
						<span class="error-message symbol-input100" id="EmailformatError">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							Enter valid email format: ex@abc.xyz
						</span>
					</div>
					
					<!--username-->
					<div class="wrap-input100">
						<input class="input100" type="text" id="uname" name="uname" placeholder="Username">
						<span class="error-message symbol-input100" id="usernameError">
							<i class="fa fa-user" aria-hidden="true"></i>
							USERNAME REQUIRED
						</span>

					</div>
					
					<!--password-->
					<div class="wrap-input100">
						<input class="input100" type="password" id="upass" name="upass" placeholder="Password">
						<span class="error-message symbol-input100" id="passwordError">
							<i class="fa fa-lock" aria-hidden="true"></i>
							PASSWORD REQUIRED
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
	
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-18">
						<a class="txt2" href="html/signup.html">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	
	

	
	<!--vendor Main jquery files-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	
	<!--Vendor bootstrap files -->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>


</body>

<!-- loginValidation javascript -->
<script type="text/javascript">
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
			document.getElementById('EmailformatError').style.display = "none";
			return true;
		}
		else {
			document.getElementById('EmailformatError').style.display = "inline-block";
			return false;
		}
	}
	document.getElementById('EmailformatError').style.display = "none";
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
</script>
</html>