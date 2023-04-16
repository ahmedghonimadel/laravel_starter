<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

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

//Route::get('home',function(){
//    return view('index');
//});


//Lpus4LuV7Nz.2GU

//Mail::to('ahmedghonim2021@gmail.com')->send(new WelcomeMail());

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
//Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(["verified"]);
