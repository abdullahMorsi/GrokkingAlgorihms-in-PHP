<?php

$graph = [];
$graph['start'] = [];
$graph['start']['a'] = 6;
$graph['start']['b'] = 2;

$graph['a'] = [];
$graph['a']['fin'] = 1;

$graph['b'] = [];
$graph['b']['a'] = 3;
$graph['b']['fin'] = 5;

$graph['fin'] = [];

$costs = [];
$costs['a'] = 6;
$costs['b'] = 2;
$costs['fin'] = INF;

$parents = [];
$parents['a'] = 'start';
$parents['b'] = 'start';
$parents['fin'] = null;

$processed = [];

$node = findLowestCostNode($costs);
while(!is_null($node)){
    $cost = $costs[$node];
    $neighbors = $graph[$node];
    foreach(array_keys($neighbors) as $key){
        $new_cost = $cost + $neighbors[$key];
        if($costs[$key] > $new_cost){
            $costs[$key] = $new_cost;
            $parents[$key] = $node;
        }  
    }
    array_push($processed, $node);
    $node = findLowestCostNode($costs);
}



function findLowestCostNode($costs){
    global $processed;
    $lowestCost = INF;
    $lowestCostNode = null;
    foreach(array_keys($costs) as $node){
        // foreach($node as $n){
            $cost = $costs[$node];
            if($cost < $lowestCost && !in_array($node, $processed)){
                $lowestCost = $cost;
                $lowestCostNode = $node;
            }
        // }

    }
    return $lowestCostNode;
}
var_dump($costs);
var_dump($parents);
?>