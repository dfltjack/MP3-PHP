<?php

$file = fopen('log.txt', 'a+');

while (!feof($file))
{
    echo fgets($file, 4096) . '<br>';
}

fclose($file);
