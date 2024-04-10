<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'welcome'])->name('welcome.pages');

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
Route::get('/dashboard/create', PostController::class . '@create')->name('posts.create');
Route::post('/dashboard', PostController::class .'@store')->name('posts.store');
Route::get('/dashboard/{post}/edit', PostController::class .'@edit')->name('posts.edit');
Route::put('/dashboard/{post}', PostController::class .'@update')->name('posts.update');
Route::delete('/dashboard/{post}', PostController::class .'@destroy')->name('posts.destroy');
Route::get('/dashboard/{post}', PostController::class .'@show')->name('posts.show');
});


require __DIR__.'/auth.php';
