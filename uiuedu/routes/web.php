<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home",[HomeController::class,"index"]);

Route::get("/adminlogin",[AdminController::class,"login"]);



Route::get('/studentlogin', 'App\Http\Controllers\StudentController@studentlogin')->name('studentlogin');
Route::post('/studentlogin', 'App\Http\Controllers\studentController@studentloginPost')->name('studentlogin');




