<?php

$arrayTest = array(5,4,99,1,2);

print_r(selectionSort($arrayTest));


function selectionSort($array){
    $len = count($array);
    $newArray = array();
    for($i=0; $i<$len ; $i++){
        $minIndex = getMinimum($array);
        array_push($newArray, $array[$minIndex]);

        unset($array[$minIndex]);
        $array = array_values($array);
    }
    return $newArray;
}

function getMinimum($array){
    $len = count($array);
    $min = $array[0];
    for($i = 0 ; $i < $len ; $i++){
        if($min >= $array[$i]){
            $min = $array[$i];
            $index = $i;
        }
    }
    return $index;
}
