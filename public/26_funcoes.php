<?php

/*
$state = 'São Paulo/SP';
$arrayState = explode('/', $state);
var_dump($arrayState[0]);
*/

$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo);

echo '<hr>';

$arrayTeste = [1, 2, 3, 4, 5];
//echo implode ($arrayInfo, ' # ');
echo implode ($arrayTeste, ' - ');