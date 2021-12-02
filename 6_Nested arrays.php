<?php

function getIn(array $arr, array $arr2)
{
    foreach ($arr2 as $valueKey) {
        if (!is_array($arr)) {
            return null;
        } elseif (!key_exists($valueKey, $arr)) {
            return null;
        } else {
            $newarr = $arr[$valueKey];
            $arr = $newarr;
        }
    }
    return $newarr;
}



$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
];

print_r(getIn($data, ['undefined'])); // null
echo "\n";
print_r(getIn($data, ['user'])); // 'ubuntu'
echo "\n";
print_r(getIn($data, ['user', 'ubuntu'])); // null
echo "\n";
print_r(getIn($data, ['hosts', 1, 'name'])); // 'web2'
echo "\n";
print_r(getIn($data, ['hosts', 0])); // ['name' => 'web1']
echo "\n";
print_r(getIn($data, ['hosts', 1, null])); // 3
echo "\n";
print_r(getIn($data, ['hosts', 1, 'active'])); // false
echo "\n";