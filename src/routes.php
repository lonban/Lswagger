<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * @OA\Get(
 *   summary="生成api文档并展示",
 *   path="/lswagger/api",
 *   @OA\Response(
 *     response=200,
 *     description="生成api文档并展示",
 *     @OA\Link(link="http://localhost/lswagger/api",operationId="null",parameters={null})
 *   )
 * )
 */
/**
 * @OA\Get(
 *   summary="仅展示api文档",
 *   path="/lswagger/docs",
 *   @OA\Response(
 *     response=200,
 *     description="仅展示api文档",
 *     @OA\Link(link="http://localhost/lswagger/docs",operationId="null",parameters={null})
 *   )
 * )
 */
Route::group(['prefix'=>'lswagger','namespace'=>'Lonban\Lswagger\Controllers'],function(){
    Route::resource('/config','ConfigController');
    Route::get('/test', 'LswaggerContrller@test');
    Route::get('/api', 'LswaggerContrller@api');
    Route::get('/docs', 'LswaggerContrller@docs');
    Route::get('/oauth2Callback', 'LswaggerContrller@oauth2Callback');
});
Route::get('/vendor/swagger-api/swagger-ui/dist/{assets}', function(){})->name('swaggerApi.assets');
Route::get('/vendor/lonban/l-swagger/src/data/{file}', function(){})->name('lswagger.data');
Route::get('/vendor/lonban/l-swagger/src/resources/views/{assets}', function(){})->name('lswagger.assets');
Route::get('resources/views/vendor/lswagger/{assets}', function(){})->name('lswagger.assets_public');