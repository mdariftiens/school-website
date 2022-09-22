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

    /*===============Menu routes=================*/
    Route::get('manage-menus/{id?}', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class, 'index'])->name('manage-menus');
    Route::get('create-new-menu', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class, 'create_menu'])->name('create-new-menu');
    Route::post('create-menu', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'store'])->name('create-menu');
    Route::get('update-menu', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'updateMenu'])->name('update-menu');


    Route::get('add-categories-to-menu', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'addCatToMenu'])->name('add-categories-to-menu');
    Route::get('add-post-to-menu', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'addPostToMenu'])->name('add-post-to-menu');
    Route::get('add-custom-link', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'addCustomLink'])->name('add-custom-link');


    Route::post('update-menuitem/{id}', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'updateMenuItem'])->name('update-menuitem');
    Route::get('delete-menuitem/{id}/{key}/{in?}', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'deleteMenuItem'])->name('delete-menuitem');


    Route::get('delete-menu/{id}', ['\\'. \Modules\Admin\Http\Controllers\Menu\MenuController::class,'destroy'])->name('delete-menu');

    /*===============Management committee routes=================*/
    Route::resource('management-committee', '\\'. \Modules\Admin\Http\Controllers\ManagementCommittee\ManagementCommitteeController::class);

    /*===============achievements routes=================*/
    Route::resource('achievements', '\\'. \Modules\Admin\Http\Controllers\Achievement\AchievementController::class);

    /*===============News routes=================*/
    Route::resource('news', '\\'. \Modules\Admin\Http\Controllers\News\NewsController::class);

    /*===============Employee management routes=================*/
    Route::resource('employee-category', '\\'. \Modules\Admin\Http\Controllers\Employee\EmployeeCategoryController::class);
    Route::resource('employee-department', '\\'. \Modules\Admin\Http\Controllers\Employee\EmployeeDepartmentController::class);
    Route::resource('employee-designation', '\\'. \Modules\Admin\Http\Controllers\Employee\EmployeeDesignationController::class);
    Route::resource('employee-list', '\\'. \Modules\Admin\Http\Controllers\Employee\EmployeeListController::class);

});
