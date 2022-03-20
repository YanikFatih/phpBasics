<?php

    $comment = $_POST['comment'];
    
     $maxLen = 100;
     $commentLen = mb_strlen($comment);

     if($commentLen > $maxLen){

         $croppedComment = mb_substr($comment, 0, $maxLen);
         echo $croppedComment."...<a href = '#'>Click to see full comment</a>";

     }else{
         echo $comment;
     }

    // $index = mb_strpos($comment, ".");
    // $croppedComment = mb_substr($comment, 0, $index+1);
    // echo $croppedComment."<a href='#'>Continue</a>";

?>