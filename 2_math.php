<?php

$number1 = 12;
$number2 = 20;

$sum = $number1 + $number2;
$subtr = $number1 - $number2;
$mulpt = $number1 * $number2;
$divisn = $number2 / $number1;
$remndr = $number2 % $number1;


echo("$sum <br> $subtr <br> $mulpt <br> $divisn <br> $remndr <br>"); 

$number1 += 10; //also -=, *=, /=, %= are avaliable
echo("new value of number1 : $number1 <br>");

echo "<br>";
echo "<br> ******************** <br>";
echo "<br>";

$number3 = 9;
echo "Squareroot of number3: " . sqrt($number3)."<br><br>"; //9

echo "number3 to power of 4: ".pow($number3,4)."<br><br>";

echo "Absolute value of number3: ".abs($number3)."<br><br>";

$smallest = min(9, 5, 12, 8, 24); 
echo "smallest one: $smallest";

?>