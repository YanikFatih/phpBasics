<?php

$username = $_POST['username'];
$password = $_POST['password'];

echo "$username - $password";

/*
GET method can also be used instead of POST. But when we use GET,
data that we sent will be seen on address line on browser. So,
important datas like passwords should not be sent by using GET.
*/

?>