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

Route::prefix('backend')->group(function() {
    Route::get('/', 'BackendController@index')->name('dashboard');

    Route::get('/manage-sidebar-widgets', [\Modules\Backend\Http\Controllers\Sidebar\SidebarController::class,'index'])->name('manageSidebarWidgets');
    Route::post('/sidebar/{sidebarName}', [\Modules\Backend\Http\Controllers\Sidebar\SidebarController::class,'update'])->name('sidebar.update');

    Route::resource('widgets', Modules\Backend\Http\Controllers\Widgets\WidgetsController::class);

});
