<?php

use App\Http\Livewire\Counter;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/counter', Counter::class);

Route::prefix('/post')->group(function () {
    Route::get('/show', App\Http\Livewire\Post\Pagination::class);
    Route::get('/show/{post}', App\Http\Livewire\Post\Show::class);
});
