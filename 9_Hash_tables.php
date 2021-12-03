<?php

function make(): array
{
    return [];
}

function set(&$map, $key, $value): bool
{
    $hash = crc32($key);
    $index = $hash % 1000;
    $keyset = array_keys($map);
    if (in_array($index, $keyset)) {
        $map[$index] = [$key, $value];
    } else {
        foreach ($keyset as $kemap) {
            if ($index !== crc32($kemap) % 1000) {
                $map[$index] = [$key, $value];
                return true;
            } else {
                return false;
            }
        }

    }
    return true;
}

function get($map, $key, $defaultValue = null)
{
    $hash = crc32($key);
    $index = $hash % 1000;
    $keyset = array_keys($map);
    if (!in_array($index, $keyset)) {
        return $defaultValue;
    } else {
        if (crc32($map[$index][0]) % 1000 !== $index){
            return $defaultValue;
        } else {
            return $map[$index][1];
        }
    }
}


$map = make();
$result = get($map, 'key');
print_r($result); // => null
echo "\n";

$result = get($map, 'key', 'value');
print_r($result); // => value
echo "\n";

var_dump(set($map, 'key2', 'value2'));
echo "\n";

$result = get($map, 'key2');
print_r($result); // => value2
//echo "\n";
//var_dump(set($map, 'key2', 'another value'));
//$result = get($map, 'key2');
//print_r($result);
//echo "\n";
//$this->assertEquals('another value', $result);