<?php

function getSortedNames(array $arr): array
{
    $spisok = [];
    foreach ($arr as $value) {
        ['name' => $name] = $value;
        $spisok[] = $name;
    }
    sort($spisok);
    return $spisok;
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];

print_r(getSortedNames($users)); // ['Bronn', 'Eiegon', 'Reigar', 'Sansa']