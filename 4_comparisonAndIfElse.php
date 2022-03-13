<?php

$num1 = 30;
$num2 = 40;
$check = $num1 == $num2 ? "numbers are equal" : "numbers are different"."<br><br>";//single line comparison
//$check = $num1 < $num2 ? "number 1 is less" : "number 2 is less"."<br>";
echo $check; //numbers are different

if($num1 == $num2){

    echo "Numbers are equal.<br>";
    echo "Checking completed!";

} elseif($num1 != $num2){

    echo "Numbers are not equal.<br>";
    echo "Checking completed!";

} 
//same as => else{echo "numbers are not equal.";}

?>