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

Route::prefix('frontend')->group(function() {
    Route::get('/', 'FrontendController@index');
    \Illuminate\Support\Facades\Route::get('test', function (){
       return (  \Modules\Backend\Entities\Caches\Cache::first()->cached_data);
    });
});
