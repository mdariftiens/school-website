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

    Route::resource('settings', 'SettingsController');

    Route::get('/manage-sidebar-widgets', '\Modules\Admin\Http\Controllers\Sidebar\SidebarController@index')->name('manageSidebarWidgets');
    Route::post('/sidebar/{sidebarName}', '\Modules\Admin\Http\Controllers\Sidebar\SidebarController@update')->name('sidebar.update');

    Route::resource('widgets', '\\' . \Modules\Admin\Http\Controllers\Widgets\WidgetsController::class);
    Route::resource('media', '\\'.\Modules\Admin\Http\Controllers\Media\MediaController::class);

    /*===============event routes=================*/
    Route::resource('event', '\\'.\Modules\Admin\Http\Controllers\Event\EventController::class);
    Route::resource('event-category', '\\'.\Modules\Admin\Http\Controllers\Event\EventCategoryController::class);

    /*===============notice routes=================*/
    Route::resource('notice', '\\'.\Modules\Admin\Http\Controllers\notice\NoticeController::class);
    Route::resource('notice-category', '\\'.\Modules\Admin\Http\Controllers\Notice\NoticeCategoryController::class);

    /*===============File upload routes=================*/
    Route::resource('file-upload', '\\'.\Modules\Admin\Http\Controllers\File_upload\FileUploadController::class);
    Route::resource('file-upload-category', '\\'.\Modules\Admin\Http\Controllers\File_upload\FileUploadCategoryController::class);

    /*===============Gallery routes=================*/
    Route::resource('gallery', '\\'.\Modules\Admin\Http\Controllers\Gallery\GalleryController::class);

    /*===============Slider routes=================*/
    Route::resource('slider', '\\'. \Modules\Admin\Http\Controllers\Slider\SliderController::class);

    /*===============Message routes=================*/
    Route::resource('message', '\\'. \Modules\Admin\Http\Controllers\Message\MessageController::class);
});
