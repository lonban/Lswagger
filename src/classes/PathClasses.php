<?php

namespace Lswagger\Classes;

use Lswagger\Exceptions\LswaggerException;

class PathClasses extends CommonClasses
{
    public static function swaggerApiPath($file = null)
    {
        $allowed_files = [
            'favicon-16x16.png',
            'favicon-32x32.png',
            'oauth2-redirect.html',
            'swagger-ui-bundle.js',
            'swagger-ui-bundle.js.map',
            'swagger-ui-standalone-preset.js',
            'swagger-ui-standalone-preset.js.map',
            'swagger-ui.css',
            'swagger-ui.css.map',
            'swagger-ui.js',
            'swagger-ui.js.map',
        ];

        $path = base_path('vendor/swagger-api/swagger-ui/dist/');

        if (! $file) {
            return realpath($path);
        }

        if (! in_array($file, $allowed_files)) {
            throw new LswaggerException(sprintf('(%s) - 文件不在允许范围内', $file));
        }

        return realpath($path.$file);
    }

    public static function swaggerApiAsset($asset)
    {
        $file = self::swaggerApiPath($asset);

        if (! file_exists($file)) {
            throw new LswaggerException(sprintf('请求的文件 (%s) 不存在', $asset));
        }
        return route('swaggerApi.assets',['assets'=>$asset]).'?v='.md5_file($file);
    }

    public static function lSwaggerAsset($asset)
    {
        $file = base_path('resources/views/vendor/lswagger').'/'.$asset;
        if (! file_exists($file)) {
            $file = base_path('vendor/lonban/l-swagger/src/resources/views').'/'.$asset;
            if (! file_exists($file)){
                throw new LswaggerException(sprintf('请求的文件 (%s) 不存在', $asset));
            }
            return route('lswagger.assets',['asset'=>$asset]).'?v='.md5_file($file);
        }
        return route('lswagger.assets_public',['asset'=>$asset]).'?v='.md5_file($file);
    }

    public static function lSwaggerData($file)
    {
        return route('lswagger.data',['file'=>$file]);
    }
}