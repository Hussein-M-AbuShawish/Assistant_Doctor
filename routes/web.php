<?php

use App\Http\Controllers\AddcaseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactControoler;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController ;
use Faker\Guesser\Name;
// use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

use Laravel\Fortify\Features;

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
    return view('index');
});

 

Route::get('profile-edit',[ProfileController::class,'update'])->middleware('auth');
Route::get('profile',[ProfileController::class,'index'])->middleware('auth');
// Route::view('/profile/edit','html.edit-profile')->middleware('auth');


Route::resource('addcase',AddcaseController::class)->middleware('auth');

Route::get('contact',[ContactControoler::class,'index'])->name('contact.index')->middleware('auth');
Route::post('contact',[ContactControoler::class,'submit'])->name('contact.submit')->middleware('auth');


Route::resource('operation',OperationController::class)->middleware('auth');

Route::view('ddd','html.patient')->middleware('auth');

Route::resource('/home',BlogController::class)->middleware('auth');


