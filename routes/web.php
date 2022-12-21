<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

// Pages Routes
Route::get('/', [PageController::class, 'home'])->name('home');

// Resources Routes
/*Route::get('admin/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('admin/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('admin/comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('admin/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');*/

Route::resource('admin/comics', ComicController::class);
