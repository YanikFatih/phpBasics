<?php
    session_start();
    ob_start();

    echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['email'];

?>