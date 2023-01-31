<?php
$length = $_GET["length"];
$password = "";

for ($i = 0; $i < $length; $i++){
    $password .= chr(rand(33, 126));
}
?>