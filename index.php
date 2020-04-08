<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <script src="js/formValidation.js"></script>
</head>
    <body>
		<header id="header" class="fixed-top">
		<div class="container d-flex">
        <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Welcome to Guided Play</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>
        
        <form action ="php/requests/login.php" method="post" id="post-form" onsubmit="return validateLogInForm(this);">
        <nav class="nav-menu d-none d-lg-block">
        <ul>
			<li class="active"><a href="index.php">Home</a></li>		
			<li> <a href="html/home_student.html">Student Home</a></li>	
			<li> <a href="html/home_teacher.html">Teacher Home</a></li>	
			<li> <a href="html/home_researcher.html">Researcher Home</a></li>	
			<li> <a href="html/home_admin.html">Admin Home</a></li>	
			<li class="get-started"><a href="index.php">Sign Out</a></li>
		</ul>
        </nav>
        <br/>
		<br/>
		<br/>
		<h2>Log In</h2>
		<p>
		<span class="required">*</span>Required field
		</p>
            <div>
                <label for="username">username</label>
                <input type="text" id="uname" name="uname"/>
				<span class="required">*</span>
                <span class="error-message" id="usernameError">username required</span>
                <br/>
                
                <label for="password">password</label>
                <input type="password" id="pass" name="pass"/>
				<span class="required">*</span>
                <span class="error-message" id="passwordError">password required</span>
                <br/>

            </div>
            <div>

                
                <br/>
                <input type="submit" value="Log In" name="submit">
				<br/>
				<br/>
            </div>
        </form>
        <form action ="php/requests/login.php" method="post" id="post-form" onsubmit="return validateForm(this);">
        <h2>Sign Up</h2>
		<br/>
            <div>
                <label for="username">username</label>
                <input type="text" id="sname" name="sname"/>
				<span class="required">*</span>
                <span class="error-message" id="username2Error">username required</span>
                  
                <br/>
				
                <label for="password">password</label>
                <input type="password" id="pwd1" />
				<span class="required">*</span>
				<br>			
                <label for="password">confirm password</label>
                <input type="password" id="pwd2"/>
				<span class="required">*</span>
				<span class="error-message" id="pwd2Error">Password do not matched</span>

                <br/>
                
                <label for="accountType">account type</label>
                <select id="accountType" name="accountType" height="50px">
                        <option value="default"selected disabled></option>
                        <option value="student">Student</option>
                        <option value="teacher">Teachers</option>
                        <option value="community">Community</option>
                        <option value="admin">Administrator</option>
                        <option value="reseacher">Researcher</option>
                </select>
                                        
                <label for="dateofbirth">date of birth</label>
				<input type="text" id="dob2" name="dob2" placeholder="DD/MM/YYYY"/>
				<span class="required">*</span>
				<span class="error-message" id="dobError">Date of Birth required</span>
				<span class="error-message" id="dobFormatError">Check date format</span>
				<span class="error-message" id="dobInputError">Check date input</span>
                <br/>
                
                <label for="gender">gender</label>
                <input type="radio" name="gender" id="male">
                <label for="male">male</label>
                <input type="radio" name="gender" id="female">
                <label for="female">female</label>
				<span class="required">*</span>
				<span class="error-message" id="genderError"> Please Select a gender</span>
				<br>
				
                <input type="submit" value="Sign Up">
            </div>
        </form>    

      </body>
    
</html>
