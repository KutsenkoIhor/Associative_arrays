<?php

function make(): array
{
    return [];
}

function set(&$map, $key, $value): bool
{
    $arrKey = array_keys($map);
    $keyHash = crc32($key) % 1000;
    if (in_array($keyHash, $arrKey)) {
        if ($map[$keyHash][0] === $key) {
            $map[$keyHash] = [$key, $value];
            return true;
        } else {
            return false;
        }
    } else {
        $map[$keyHash] = [$key, $value];
        return true;
    }
}

function get($map, $key, $defaultValue = null)
{
    $arrKey = array_keys($map);
    $keyHash = crc32($key) % 1000;
    if (!in_array($keyHash, $arrKey)) {
        return $defaultValue;
    } else {
        if ($map[$keyHash][0] !== $key) {
            return $defaultValue;
        } else {
            return $map[$keyHash][1];
        }
    }
}


print_r($map = make());
echo "\n";
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
