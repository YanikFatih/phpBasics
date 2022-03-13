<?php
//Comparison Operators: < , > , <= , >= , == , != 

echo 20 < 30 ? "< Less <br>" : "Greater<br>";
echo 30 > 20 ? "> Greater <br>" : "Less<br>";
echo 30 <= 30 ? "<= Less than or equal <br>" : "Greater<br>";
echo 30 >= 30 ? ">= Greater than or equal <br>" : "Less<br>";
echo 20 == 30 ? "== Equal <br>" : "Not Equal";
echo 20 != 30 ? "!= Not Equal <br>" : "Equal<br>";

echo "<br>**************<br>";
//Logical Operators: && (and) , || (or)

$userName = "Fatih";
$password = "98765";

if($userName == "Fatih" && $password == "98765"){

    echo "Sing in successful."."<br>";

} else {

    echo "Sing in failed. Check your info and try again!"."<br>";

}

?>