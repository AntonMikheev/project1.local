<?php
$var = "HELLO";
$var_length = strlen($var);
$i = 0;
while($i < $var_length){
    echo $var{$i} . "</br>";
    $i++;
}