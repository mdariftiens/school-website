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

Route::prefix('')->group(function() {
    Route::get('/', [\Modules\View\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::resource("notices", "\\".\Modules\View\Http\Controllers\NoticeController::class);
    Route::resource("messages", "\\".\Modules\View\Http\Controllers\MessageController::class);
});
