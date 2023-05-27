<?php

$input = readLine("please enter which table you want EX: 4th table ");
$tableLength = readLine("please enter your table length Ex: 10*10 or 20*20 ");
for($i=1; $i<=$tableLength;$i++){
    echo $i." * ".$input." = ".$i*$input."\n";
}