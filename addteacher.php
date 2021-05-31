<?php
    include 'Sidebar.html';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Teacher Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main">
            <div class="register">
                <h2>ADD TEACHER</h2>
                <form id="register" method="post">
                    <label>Teacher Name:</label>
                    <input type="text" name="name"
                    id="name" placeholder="Enter the Name">
                    <br>
                    <label>Age:</label>
                    <input type="digits" name="digits"
                    id="digits" placeholder="Enter The Age">
                    <br>
                    <label>Date Of Birth:</label>
                    <input type="date" name="begin"
                    id="date" placeholder="dd-mm-yyyy">
                    <br>
                    <label>Contact No.</label>
                    <input type="tel" name="begin"
                    id="phone" placeholder="Enter Contact Number">
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
                    <label>Mail ID:</label>
                    <input type="email" name="email"
                    id="email" placeholder="Enter the Mail ID">
                    <br>
                    <label>Subject:</label>
                    <input type="text" name="text"
                    id="name" placeholder="Enter the Subject">
                    <br>
                    <label>Salary:</label>
                    <input type="digits" name="salary"
                    id="digits" placeholder="Enter the Salary">
                    <br>
                    <label>Graduate Post:</label>
                    <input type="text" name="text"
                    id="name" placeholder="Enter the Graduate Post">
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