<?php

$graph = array();

$graph['you'] = array('amr', 'ola', 'amiram');
$graph['amr'] = array('sedra', 'Layan');
$graph['ola'] = array('shimaa');
$graph['amira'] = [];
$graph['sedra'] = [];
$graph['Layan'] = [];
$graph['shimaa'] = [];


// $queue = new \Ds\Queue();
// $queue->push($graph['you']);
// $queue->push($graph['amr']);
// print_r($queue);


function search($name)
{
    global $graph;
    $queue = [];
    foreach($graph[$name] as $item){
        array_push($queue, $item);
    }
    $searched = [];
    while(!empty($queue)){
        $person = array_shift($queue);
        if(!in_array($person, $searched)){
            if(personIsSeller($person)){
                echo $person .' is A mango seller';
                return true;
            }else{
                foreach($graph[$person] as $item){
                    array_push($queue, $item);
                    array_push($searched, $person);                }

            }
        }

    }
    return false;
    print_r($queue);

}
function personIsSeller($name){
    return $name[-1] == 'm';

}

search('you');
?>