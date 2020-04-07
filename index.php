<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Log In Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/theme.css">
        <script src="/javascript/formValidation.js"></script>
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
        <br/>
		
		
        <!-- Welcome to our homepage: <?php echo $_SERVER['HTTP_HOST']; ?> -->
        <br>
        <p>
			<?php include "php/main.php"; ?>
        </p>
		
		
		
		
		
        <!--<form action ="#" method="post" id="post-form" onsubmit="return validateForm(this);">-->
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
                

         
            </div>
            <div>
                <label for="accountType">account type</label>
                    <select id="accountType" name="accountType" height="50px">
                        <option value="student">Student</option>
                        <option value="teacher">Teachers</option>
                        <option value="community">Community</option>
                        <option value="admin">Administrator</option>
                        <option value="reseacher">Researcher</option>
                    </select>
                
                <br/><br/>
                <input type="submit" value="Log In">
            </div>
  
      
        <h2>Sign Up</h2>
            <div>
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
      
      

      
      <script type="text/javascript">
       
      </script>
    
</html>
