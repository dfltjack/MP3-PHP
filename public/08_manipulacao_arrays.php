<?php

$infoCompany = [
    'name' => 'EspecializaTI',
    'founder' => 'Carlos Ferreira',
    'year_current' => 2018,
];

$infoCompany2 = [
    'courses' => ['PHP', 'JS', 'VUE JS', 'Laravel'],
    'total_courses' => 26
];

// var_dump($infoCompany['name']);

// var_dump(array_keys($infoCompany));

// var_dump(array_values($infoCompany));

// var_dump(count($infoCompany));

$infoCompany = array_merge($infoCompany, $infoCompany2);

echo '<pre>';
var_dump($infoCompany);