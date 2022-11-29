<?php

use Illuminate\Support\Facades\Route;
use Modules\Card\Http\Controllers\Backend\CardController;

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
Route::prefix('admin/')->name('backend.')->group(function () {
    Route::resource('cards', CardController::class);
});
