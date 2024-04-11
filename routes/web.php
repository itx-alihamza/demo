<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;//importing controller
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

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::view("info", 'about');

Route::get("/{user}", [usercontroller::class, 'show']);