<?php
return [
    'name' => 'lswagger',
    'file_type' => 'json',//文档类型yaml或json
    'to_path' => 'vendor/lonban/l-swagger/src',//从哪个目录生成文档(对该目录下所有文件内符合Swagger注释生成yaml或json文档)
    'in_path' => 'vendor/lonban/l-swagger',//文档所在位置，默认storage/app/vendor/lonban/l-swagger/
];