<?php
    echo "FynK'dan selamlar!<br>";
    $name = "Fatih";
    $surname = "Yanik";
    $age = 22;
    $email = "fatihyanik@live.com";
    $my_array = array("Ankara", "İzmir", "Selanik", "İstanbul");
    $check = true;

    echo " $name $surname<br>";
    echo "$my_array[2]<br>";
    echo "$check<br>";

    echo "Data type of variable name: ".gettype($name)."<br>";
    echo "Data type of variable age: ".gettype($age);
?>
