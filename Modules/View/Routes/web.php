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
    Route::resource("news", "\\".\Modules\View\Http\Controllers\NewsController::class);
    Route::resource("achievements", "\\".\Modules\View\Http\Controllers\AchievementController::class);
    Route::resource("management-committees", "\\".\Modules\View\Http\Controllers\ManagementCommitteeController::class);
    Route::resource("events", "\\".\Modules\View\Http\Controllers\EventController::class);
    Route::resource("file-uploads", "\\".\Modules\View\Http\Controllers\FileUploadController::class);
    Route::resource("galleries", "\\".\Modules\View\Http\Controllers\GalleryController::class);
});
