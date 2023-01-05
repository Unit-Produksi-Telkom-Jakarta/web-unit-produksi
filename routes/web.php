<?php

use App\Http\Livewire\FormPage;
use Illuminate\Support\Facades\Route;
use App\Models\Form;

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

Route::get('/import-export', function(){
    return view('admin-import-export');
})->name('import-export');

Route::get('/invoice/{id}', function($id){
    $form = Form::where('id',$id)->first();

    return view('invoice')->with('form',$form);
})->name('invoice');

Route::get('/update-form/{id}', function($id){
    $form = Form::where('id',$id)->first();

    return view('update-form')->with('form',$form);
})->name('update-form');

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
