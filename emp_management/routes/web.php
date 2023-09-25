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
    // Route::view('/addemp',"admin.addemployee");
    Route::any('/addemp', [App\Http\Controllers\EmployeeController::class, 'create']);
    Route::any('/saveemployee', [App\Http\Controllers\EmployeeController::class, 'store']);
    Route::any('/viewallemployee', [App\Http\Controllers\EmployeeController::class, 'index']);
    Route::any('/editemployee/{eid}',[App\Http\Controllers\EmployeeController::class, 'show']);
    Route::any('/updatedata/{eid}',[App\Http\Controllers\EmployeeController::class, 'update']);
    Route::any('/deleteemployee/{eid}',[App\Http\Controllers\EmployeeController::class, 'destroy']);

    Route::any('/addimages',[App\Http\Controllers\GalleryController::class, 'create']);
    Route::any('/saveimage',[App\Http\Controllers\GalleryController::class, 'store']);
    Route::any('/viewphotos',[App\Http\Controllers\GalleryController::class, 'index']);
    Route::any('/deleteimage/{pid}',[App\Http\Controllers\GalleryController::class, 'destroy']);
    


});