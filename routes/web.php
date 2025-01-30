<?php

use App\Http\Controllers\pageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get consultar
// Route::post guardar
// Route::put actualizar
// Route::delete eliminar

/*
Route::get('/', [pageController::class, 'home'])->name('home');

Route::get('/blog', [pageController::class, 'blog'])->name('blog');

Route::get('/blog/{slug}', [pageController::class, 'post'])->name('post');
*/

route::controller(pageController::class)->group(function ()
{
    route::get('/', 'home')->name('home');
    route::get('/blog', 'blog')->name('blog');
    route::get('/blog/{slug}', 'post')->name('post');
});
