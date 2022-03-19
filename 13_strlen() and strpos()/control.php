<?php
    //print_r($_POST);
    //strlen() => returns char number (mb_strlen() for TR characters)
    //strpos() => return char index that you give as parameter (mb_strpos is also valid)

    /*
    $username = $_POST['username'];
    $maxLength = 10;
    $usernameLength = strlen($username);

    if($usernameLength > $maxLength)
        echo "User name cannot be greater than 10 character!<br>";
    else    
        echo "Welcome ".$username;
*/

    $comment = $_POST['comment'];

    $index = strpos($comment, ".");
    echo $index;
    
?>