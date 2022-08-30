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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::get('/manage-sidebar-widgets', '\Modules\Admin\Http\Controllers\Sidebar\SidebarController@index')->name('manageSidebarWidgets');
    Route::post('/sidebar/{sidebarName}', '\Modules\Admin\Http\Controllers\Sidebar\SidebarController@update')->name('sidebar.update');

    Route::resource('widgets', '\\' . \Modules\Admin\Http\Controllers\Widgets\WidgetsController::class);
    Route::resource('media', '\\'.\Modules\Admin\Http\Controllers\Media\MediaController::class);
});
