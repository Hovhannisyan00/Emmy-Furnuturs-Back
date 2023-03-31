<?php

use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\FileController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;

//
Route::get('/', [DashboardController::class, 'index'])->name('index');

// Files
Route::group(['prefix' => 'files', 'as' => 'files.'], function () {
    Route::delete('delete/{id}', [FileController::class, 'delete'])->whereUuid('id')->name('delete');
    Route::post('store-temp-file', [FileController::class, 'storeTempFile'])->name('storeTempFile');
});

// Translations
Route::controller(Barryvdh\TranslationManager\Controller::class)->as('translation.')->group(function () {
    Route::get('/translations', 'getIndex')->name('manager');
    Route::get('/translations/view/{group?}', 'getView')->name('group');
});

// Middleware(Admin)
Route::group(['middleware' => ['role:admin']], function () {

    // Users
    Route::resource('users', UserController::class);
    Route::get('users/dataTable/get-list', [UserController::class, 'getListData'])->name('users.getListData');
});

// Articles
Route::resource('articles', ArticleController::class);
Route::get('articles/dataTable/get-list', [ArticleController::class, 'getListData'])->name('articles.getListData');

// Profile
Route::controller(ProfileController::class)->as('profile.')->group(function () {
    Route::get('profile', 'index')->name('index');
    Route::put('profile/{id}', 'update')->whereNumber('id')->name('update');
});
