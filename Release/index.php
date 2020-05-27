<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="libs/Bootstrap-4-4.4.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css"/>

</head>
<body class="d-flex justify-content-center py-5 vh-100">
	<main class="container d-flex flex-column justify-content-center align-items-center py-5">
		<section id="login_section" class="page">

			<div class="border border-secondary rounded w-100 mb-3">
				<h2 class=" px-2 py-1">Log In</h2>
			</div>

			<div id="" class="form-group">
				<input id="login_username" class="form-control" type="text" placeholder="Username" name="login-username">
				<span id="login_username_error" class="invalid-feedback pl-2">Username is required</span>
			</div>

			<div id="" class="form-group">
				<input id="login_password" class="form-control" type="password" placeholder="Password" name="login-password">
				<span id="login_password_error" class="invalid-feedback pl-2">Password must be within 6~20 characters (at least 1 uppercase & 1 numeric)</span>
			</div>

			<!-- <div id="" class="d-flex justify-content-end"> -->
				<button id="login_sumbit" class="btn btn-primary w-100 mb-2" type="submit" onclick="Login()">Log In</button>
				<button id="login_sumbit" class="btn btn-outline-secondary w-100" type="submit" onclick="GoToPage('signup_section')">Sign Up</button>
			<!-- </div> -->

		</section>

		<section id="signup_section" class="page d-none">

			<div class="border border-secondary rounded w-100 mb-3">
				<h2 class="px-2 py-1">Sign Up</h2>
			</div>

			<div id="" class="form-group">
				<input id="signup_username" class="form-control" type="text" placeholder="Username" name="signup-username">
				<span id="signup_username_error" class="invalid-feedback pl-2">Username is required</span>
			</div>

			<div id="" class="form-group">
				<input id="signup_password" class="form-control" type="password" placeholder="Password" name="signup-password">
				<span id="signup_password_error" class="invalid-feedback pl-2">Password must be within 6~20 characters (at least 1 uppercase & 1 numeric)</span>
			</div>

			<div id="" class="form-group">
				<input id="signup_confirmPassword" class="form-control" type="password" placeholder="Confirm Password" name="signup-confirmPassword">
				<span id="signup_confirmPassword_error" class="invalid-feedback pl-2">Password does not matched</span>
			</div>

			<!-- <div id="" class="d-flex justify-content-end"> -->
				<button id="signup_sumbit" class="btn btn-primary w-100 mb-2" type="submit" onclick="Signup()">Sign Up</button>
				<button id="login_sumbit" class="btn btn-outline-secondary w-100" type="submit" onclick="GoToPage('login_section')">Log In</button>
			<!-- </div> -->

		</section>
	</main>
</body>
		<!-- JS -->
		<!-- Libraries -->
		<!-- <script type="text/javascript" src="libs/jQuery-3.3.1/jquery-3.3.1.min.js"></script> -->
		<!-- <script type="text/javascript" src="libs/Bootstrap-4-4.1.1/js/bootstrap.min.js"></script> -->
		<!-- <script type="text/javascript" src="libs/DataTables-1.10.20/js/jquery.dataTables.min.js"></script> -->
		<!-- <script type="text/javascript" src="libs/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script> -->

		<!-- Our Code -->
		<script>page="index"</script>
		<script src="js/main.js"></script>
</html>