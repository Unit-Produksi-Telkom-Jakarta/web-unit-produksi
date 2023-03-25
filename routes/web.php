<?php

use App\Http\Livewire\FormPage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/', Livewire\Pages\Admin\Dashboard::class)->name('dashboard');
    Route::get('/daily-report', Livewire\Pages\Admin\DailyReport::class);

    Route::prefix('orders')->group(function () {
        Route::get('/', Livewire\Pages\Admin\Order\Orders::class)->name('orders');
        Route::get('/export-import', Livewire\Pages\Admin\Order\ExportImport::class)->name('orders/export-import');
        Route::get('/receipt/{id}', Livewire\Pages\Admin\Order\Receipt::class);
    });
});
