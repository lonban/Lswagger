<?php

namespace Lswagger\Controllers;

use Lswagger\Classes\LswaggerClasses;

class LswaggerContrller extends CommonController
{
    public function test()
    {
        return '';
    }

    //入口(包含生成文档功能)
    public function api()
    {
        LswaggerClasses::scan();
        return view('lswagger::docs');
    }

    //文档查看
    public function docs()
    {
        return view('lswagger::docs');
    }

    //oauth2回调
    public function oauth2Callback()
    {
        $path = base_path('vendor/swagger-api/swagger-ui/dist/');
        return \File::get(realpath($path.'oauth2-redirect.html'));//直接调用swagger-ui里面的
    }
}