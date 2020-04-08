<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guided Play</title>
        <script src="js/formValidation.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="css/theme.css">
        
</head>
<body>
        <h1>Home Page</h1>
        
        <nav>
                <a href="index.php">Home</a>
                <a href="html/home_student.html">Student Home</a>
                <a href="html/home_teacher.html">Teacher Home</a>
                <a href="html/home_researcher.html">Researcher Home</a>
                <a href="html/home_admin.html">Admin Home</a>
        </nav>

        Welcome to our homepage: <?php echo $_SERVER['HTTP_HOST']; ?>
        
        <br>

        <!-- <p>
                <?php include "php/requests/login.php"; ?>
        </p> -->
        <form action ="php/requests/login.php" method="post" id="post-form" >
        <h2>Log In</h2>
                <div>
                        <label for="username">username</label>
                        <input type="text" id="uname" name="uname"/>
                        <span class="error-message" id="usernameError">username required</span>
                        <br/>
                        
                        <label for="password">password</label>
                        <input type="text" id="pass" name="pass"/>
                        <span class="error-message" id="passwordError">password required</span>
                        <br/>
                        <br/><br/>
                        <input type="submit" value="Log In" name="submit">
                </div>
        </form>

        <form action ="#" method="post" id="post-form" onsubmit="return validateForm(this);">
      
        <h2>Sign Up</h2>
            <div>

                <label for="accountType">account type</label>
                <select id="accountType" name="accountType" height="50px">
                        <option value="student">Student</option>
                        <option value="teacher">Teachers</option>
                        <option value="community">Community</option>
                        <option value="admin">Administrator</option>
                        <option value="reseacher">Researcher</option>
                </select>
                        

                <label for="username">username</label>
                <input type="text" id="sname" name="sname"/>
                <span class="error-message" id="username2Error">username required</span>
                
                <br/>
                <label for="password">password</label>
                <input type="text" id="pwd" name="pwd1"/>
                <br/>
                <label for="password">confirm password</label>
                <input type="text" id="pwd" name="pwd2"/>
                <br/>
                
                <label for="dateofbirth">date of birth</label>
                <input type="date" id="dob" name="dob"/>
                <br/>
                
                
                <label for="dateofbirth">date of birth</label>
		<input type="text" id="dob2" name="dob2" placeholder="DD/MM/YYYY"/>
		<span class="error-message" id="dobError">Date of Birth required</span>
		<span class="error-message" id="dobFormatError">Check date format</span>
		<span class="error-message" id="dobInputError">Check date input</span>
                <br/>
                
                <label for="gender">gender</label>
                <input type="radio" name="male" id="male">
                <label for="male">male</label>
                <input type="radio" name="female" id="female">
                <label for="female">female</label>
                
                <br/><br/>
                <input type="submit" value="Sign Up">
            </div>
        </form>    

      </body>

        
        
</body>
</html>