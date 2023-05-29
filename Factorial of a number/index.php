<?php

$input = readLine("enter your input ");
$secInput = $input;

while ($input > 1) {
   $input --;
   $secInput = $secInput * $input;
  
}
echo $secInput." ";

?>
