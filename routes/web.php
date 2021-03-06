<?php

use App\Http\Controllers\blogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
    Route::get('/home', [blogController::class,'Home']);
    Route::match(['post', 'get'], '/createpost', [blogController::class,'create']);
    Route::get('/aboutme', [blogController::class,'aboutMe']);