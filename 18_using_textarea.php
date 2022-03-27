<?php

    if($_POST){

        $username = $_POST['username'];
        $comment = $_POST['comment'];

        echo $username."'s comment: ".$comment;

    }else{
        echo "No comment found.";
    }
//6
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FynKSoft Bootcamp Application Form</title>
</head>
<body style="text-align: center;">

    <form method="POST" action="">
        <input type="text" name="username" placeholder="User Name">
        <br><br>
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Write your comment here..." ></textarea>
        <br><br>
        <input type="submit" value="Share Comment">
    </form>
    
</body>
</html>