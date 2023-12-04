<?php

function pt(String $value)
{
    echo "{$value} <br>";
}
//pt("Hello World");

function sum(int $n1, int $n2): int
{
    return $n1 + $n2;
}
//echo sum(12, 90);

function sum2(int $n1, int $n2, int $taxa = 12): int
{
    return ($n1 + $n2) * $taxa;
}

echo sum2 (1, 2);
