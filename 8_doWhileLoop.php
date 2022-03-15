<?php

$num1 = 1;
$num2 = 1;

do{

   echo "$num1 . Hi everyone!<br>";

}while($num1 > 10); //do block works at least 1 time
echo "1st loop completed.<br><br>";


do{

    echo "$num2 . Hi everyone!<br>";
    $num2++;

 }while($num2 < 10);
 echo "2nd loop completed.";

?>