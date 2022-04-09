<?php

use App\Http\Controllers\TimeController;
use App\Http\Controllers\UploadController;
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


Route::view('form', 'upload.form')->name('formulario');
// Route::post('upload','UploadController@upload')->name('upload');
Route::controller(UploadController::class)->group(function () {
    Route::post('upload','upload')->name('upload');
});

Route::resource('times', TimeController::class);
