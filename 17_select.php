<?php

    if(isset($_POST['courses'])){
        
        $courses = $_POST['courses'];
        echo "Selected Courses<br>";
        
        foreach ($courses as $key => $value) {
            echo $value."<br>";
        }

    }else{

        echo "No selection found!";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FynKSoft Bootcamp Application Form</title>
</head>
<body style="text-align: center;">

    <form method="POST" action="">

        <h3>Select a Course</h3>
        <select multiple name="courses[]">

            <option value="PHP">PHP</option>
            <option value="Java">JAVA</option>
            <option value="Python">PYTHON</option>

        </select>

        <input type="submit" value="SEND">

    </form>
    
</body>
</html>