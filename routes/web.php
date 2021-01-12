<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillEntryController;

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
    return redirect('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('new_serial', [App\Http\Controllers\BillEntryController::class, 'NewSerial'])->name('new.serial');

route::post('add-billinfo', [App\Http\Controllers\BillEntryController::class, 'BillEntry'])->name('add.billentry');
