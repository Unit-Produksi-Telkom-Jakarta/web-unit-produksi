<?php

use App\Http\Livewire\FormPage;
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
    return view('landing');
});

Route::get('/form', function(){
   return view('form');
})->name('form');

Route::get('/admin-import-export', function(){
    return view('admin-import-export');
})->name('admin-import-export');

Route::get('/invoice', function(){
    return view('invoice');
})->name('invoice');

Route::get('/problem-list', function(){
    return view('problem-list');
})->name('problem-list');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
