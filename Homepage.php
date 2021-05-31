<!DOCTYPE html>
<html lang="en">

<head>
    <title>INDEX</title>
    <link rel="stylesheet" href="homepage.css">
</head>

<body>
     <header>
        <div class="logo">
        <ul class="nav-area">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Sign In</a></li>
            <li><a href="adminpanel.php">Admin Panel</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
       </div>

       <div class="welcome-text">
           <h1>ATTEND TODAY, ACHEIVE TOMMOROW</h1>
       </div>
    </header> 
    <div class="box">
    <h1>Student Login</h1>    
    <form action="login" method="POST">
        <label>USERNAME:</label>
        <input type="text" name="name" id="name" placeholder="username"><br>
        <label>PASSWORD:</label>
        <input type="text" name="password" id="password" placeholder="password"><br>
        <input type="submit" value="Login" name="login" id="login">
    </form>
    <h1>Teacher/Staff Login</h1>    
    <form action="login" method="POST">
        <label>USERNAME:</label>
        <input type="text" name="name" id="name" placeholder="username"><br>
        <label>PASSWORD:</label>
        <input type="text" name="password" id="password" placeholder="password"><br>
        <input type="submit" value="Login" name="login" id="login">
    </form>
    </div>
</body>

</html>