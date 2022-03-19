<?php

    if(isset($_POST['username']))
        echo "POST exists";
    else 
        echo "POST does not exist";

    echo "<br><br>";

    if(empty($_POST['username']) || empty($_POST['password']))
        echo "User name or password field is empty!<br>";
    else{
        echo "User name: ".$_POST['username']."<br>";
        echo "Password: ".$_POST['password']."<br>";
    }
    
?>