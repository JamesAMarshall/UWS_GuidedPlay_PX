

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Guided Play</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- STYLING -->
    <!-- used for styling error message -->
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <!-- unused, for now 
    <link href="css/style.css" rel="stylesheet"> -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- VALIDATION -->
    <script src="js/formValidation.js"></script>
</head>

<body>

    <!-- pt-sm-5 is top padding -->
    <div class="container pt-sm-5">
        <div class="row">

            <div class="col-sm-6">
                <h1><a href="index.php">Welcome to Guided Play</a></h1>
            </div>

            <div class="col-sm-6 pt-sm-2">
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/home_school.html">School Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/home_research.html">Research Home</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <br>
    <!-- <span class="required">*</span><span>Required field</span> -->
    <br>
  
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Log In</h2>
                <form method="post" id="logIn-form" onsubmit="return validateLogInForm(this);">

                    <div class="form-group row">

                        <label for="logIn_username" class="col-sm-2 col-form-label">
                            Username<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="logIn_username" placeholder="Username" name="uname">
                          <!-- Here I'm using 'invalid-feedback', bootstrap's error message style: -->
                          <div class="invalid-feedback" id="logIn_username_error">Please enter your username.</div>  
                          <!-- using the error message style we made ourselves:
                            <span class="error-message" id="logIn_username_error">Please enter your username.</span> -->
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="logIn_password" class="col-sm-2 col-form-label">
                            Password<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" id="logIn_password" placeholder="Password" name="pass">
                          <div class="invalid-feedback" id="logIn_password_error">Please enter your password.</div>  
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Log In" name="logIn_submit">
                        </div>
                    </div>
                </form>
            </div>


            <div class="col">
                <h2>Sign Up</h2>
                <form method="post" id="signUp-form" onsubmit="return validateSignUpForm(this);">
                    <div class="form-group row">
                        <label for="signUp_username" class="col-sm-2 col-form-label">
                            Username<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="signUp_username" placeholder="Username" name="sname">
                            <div class="invalid-feedback" id="signUp_username_error">Please enter your username.</div>  
                        </div>  
                    </div>


                    <div class="form-group row">
                        <label for="signUp_password" class="col-sm-2 col-form-label">
                            Password<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="signUp_password" placeholder="Password">
                            <div class="invalid-feedback" id="signUp_password_error">Passwords do not match.</div>  
                        </div>  
                    </div>

                    <div class="form-group row">
                        <label for="signUp_confirmPassword" class="col-sm-2 col-form-label">
                            Confirm Password<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="signUp_confirmPassword" placeholder="Password">
                            <div class="invalid-feedback" id="signUp_confirmPassword_error">Passwords do not match.</div>  
                        </div>  
                    </div>

                    <div class="form-group row">
                        <label for="signUp_age" class="col-sm-2 col-form-label">
                            Age in years<span class="required">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="signUp_age" placeholder="Age">
                            <div class="invalid-feedback" id="signUp_age_error">Please enter your age.</div>
                        </div>
                    </div>
                
                    <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                          <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="signUp_gender" id="signUp_male" value="option1">
                                    <label class="form-check-label" for="signUp_male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="signUp_gender" id="signUp_female" value="option2">
                                    <label class="form-check-label" for="signUp_female">
                                        Female
                                    </label>
                                </div>
                                <div class="invalid-feedback" id="signUp_gender_error">Please enter your gender.</div>
                          </div>
                        </div>
                      </fieldset>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>