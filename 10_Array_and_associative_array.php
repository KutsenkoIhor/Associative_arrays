<?php

function buildQueryString(array $arr): string
{
    $mas = [];
    ksort($arr);
    foreach ($arr as $key => $value) {
        $mas[] = "$key=$value";
    }
    return implode('&',$mas);
}

print_r(buildQueryString(['per' => 10, 'page' => 1 ]));
// → page=1&per=10