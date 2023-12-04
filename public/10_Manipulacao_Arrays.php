<?php

$cart = [
    0=> 'Arroz', 
    1=>'Sabão', 
    2=>'Feijão',
    3=>'Balinhas'
];

echo '<pre>';
arsort($cart);
var_dump($cart);

echo '<hr>';

asort($cart);
var_dump($cart);

echo '<hr>';

sort($cart);
var_dump($cart);

echo '<hr>';