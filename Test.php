<?php

//$arr = [4, 6, 3, 7, 1, 11, 21];
//plus($arr);
//function plus($ar)
//{
//    sort($ar);
//}
//print_r($arr);

//$user = ['name' => 'vasya', 'married' => true, 'age' => 25];
//
//$user['married'] = false;
//$user['surname'] = 'Petrov';
//
//print_r($user);
//
//unset($user['married']);
//print_r($user);
//print_r(count($user));

//$array = ['sfd', 'fdfd', 'fdfdddd'];
//function addValueToArray(&$arrays, $value)
//{
//    $arrays[0] = ucfirst($value);
//}
//
//addValueToArray($array, 'ds');
//print_r($array);
//
//$name = 'ярослав';
//echo mb_convert_case($name, MB_CASE_TITLE, "UTF-8");

//$filepath = '/path/to/index.php';
//$fileinfo = getFileInfo($filepath);
//print_r($fileinfo);
////$fileinfo = ['extension' => 'php', 'filename' => 'index.php'];
//
//
//
//
//function getFileInfo($filepath): array
//{
//    $pathParts = explode('/', $filepath);
//    $filename = $pathParts[array_key_last($pathParts)];
//    $namePath = explode('.', $filename);
//    $extension = $namePath[array_key_last($namePath)];
//    return['filename' => $filename, 'extension' => $extension];
//}

//$user = ['name' => 'Vasya', 'married' => true, 'age' => 25];
//
//if (array_key_exists('name', $user)) {
//    print_r('yeah!');
//} else {
//    print_r('no');
//}

//function countFruits($fruits): array
//{
//    $result = [];
//    foreach ($fruits as $name) {
//        if (array_key_exists($name, $result)) {
//            $result[$name] += 1;
//        } else {
//            $result[$name] = 1;
//        }
//    }
//    return $result;
//}
//$bag = [
//    'apple', 'banana', 'pear',
//    'apricot', 'apple', 'banana',
//    'apple', 'orange', 'pear'
//];
//
//print_r(countFruits($bag));

//$array = ['key' => 'value'];
//$result = $array['nokey'];
//$result
//var_dump($result);

$lessonMembers = [
    'syntax' => 3,
    'using' => 2,
    'foreach' => 10,
    'operations' => 10,
    'destructuring' => 2,
    'array' => 2,
];



function findKeys(array $arr, $znacheniya): array
{
    $spisok = [];
    foreach ($arr as $key => $value) {
        if ($znacheniya === $value) {
            $spisok[] = $key;
        }
    }
    return $spisok;
}

$result = findKeys($lessonMembers, 10);
// ['foreach', 'operations']
print_r($result);
echo "\n";
$result = findKeys($lessonMembers, 3);
// ['syntax']
print_r($result);