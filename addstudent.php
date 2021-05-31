<?php
    include 'Sidebar.html';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Student Form</title>
        <link rel="stylesheet" href="style.css">
       
    </head>
    <body>
        <div class="main">
            <div class="register">
                <h2>ADD STUDENT</h2>
                <form action="studentconnect.php" id="register" method="POST">
                    <label>Student Name:</label>
                    <input type="text" name="name"
                    id="name" placeholder="Enter the Name">
                    <br>
                    <label>Class:</label>
                    <input type="text" name="class"
                    id="name" placeholder="Enter the Class">
                    <br>
                    <label>Section :</label>
                    <input type="text" name="section"
                    id="name" placeholder="Enter the Section">
                    <br>
                    <label>Roll</label>
                    <input type="digits" name="roll"
                    id="name" placeholder="Enter the Roll">
                    <br>
                    <label>Father's Name</label>
                    <input type="text" name="fname"
                    id="name" placeholder="Enter the Father's Name">
                    <br>
                    <label>Mother's Name</label>
                    <input type="text" name="mname"
                    id="name" placeholder="Enter the Mother's Name">
                    <br>
                    <label>Address</label>
                    <input type="text" name="address"
                    id="name" placeholder="Enter the Address">
                    <br>
                    <label>City</label>
                    <input type="text" name="city"
                    id="name" placeholder="Enter the City">
                    <br>
                    <label>Pin Code</label>
                    <input type="digits" name="pincode"
                    id="name" placeholder="Enter the Pin Code">
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
                    <label>Photo</label>
                    <input type="file" name="photo"
                    id="name" placeholder="Choose File">
                    <br>
                    <label>User Name</label>
                    <input type="text" name="uname"
                    id="name" placeholder="">
                    <br>
                    <label>Password</label>
                    <input type="password" name="password"
                    id="name" placeholder="">
                    <br>
                    <input type="submit" value="Add" name="submit" id="submit">
                </form>
            </div>
     </div>
        
    </body>
</html>