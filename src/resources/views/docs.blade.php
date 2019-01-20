<?php

use Lonban\Lswagger\Classes\PathClass;
use Lonban\Lswagger\Classes\FileClass;

?>
<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="{{PathClass::swaggerApiAsset('swagger-ui.css')}}" >
    <link rel="icon" type="image/png" href="{{PathClass::swaggerApiAsset('favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{PathClass::swaggerApiAsset('favicon-16x16.png')}}" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
  </head>

  <body>
    <div id="swagger-ui"></div>

    <script src="{{PathClass::swaggerApiAsset('swagger-ui-bundle.js')}}"> </script>
    <script src="{{PathClass::swaggerApiAsset('swagger-ui-standalone-preset.js')}}"> </script>
    <script>
    window.onload = function() {
      // Begin Swagger UI call region
      const ui = SwaggerUIBundle({
        url: "{{FileClass::getFileUrl(config('lswagger.name').'.'.config('lswagger.file_type'))}}",
        dom_id: '#swagger-ui',
        deepLinking: true,
        presets: [
          SwaggerUIBundle.presets.apis,
          SwaggerUIStandalonePreset
        ],
        plugins: [
          SwaggerUIBundle.plugins.DownloadUrl
        ],
        layout: "StandaloneLayout"
      })
      // End Swagger UI call region

      window.ui = ui
    }
  </script>
  </body>
</html>
