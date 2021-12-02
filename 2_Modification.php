<?php

function normalize(array &$arr)
{
//    $arr['name'] = ucfirst(mb_strtolower($arr['name'])); // Только для латиницы

    $arr['name'] = mb_strtolower($arr['name']);
    $arr['name'] = mb_convert_case($arr['name'], MB_CASE_TITLE, "UTF-8");
    $arr['description'] = mb_strtolower($arr['description']);
}
$lesson = [
    'name' => 'деструКТУРИЗАЦИЯ',
    'description' => 'каК удивитЬ колек',
];

// Обратите внимание, что не используется возврат.
// Изменение переданного массива внутри отражается
// на самом ассоциативном массиве:
normalize($lesson);

print_r($lesson);
// => [
// =>     'name' => 'Деструктуризация',
// =>     'description' => 'как удивить колек'
// => ]