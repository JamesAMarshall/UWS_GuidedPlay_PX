<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Guided Play</title>
        
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

        <!-- Welcome to our homepage: <?php echo $_SERVER['HTTP_HOST']; ?> -->
        
        <br>

        <p>
                <?php include "php/main.php"; ?>
        </p>

        <h2>Log In</h2>

        <label for="">username</label>
        <input type="text">
        
        <label for="">password</label>
        <input type="password">

        <button>Log In</button>

        <br>

        <label for="accountType">account type</label>
        <select id="accountType" name="accountType">
                <option value="student">Student</option>
                <option value="teacher">Teachers</option>
                <option value="community">Community</option>
        </select>
        <br>

        <h2>Sign Up</h2>

        <label for="">username</label>
        <input type="text">
        <br>
        <label for="">password</label>
        <input type="password">
<br>
        <label for="">confirm password</label>
        <input type="password">
<br>
        <label for="">date of birth</label>
        <input type="text">
<br>
        <label for="">gender</label>
        <input type="text">



        <button>Sign Up</button>

        
        
</body>
</html>