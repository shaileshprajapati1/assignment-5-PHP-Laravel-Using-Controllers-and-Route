<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Route::view('/about',"about");
Route::view('/contact',"contact");
Route::view('/gallery',"gallery");



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('checkrollid');
Route::view('/homepages',"homepage");

Route::prefix('admin')->group(function(){
Route::view('/admindashboard',"admin.admindashboard");
});