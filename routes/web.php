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

Route::get('/', function () {
    return view('welcome');            
});


// Route::get('/', function() {
//     return redirect("info");
// });

// Route::get('/{name}', function($same){
//     //echo "The name is : ".$name;//. is used for concatenation and value of name will be given by the user at the time of url.
//     return view('welcome',["name"=>$same]);//here name is the url and welcome is the page which is mapped to that url and page is in the view folder.
// });

//here
Route::view("contact", 'contact');
Route::view("info", 'about');

Route::get('/info', function(){ 
    return view('about');
});

Route::get("user/{id}", [usercontroller::class, 'show']);
