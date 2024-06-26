<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\EnsureUserHasRole;

Route::get('/', [PageController::class, 'index'])->name('welcome.pages');
Route::get('/unique-post/{post}', [PageController::class, 'show'])->name('unique.post');


Route::get('/legals', [PageController::class, 'legals'])->name('legals.pages');
Route::get('/abouts', [PageController::class, 'abouts'])->name('abouts.pages');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard/allposts', PostController::class .'@index')->name('posts.index');
    Route::get('/dashboard/post-create', PostController::class . '@create')->name('posts.create');
    Route::post('/dashboard/post-create', PostController::class .'@store')->name('posts.store');
    Route::get('/dashboard/post/{post}/edit', PostController::class .'@edit')->name('posts.edit');
    Route::put('/dashboard/post/{post}', PostController::class .'@update')->name('posts.update');
    Route::delete('/dashboard/post/{post}', PostController::class .'@destroy')->name('posts.destroy');
    Route::get('/dashboard/post/{post}', PostController::class .'@show')->name('posts.show');
});

Route::group(['middleware' => EnsureUserHasRole::class], function () {
    Route::get('/dashboard/allcategories', CategoryController::class .'@index')->name('categories.index');
    Route::get('/dashboard/category/category-create', CategoryController::class . '@create')->name('categories.create');
    Route::post('/dashboard/category/category-create', CategoryController::class .'@store')->name('categories.store');
    Route::get('/dashboard/category/{post}/edit-category', CategoryController::class .'@edit')->name('categories.edit');
    Route::put('/dashboard/category/{post}', CategoryController::class .'@update')->name('categories.update');
    Route::delete('/dashboard/category/{post}', CategoryController::class .'@destroy')->name('categories.destroy');
    Route::get('/dashboard/category/{post}', CategoryController::class .'@show')->name('categories.show');
});

Route::group(['middleware' => EnsureUserHasRole::class], function () {
    Route::get('/dashboard/allusers', UserController::class .'@index')->name('users.index');
    Route::get('/dashboard/users/{post}/edit-user', UserController::class .'@edit')->name('users.edit');
    Route::put('/dashboard/users/{post}', UserController::class .'@update')->name('users.update');
    Route::delete('/dashboard/users/{post}', UserController::class .'@destroy')->name('users.destroy');
    Route::get('/dashboard/users/{post}', UserController::class .'@show')->name('users.show');
});

require __DIR__.'/auth.php';
