<?php

function integerArray($inputNum){
    sort($inputNum);
    print_r($inputNum);

    rsort($inputNum);
    print_r($inputNum);
}
integerArray([23,2,5,1,20,10,3]);
