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

Route::get('/', 'HomeController@index');
Route::get('taocan.html', 'TaoCanController@index');
Route::get('project.html', 'ProjectController@index');
Route::get('baoxian.html', 'BaoxianController@index');
Route::get('case.html', 'CaseController@index');
Route::get('case/{id}.html', 'CaseController@show');
Route::get('page/{id}.html', 'PageController@show');
Route::get('page.html', 'PageController@index');
Route::post('userpost', 'HomeController@UserPost');
Route::post('gongdipost', 'HomeController@gongdipost');
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap{id}.xml', 'SitemapController@index');
Route::get('/m/index.php', 'HomeController@m');



/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 载入后台相关路由
|
*/
require __DIR__ . '/administrator.php';
