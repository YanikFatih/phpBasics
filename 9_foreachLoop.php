<?php

$cities = array("İstanbul","Ankara","Beijing","Tokyo","London","Madrid","Paris","Washington");
$numbers = range(1,20);
$letters = range("a","z");

foreach($cities as $city){

    echo "$city<br>";

}
echo "*1st loop completed*<br><br>";


foreach($cities as $index => $city){

    echo "$index.element: $city<br>";
    //index starts from 0
}
echo "*2nd loop completed*<br><br>";


foreach($numbers as $index => $num){

    echo "$index.element: $num<br>";

}
echo "*3rd loop completd*<br><br>";


foreach($letters as $index => $letter){

    echo "$index.element: $letter<br>";

}
echo "*4th loop completd*<br><br>";

?>