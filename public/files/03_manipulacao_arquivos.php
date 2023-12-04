<?php

$text = "Today is a beautiful day";
generateLog($text);

function generateLog($text )
{
    $file = fopen('log.txt', 'a+');
    fwrite($file, "$text \r\n");
    fclose($file);
}

