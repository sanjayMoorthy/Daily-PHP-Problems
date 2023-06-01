<?php

$userInput = ReadLine("enter your input");

$firstInput = 0;
$secInput = 1;
// echo $firstInput."\n";
// echo $secInput."\n";
$finaleValue = $firstInput + $secInput ;

for($i=0; $i<$userInput;$i++){
    // echo $userInput." ".$i."\n" ; 
    echo $finaleValue. "\n";

    $firstInput = $secInput;
    $secInput = $finaleValue;
    $finaleValue = $firstInput + $secInput;

    // echo $finaleValue. "\n";
    
}
