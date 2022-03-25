<?php
    error_reporting(0);

    if($_POST){

        $name = $_POST['name'];
        echo $name."<br>";

        $gender = $_POST['gender'];
        echo $gender."<br>";

        $courses = $_POST['courses'];
        foreach ($courses as $key => $value) {
            echo "~".$value."<br>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FynKSoft Application Form</title>
</head>
<body style="text-align: center;">

    <form method="POST" action="">

        <h2>FynKSoft Bootcamp Application Form</h2>
        <h3>Full Name</h3>
        <input type="text" name="name">
        <h3>Gender</h3>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <h3>Course Selection</h3>
        <input type="checkbox" name="courses[]" value="PHP"> PHP 
        <input type="checkbox" name="courses[]" value="JAVA"> JAVA
        <input type="checkbox" name="courses[]" value="PYTHON"> PYTHON
        <hr>
        <input type="submit" value="SEND"> 

    </form>
    
</body>
</html>
