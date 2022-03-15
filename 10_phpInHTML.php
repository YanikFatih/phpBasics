<?php
    $title = "PHP VARIABLE DEFINED TITLE";
    $text = "This paragraph is defined in a variable in PHP.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>USING PHP in HTML</title>
    <style type="text/css">
        h1{
            color: #ff000f;
        }
        p{
            color: #000ff0;
        }
    </style>
</head>
<body>
    <h1>HTML TITLE</h1>
    <p>This paragraph is written between html commands. </p>
    <?php
    
        for($i = 0; $i < 10; $i++){
            //echo $i."<br>";
        }
    
        echo "<h1>PHP TITLE</h1>"; //be written as html h1
    ?>
    <p style="color: #000000;"> <?="Another way of writing something on the screen."; ?> </p>
    <p>
        <?php
            echo "This paragraph is written as PHP code.";
        ?>
    </p>
    <h1>
        <?php
            echo "$title";
        ?>
    </h1>
    <p>
        <?php
            echo "$text";
        ?>
    </p>
</body>
</html>