<?php

function pick(array $arr, array $arrZapros): array
{
    $arrReport = [];
    if ($arrZapros === []) {
        return [];
    } else {
        foreach ($arr as $key => $value) {
            foreach ($arrZapros as $Zvalue) {
                if ($key === $Zvalue) {
                    $arrReport[$Zvalue] = $value;
                }
            }
        }
    }
    return $arrReport;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
];

print_r(pick($data, ['user']));       // → ['user' => 'ubuntu']
print_r(pick($data, ['user', 'os'])); // → ['user' => 'ubuntu', 'os' => 'linux']
print_r(pick($data, []));             // → []
print_r(pick($data, ['none']));       // → []
print_r(pick($data, ['null']));        // → ['null' => null]