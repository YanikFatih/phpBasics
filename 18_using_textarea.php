<?php

    // if($_POST){

    //     $username = $_POST['username'];
    //     $comment = $_POST['comment'];

    //     echo $username."'s comment: ".$comment;

    // }else{
    //     echo "No comment found.";
    // }
    error_reporting(0);

    if($_POST){
        $username = $_POST['username'] ? $_POST['username'] : null;
        $comment = $_POST['comment'] ? $_POST['comment'] : null;
    
        echo $username."'s comment: ".$comment;
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
        <br>
        <input type="text" name="username" placeholder="User Name" value="<?php echo $username; ?>">
        <br><br>
        <textarea name="comment" id="" cols="30" rows="10" placeholder="Write your comment here..." > <?php echo $comment; ?></textarea>
        <br><br>
        <input type="submit" value="Share Comment">
    </form>
    
</body>
</html>