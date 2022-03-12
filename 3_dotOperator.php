<?php

$num1 = 40;
$num2 = 10;
$message = "Sum of numbers: ";
$sum = $num1 + $num2;

echo $message."".$sum."<br>";
echo "Message data type: ".gettype($message)."<br>";
echo "Sum data type: ".gettype($sum)."<br>";
echo "Message data type: gettype($message)"."<br>";

?>