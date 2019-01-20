<?php

namespace Lonban\Lswagger\Classes;

use function OpenApi\scan;

class LswaggerClass extends CommonClass
{
    public static function scan()
    {
        $openapi = scan(base_path(config('lswagger.to_path')));
        header('Content-Type: application/x-'.config('lswagger.file_type'));
        $content = config('lswagger.file_type')=='json'?$openapi->toJson():$openapi->toYaml();
        FileClass::putFile($content,config('lswagger.name').'.'.config('lswagger.file_type'));
    }
}