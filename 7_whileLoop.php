<?php

$num1 = 0;

while($num1 <= 10){
    
    echo "$num1 - Hi everyone<br>";
    $num1++;

}
echo "While loop completed";
echo "<br><br>****************************<br><br>";

$num2 = 0;

while($num2 <=30){

    if($num2 % 2 == 1){
        echo $num2."<br>";
    }

    $num2++;
    //odd numbers in range 0 - 30
}

echo "2nd while loop completed"

?>