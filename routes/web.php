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

Route::get('/register', \App\Http\Livewire\Auth\Register::class)->name('register');
Route::get('/login', \App\Http\Livewire\Auth\Login::class)->name('login');

Route::prefix('/post')->middleware('auth')->group(function () {
    Route::get('/show', App\Http\Livewire\Post\Pagination::class)->name('postList');
    Route::get('/show/{post}', App\Http\Livewire\Post\Show::class);
});
