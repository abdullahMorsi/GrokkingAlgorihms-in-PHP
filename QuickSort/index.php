<?php

$array = array(5,2,3,4,6,7,8);

echo '<pre>';
print_r(quickSort($array));
echo '<pre>';

function quickSort($array){
    $less = $greater = array();
    if(count($array)<2){
        return $array;
    }else{
        $pivot = array_shift($array);

        foreach($array as $number){
            if($number < $pivot){
                $less[] = $number;
            }else{
                $greater[] = $number;
            }
        }
        return array_merge(quickSort($less), array($pivot) ,quickSort($greater));
    }
}

?>