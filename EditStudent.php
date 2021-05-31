<?php
    include_once 'SearchStudent.php';
   // include_once 'update.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" id="SearchForm">
        <input type="text" name="admno" id="admno" placeholder="Admission Number">
        <button type="submit" name="Search">Search</button>
    </form>
    <form action="update.php" id="Update" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="" value="<?php echo $name;?>">
        <label for="class">Class</label>
        <input type="text" name="class" id="" value="<?php echo $class;?>">
        <button type="submit" name="Update">Update</button>
    </form>
</body>
</html>