<?php
//Arrays: Conjunto de vários valores

//1ª forma:
// $carros = array("BMW", "Veloster", "Hilux");
// var_dump($carros[2]);


//2ª forma:

// $carros = ['Uno', 'Gol', 'Fusion', 'Civic'];
// var_dump($carros);

//Array composto:

/*
$carro = [ 
    'cor' => 'Branco',
    'portas' => 4,
    'ano' => 2018,
];
$carro['airbag'] = true;
$carro['som'] = 'Modelo 13';

//var_dump($carro);
echo $carro['som'];
*/

//Array multidimensional:

$carros = [
    'Mercedes' => [    
        'cor' => 'Preto',
        'motor' => 5.2,  
        'nome' => 'Nome do carro da Mercedes'      
    ],
    'Ford' => [    
        'cor' => 'Amarelo',
        'motor' => 3.2, 
        'nome' => "Carro da Ford"
    ],
    'Ferrari' => [    
        'cor' => 'Vermelha',
        'motor' => 10, 
        'nome' => "Ferrari"
    ],
];

echo $carros['Mercedes']['cor'];
echo $carros['Mercedes']['cor'] = 'new color';




