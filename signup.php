<?php
?>
<!Doctype html>
<html>
    <head>
        <title>Signup Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br><br>
        <div class="main">
            <div class="register">
                <h2>Sign Up Here</h2>
                <form action="signupconnect.php" id="register" method="post">
                   <label>First Name:</label>
                    <input type="text" name="fname"
                    id="name"  placeholder="Enter your First Name">
                    <br>
                    <label>Last Name:</label>
                    <input type="text" name="lname"
                    id="name" placeholder="Enter your Last Name">
                    <br>
                    <label>Gender:</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="male">
                    &nbsp;
                    <span id="male">Male</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="female">
                    &nbsp;
                    <span id="female">Female</span>
                    <br> 
                    <label>Email Address:</label>
                    <input type="email" name="email"
                    id="name" placeholder="Enter your Valid Email">
                    <br>
                    <label>Password:</label>
                    <input type="password" name="password"
                    id="password" placeholder="Enter your password">
                    <br>
                    <label>Confirm Password:</label>
                    <input type="password" name="password"
                    id="password" placeholder="Confirm your password">
                    <br>
                   <input type="submit" value="Add" name="submit" id="submit">
                </form>
            </div>
     </div>
        
    </body>
</html>
