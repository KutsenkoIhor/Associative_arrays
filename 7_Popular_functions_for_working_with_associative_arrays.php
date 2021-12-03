<?php

function genDiff(array $arr1, array $arr2): array
{
    $finishArr = [];
    $k1arr = array_keys($arr1);
    $k2arr = array_keys($arr2);
    foreach ($k1arr as $key1) {
        if (!in_array($key1, $k2arr)) {
            $finishArr[$key1] = 'deleted';
        } else {
            if ($arr1[$key1] !== $arr2[$key1]) {
                $finishArr[$key1] = 'changed';
            } else {
                $finishArr[$key1] = 'unchanged';
            }
        }
    }
    foreach ($k2arr as $key2) {
        if (!in_array($key2, $k1arr)) {
            $finishArr[$key2] = 'added';
        }
    }
    return $finishArr;
}

print_r($result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
));
// [
//   'one' => 'deleted',
//   'two' => 'changed',
//   'four' => 'unchanged',
//   'zero' => 'added',
// ]