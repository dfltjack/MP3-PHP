<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];

//echo '<pre>';
var_dump($cart);

echo '<hr>';
//Remove o Último elemento do array
array_pop($cart);
var_dump($cart);

echo '<hr>';
//Remove o Primeiro elemento do array
array_shift($cart);
var_dump($cart);

echo '<hr>';
//Remove uma variável específica ou toda, se não for passado o parâmetro
unset($cart[0]);
var_dump($cart);

echo '<hr>';
//Adiciona um elemento no início do array
array_unshift($cart, 'Arroz', 'Microondas','Tapete');
var_dump($cart);

echo '<hr>';
//Adiciona um elemento no final do array
array_push($cart, 'Balinhas', 'Rodo');
var_dump($cart);

echo '<hr>';
// Remove os elementos repetidos
$cart = array_unique($cart);
var_dump($cart);