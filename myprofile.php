<?php
    include 'Sidebar.html';
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>My Profile</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br><br><br>
        <div class="main">
            <div class="register">
                <h2>My Profile</h2>
                <form action="fetchprofile.php" id="register" method="post">
                   <label>First Name:</label>
                    <input type="text" name="fname"
                    id="name" value ="<?php echo $row['fname']?>">
                    <br>
                    <label>Last Name:</label>
                    <input type="text" name="lname"
                    id="name" value ="<?php echo $row['lname']?>">
                    <br>
                    <label>Age:</label>
                    <input type="number" name="age"
                    id="name" value ="<?php echo $row['age']?>">
                    <br>
                    <label>Email Address:</label>
                    <input type="email" name="email"
                    id="name" value ="<?php echo $row['email']?>">
                    <br>
                    <label>Gender:</label>
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="male" value ="<?php echo $row['male']?>">
                    &nbsp;
                    <span id="male">Male</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="gender" id="female" value ="<?php echo $row['female']?>">
                    &nbsp;
                    <span id="female">Female</span>
                    <br>
                   <!-- <input type="submit" value="Submit" name="submit" id="submit"> -->
                   <!-- <input type="submit" value="Edit" name="update" id="submit"> -->
                </form>
            </div>
     </div>
        
    </body>
</html>