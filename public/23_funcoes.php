<?php

$taxa = 3;

function sum(int $n1, int $n2): Array
{
    global $taxa;
    
    $teste = 12;
    $soma =  ($n1 + $n2) * $taxa;

    return [
        'teste' => $teste,
        'soma' => $soma,    
    ];
}

// $result = sum(3, 3);
// var_dump($result['soma']);
// echo sum(1, 2);
// echo sum(2,2)['soma'];