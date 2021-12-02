<?php

function getDomainInfo (string $nameSait): array
{
    if (substr($nameSait,0, 4) !== 'http') {
        $adres = ['scheme' => 'http', 'name' => $nameSait];
    } else {
        [$sch, $nam] = explode('://', $nameSait);
        $adres = ['scheme' => $sch, 'name' => $nam];
    }
    return $adres;
}



// Если домен передан без указания протокола,
// то по умолчанию берется http
print_r(getDomainInfo('yandex.ru'));
// [
//     'scheme' => 'http',
//     'name' => 'yandex.ru'
// ]

print_r(getDomainInfo('https://hexlet.io'));
// [
//     'scheme' => 'https',
//     'name' => 'hexlet.io'
// ]

print_r(getDomainInfo('http://google.com'));
// [
//     'scheme' => 'http',
//     'name' => 'google.com'
// ]