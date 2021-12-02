<?php

function countWords(string $str): array
{
    $arrWords = [];
    if ($str === '') {
        return $arrWords;
    } else {
        $str = mb_strtolower($str);
        $arr = explode(' ', $str);
        foreach ($arr as $value) {
            if (key_exists($value, $arrWords)) {
                $arrWords[$value] += 1;
            } else {
                $arrWords[$value] = 1;
            }
        }
    }
    return $arrWords;
}

// Если предложение пустое, то возвращается пустой объект
print_r(countWords(''));
// []

$text1 = 'one two three two ONE one wow';
print_r(countWords($text1));
// [
//     'one' => 3,
//     'two' => 2,
//     'three' => 1,
//     'wow' => 1
// ]

$text2 = 'another one sentence with strange Words words';
print_r(countWords($text2));
// [
//     'another' => 1,
//     'one' =>  1,
//     'sentence' => 1,
//     'with' => 1,
//     'strange' => 1,
//     'words' => 2
// ]