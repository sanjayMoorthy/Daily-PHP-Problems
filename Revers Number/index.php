<?php

$num = readLine("please enter your nuber ");
// var_dump($num);

function reverseNumber($input){
    $splitNumber = str_split($input);
    for($i=count($splitNumber)-1; $i>=0; $i--){
        echo $splitNumber[$i];
    }
}
reverseNumber($num);

?>