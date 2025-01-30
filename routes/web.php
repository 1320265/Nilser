<?php

use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

route::controller(pageController::class)->group(function ()
{
    route::get('/', 'home')->name('home');
    route::get('/blog', 'blog')->name('blog');
    route::get('/blog/{post:slug}', 'post')->name('post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//php artisan route:list
Route::resource('posts', PostController::class);

require __DIR__.'/auth.php';
