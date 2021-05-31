<?php

?>
<html>
    <head>
        <title>Attendance</title>
    </head>
    <body>
        <br><br><br>
        <div class="main">
            <div class="register">
                <h2>Attendance</h2>
                <form action="insertattendance.php" id="register" method="post">
                   <label>Class Id:</label>
                    <input type="digit" name="classid"
                    id="digit" value ="">
                    <br>
                    <label>Subject Id:</label>
                    <input type="digit" name="subjectid"
                    id="digit" value ="">
                    <br>
                    <label>Date:</label>
                    <input type="date" name="date"
                    id="date" value ="">
                    <br>
                    <label>Attendance Id:</label>
                    <input type="digit" name="attendanceid"
                    id="digit" value ="">
                    <input type="submit" value="Submit" name="submit" id="submit">
                </form>
            </div>
     </div>
        
    </body>
</html>