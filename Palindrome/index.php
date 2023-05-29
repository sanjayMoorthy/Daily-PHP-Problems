<?php

$arr = (string)readline('Enter your value : ');

$reverseName = "";
for($i = strlen($arr)-1 ;$i >=0; $i--){
    $reverseName = $reverseName.$arr[$i];

}
if ($reverseName == $arr){
    echo $arr." "."is Palindrome";
}else{
    echo $arr." "."is not a Palindrome";
}