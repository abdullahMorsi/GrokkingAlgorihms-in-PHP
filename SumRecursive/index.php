<?php

$array = array(200,4,60,8,10);
$array2 = array();

echo maxNumber($array);
echo '<br>';
echo max($array);
echo '<br>';
echo fact(4);


function sum($array){
    $length = count($array);
    if($length==0) // base case
        return 0;
    else
        $first = $array[0];
        array_shift($array);
        return $first + sum($array); //recursive case
}
function countList($array){
    if(!isset($array[0])) // base case
        return 0;
    else
        array_shift($array);
        return 1 + countList($array); //recursive case
}

function maxNumber($array){
    $max = $array[0];
    if(count($array)==2) // base case
        return $array[0]>$array[1]?$array[0]:$array[1];
    else
        $first = $array[0];
        array_shift($array);
        $subMax = maxNumber($array); //recursive case
        return $first >$subMax?$first:$subMax;
}

function fact($number){
    if($number==0)
        return 1;
    else
        return $number * fact($number-1);
}



?>