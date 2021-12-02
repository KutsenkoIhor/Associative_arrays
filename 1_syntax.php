<?php

function getComposerFileData(): array
{
    $arr = ["autoload" => ["files" => ["src/Arrays.php"]], "config" => ["vendor-dir" => "/composer/vendor"]];
    return $arr;
}

print_r(getComposerFileData());

//{
//    "autoload": {
//    "files": [
//        "src/Arrays.php"
//    ]
//  },
//  "config": {
//    "vendor-dir": "/composer/vendor"
//  }
//}