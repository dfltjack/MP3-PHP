<?php 

// $nomes = array('Carlos', 'Especializati', 'Company');
// $nomes = ['Carlos', 'Especializati', 'Company'];
$name = 'Carlos';
$Company = 'EspecializaTI';
$year = 2018;


$InfoCompany = [
    $name, 
    $Company, 
    $year
];


// $InfoCompany = compact('name', 'Company', 'year');
// var_dump($InfoCompany);

// var_dump(is_array($InfoCompany));

var_dump(in_array('Carlos', $InfoCompany));
